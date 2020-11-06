<?php 

		class Berita extends CI_Controller{

			private $table_berita = "rh_berita";
			private $data_id = "id";

			function __construct(){

				parent:: __construct();
				$this->load->model('m_berita','berita');
				date_default_timezone_set('Asia/Jakarta');
				date_default_timezone_get('Asia/Jakarta');
				no_access();
			}

			public function data_berita(){

					$segment = $this->uri->segment(3);
					$segment4 = $this->uri->segment(4);
					//for insert
						$config['upload_path'] = './assets/image/images/';
				        $config['allowed_types'] = 'gif|jpg|png|jpeg';
				        $config['max_size'] = '99999999999999999999999';
				        $config['max_width']  = '9999999999999999';
				        $config['max_height']  = '99999999999999999999';
				 		$this->upload->initialize($config);
				        if(!$this->upload->do_upload()){
				        $image =null;
				        }else {
				        	$image = $this->upload->data('file_name');
						}

					$data = array(
							'id_rohis' => $this->session->userdata('id_rohis'),
							'judul' => $this->input->post('judul'),
							'tanggal' => $this->input->post('tanggal'),
							'konten_berita' => strip_tags($this->input->post('konten_berita')),
							'kategori_berita' => $this->input->post('kategori_berita'),
							'username' => $this->session->userdata('username'),
							'image' => $image
					);


					//for update 
	 			   $id = $this->input->post('id');
					$data_update = array(
							'id_rohis' => $this->session->userdata('id_rohis'),
							'judul' => $this->input->post('judul'),
							'tanggal' => $this->input->post('tanggal'),
							'konten_berita' => strip_tags($this->input->post('konten_berita')),
							'kategori_berita' => $this->input->post('kategori_berita'),
							'username' => $this->session->userdata('username'),
					);
					     if(isset($_FILES['image']))
				      	{
					        $this->load->library('upload');
					        $destinationPath        = "./assets/image/images";
					        $config['upload_path']  = $destinationPath;
					        $config['allowed_types']= 'gif|jpg|png';
					        $config['max_size'] 	= '99999999999999';
			        		$config['max_width']    = '9999999999999999';
			        		$config['max_height']   = '999999999999999';
					        $this->upload->initialize($config);

					     if($this->upload->do_upload('image'))
					        {
					          $file_data = $this->upload->data();
					          $data_update['image'] = $file_data['file_name'];
					        }
					      }
			
						if ($segment =="action_add") {

						if ($this->berita->tambah($data)) {

								$this->session->set_flashdata('message','Data Berhasil Ditambahkan');
								redirect('berita/data_berita');
						}else{
								$this->session->set_flashdata('error','Data Gagal Ditambahkan');
								redirect('berita/data_berita');
						}
						
						}elseif($segment == "checkbox"){

						$validation = array(
							array("field" => 'id[]', 'rules' => 'required'),
							array('field' => 'delete', 'rules' =>'required')
					);

						$this->form_validation->set_rules($validation);
						$this->form_validation->set_rules('id');
						if ($this->form_validation->run() == TRUE) {

						$id = $this->input->post('id');

							if(is_array($id))
							{
								for($x=0;$x<count($id);$x++)
								{
									self::hapus($id[$x]);
									$this->db->where('id',$id[$x]);
									$this->db->delete($this->table_berita);
								}	
							}else
							{	
								self::hapus($id);
								$this->db->where('id',$id);
								$this->db->delete($this->table_berita);
							}

								$this->session->set_flashdata('message','Data Berhasil Dihapus');
								redirect('berita/data_berita');
							}else{
								$this->session->set_flashdata('error','Data Anda Belum Diseleksi');
								redirect('berita/data_berita');
							}

							}elseif($segment == "update"){


							if ($this->berita->action_update($id,$data_update)) {

								$this->session->set_flashdata('message','Data Berhasil Diubah');
								redirect('berita/data_berita');
							}else{

								$this->session->set_flashdata('error','Data Gagal Diubah');
								redirect('berita/data_berita');
							}
						}elseif($segment == "detail"){
   							
   							$id = $this->uri->segment(3);
				            $data['detail_info'] = $this->berita->info_detail($id)->row_array();

							$this->load->view('Backend/rh-berita/info_detail',$data);
							

						}else{

							$config['base_url'] = site_url('berita/data_berita');
							$config['total_rows'] = $this->db->where('id_rohis',$this->session->userdata('id_rohis'));
				            $config['total_rows'] = $this->db->get('rh_berita')->num_rows();
				            $config['per_page'] = 10;
				            $config['num_links'] = 2;
				            $config['full_tag_open'] = '<div class="pagination">';
				            $config['full_tag_close'] = '</div>';
				            $this->pagination->initialize($config);

 							$this->db->order_by('rh_berita.id','DESC');
							$this->db->select('id,tanggal,kategori_berita,konten_berita,username,image,judul');
							// $this->db->where('id_rohis',$this->session->userdata('id_rohis'));
				            $data['berita'] = $this->db->get('rh_berita',$config['per_page'], $this->uri->segment(3));
				            $data['style_pagination'] = '';

				            $this->db->limit(5);
				            $this->db->order_by('rh_berita.id','DESC');
							$this->db->select('id,tanggal,kategori_berita,konten_berita,username,image,judul');
		            		// $this->db->where('id_rohis',$this->session->userdata('id_rohis'));
				            $data['sort'] = $this->db->get('rh_berita');

							$this->load->view('Backend/include/header');
							$this->load->view('Backend/rh-berita/v_berita',$data);
							$this->load->view('Backend/include/footer');
						}
					}


				public function cari(){
							$id_rohis = $this->session->userdata('id_rohis');
							$cari = $this->input->post('cari');
							$cek = $this->berita->cari($cari);
							if ($cek->num_rows() > 0) {

								$data['message'] = "";
								$data['berita'] = $cek;


				            $this->db->limit(5);
				            $this->db->order_by('rh_berita.id','DESC');
				            $this->db->where('id_rohis',$this->session->userdata('id_rohis'));
							$this->db->select('id,tanggal,kategori_berita,konten_berita,username,image,judul');
				            
				            $data['sort'] = $this->db->get('rh_berita');

							$this->load->view('Backend/include/header');
							$this->load->view('Backend/rh-berita/cari',$data);
							$this->load->view('Backend/include/footer');
							}else{

							$data['message'] = "Data yang anda cari tidak ada";
							$data['berita'] = $cek;

				            $this->db->limit(5);
				            $this->db->order_by('rh_berita.id','DESC');
							$this->db->select('id,tanggal,kategori_berita,konten_berita,username,image,judul');
				            $this->db->where('id_rohis',$this->session->userdata('id_rohis'));
				            $data['sort'] = $this->db->get('rh_berita');
							
							$this->load->view('Backend/include/header');
							$this->load->view('Backend/rh-berita/cari',$data);
							$this->load->view('Backend/include/footer');
						}
					}

			public function view_detail(){
						$id_rohis = $this->input->post('id_rohis');
				            $this->db->limit(6);
				            $this->db->order_by('rh_berita.id','DESC');
							$this->db->select('id_rohis,tanggal,kategori_berita,konten_berita,username,image,judul');
			        		$this->db->where('id_rohis',$id_rohis);
				            $data['sort'] = $this->db->get('rh_berita');
							$id = $this->uri->segment(3);

							$data['detail_info'] = $this->berita->info_detail($id)->row_array();
							$this->load->view('Backend/include/header');
							$this->load->view('Backend/rh-berita/info_detail',$data);
							$this->load->view('Backend/include/footer');
						}

			public function hapus($id){

							$query = $this->db->where('id',$id);
							$query = $this->db->get($this->table_berita);
							$row = $query->result();

							unlink("./assets/image/images/".$row[0]->image);

						}

			public function delete_one($id){

							$this->db->where('id',$id);
							$this->db->delete($this->table_berita);
							$query = $this->db->get($this->table_berita);
							$row = $query->result();

							unlink("./assets/image/images/".$row[0]->image);
							$this->session->set_flashdata('message','Data Berhasil Dihapus');
							redirect('berita/data_berita');
			}

		}

 ?>