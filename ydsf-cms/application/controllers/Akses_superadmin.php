<?php 

		class Akses_superadmin extends CI_Controller{

		function __construct(){

				parent::__construct();
				$this->load->model('m_akses_rohis','rohis');
				$this->load->model('m_berita','berita');
				date_default_timezone_set('Asia/Jakarta');
				date_default_timezone_get('Asia/Jakarta');
				no_access();
				levelsuper();
				$this->load->model('m_akses_rohis');
			}

		function setting_rohis()
			{

				$config['base_url'] 	= site_url('akses_superadmin/setting_rohis');
	            $config['total_rows'] 	= $this->db->get('rh_login')->num_rows();
	            $config['per_page'] 	= 10;
	            $config['num_links'] 	= 2;
	            $config['full_tag_open']= '<div class="pagination">';
	            $config['full_tag_close']= '</div>';
	            $this->pagination->initialize($config);
	            $this->db->select('id,username,password,date,hakakses,id_rohis,status');
	            $data['control_admin'] = $this->db->get('rh_login',$config['per_page'], $this->uri->segment(3));
	            $data['style_pagination'] = '';

	            self::get_include();
				$this->load->view('Backend/superadmin/control_admin',$data);
			}

		function add_rohis(){

				$id_rohis = $this->input->post('id_rohis');
				$cek = $this->db->get_where('rh_login',array('id_rohis'=>$id_rohis));
				$cekdata = $cek->num_rows();
				if ($cekdata>0) {

					$this->session->set_flashdata('error','Maaf ID Rohis Sudah Digunakan');
					redirect('akses_superadmin/setting_rohis');

				}else{
					
					$data = array(
							'username' => $this->input->post('username'),
							'password' => md5($this->input->post('password')),
							'hakakses' => $this->input->post('hakakses'),
							'id_rohis' => $this->input->post('id_rohis'),
							'bg_data'  => $this->input->post('bg_data'),
							'date' 	   => $this->input->post('date'),
							'status' =>1
						);
				if ($this->rohis->add_rohis($data)) {

						$this->session->set_flashdata('message','Data Berhasil Di Masukan');
						redirect('Akses_superadmin/setting_rohis');

					}else{

						$this->session->set_flashdata('error','Data Tidak Berhasil Di Masukan');
						redirect('Akses_superadmin/setting_rohis');
					}
				}
					
				}
				
		function edit_rohis(){
				
				$id = $this->input->post('id');
				$data = array(
						'username' => $this->input->post('username'),
						'password'=> md5($this->input->post('password')),
						'hakakses'=> $this->input->post('hakakses'),
						'id_rohis' => $this->input->post('id_rohis'),
						'bg_data' => $this->input->post('bg_data'),
						'date' => $this->input->post('date'),
					);
				if ($this->rohis->edit_rohis($id,$data)) {
						$this->session->set_flashdata('message','Data berhasil diubah');
						redirect('Akses_superadmin/setting_rohis');

					}else{

						$this->session->set_flashdata('error','Data Gagal diubah');
						redirect('Akses_superadmin/setting_rohis');
					}
				}

		function checkbox(){

					$validation = array(
								array("field" => 'id_rohis[]', 'rules' => 'required'),
								array('field' => 'delete', 'rules' =>'required')
						);

					$this->form_validation->set_rules($validation);
					$this->form_validation->set_rules('id_rohis');

					if ($this->form_validation->run() == TRUE) {

							$id = $this->input->post('id_rohis');
								
							$tables = array('rh_login','rh_profil','rh_siswa_muslim','rh_tim','rh_berita','rh_kegiatan_rutin','rh_pemasukan','rh_pengeluaran','rh_jadwal_kegiatan','rh_upload');

								$this->db->where_in('id_rohis',$id);
								$this->db->delete($tables);

							$this->session->set_flashdata('message','Data Berhasil Dihapus');
							redirect('akses_superadmin/setting_rohis');

					}else{

							$this->session->set_flashdata('error','Data Anda Belum Diseleksi');
							redirect('akses_superadmin/setting_rohis');
					}
				}

		function dashboard(){

	        $datacolor = array('#3498db','#9b59b6','#2ecc71','#f1c40f','#d35400','#ecf0f1','#9C27B0','#1abc9c'
	        ,'#34495e','#95a5a6','#EEFF41','#AEEA00','#ffeb3b','#795548','#ff5722','#9ccc65');
	        $bln = array('01','02','03','04','05','06','07','08','09','10','11','12');
	        $data['blns'] = array('Jan','Feb','Mar','Apr','Mei','Jun','Jul','Agu','Sep','Okt','Nov','Des');

	        $act=[];
	        $x=0;
	        $rohisdata=[];
	        $datam=[];

	        for($i=0;$i<12;$i++)
	        {
	            $datum = $this->rohis->get_dashboard(date('Y').'-'.$bln[$i]);
	            if($datum!=NULL)
	            {
	                foreach($datum as $mas)
	                {
	                    if(empty($rohisdata[$mas->id_rohis]))
	                    {
	                        $datam[] = $mas->id_rohis;
	                        $rohisdata[$mas->id_rohis][] = $datacolor[$x];
	                        $rohisdata[$mas->id_rohis][] = $mas->nama_sekolah;
	                        $x++;
	                    }

	                    if(empty($rohisdata[$mas->id_rohis]['data'][($i+1)]))
	                    {
	                    	$rohisdata[$mas->id_rohis]['data'][($i+1)] = $mas->jml_kegiatan;
	                    }
	                }
	            }
	        }
	        
	        $data['datam']  = $datam;
	        $data['rohis']= $rohisdata;

						$this->db->limit(5);
						$this->db->order_by('rh_jadwal_kegiatan.id','DESC');
						$this->db->select('id,tanggal,jam,nama_aktivitas,ulama_tokoh,tempat,target');
						$data['jadwal'] = $this->db->get('rh_jadwal_kegiatan');

						self::get_include();
						$this->load->view('Backend/superadmin/dashboard',$data);
						
				}


		function aktivitas_terbaru(){

						   	$data['aktivitas'] = $this->rohis->terbaru();

						   	self::get_include();
						   	$this->load->view('Backend/superadmin/aktivitas_terbaru',$data);
						   	
				  }

		 function get_include(){

						$this->load->view('Backend/superadmin/include/header');
						$this->load->view('Backend/superadmin/include/footer');
				  }


		function tampil_berita(){

				$config['base_url']		 = site_url('akses_superadmin/tampil_berita');
	            $config['total_rows']	 = $this->db->get('rh_berita')->num_rows();
	            $config['per_page'] 	 = 10;
	            $config['num_links'] 	 = 2;
	            $config['full_tag_open'] = '<div class="pagination">';
	            $config['full_tag_close']= '</div>';
	            $this->pagination->initialize($config);
				$this->db->select('id,tanggal,kategori_berita,konten_berita,username,image,judul');
	            $data['berita'] = $this->db->get('rh_berita',$config['per_page'], $this->uri->segment(3));
	            $data['style_pagination'] = '';

	            $this->db->limit(5);
	            $this->db->order_by('rh_berita.id','DESC');
				$this->db->select('id,tanggal,kategori_berita,konten_berita,username,image,judul');
	            $data['sort'] = $this->db->get('rh_berita');

	            self::get_include();
				$this->load->view('Backend/superadmin/berita',$data);
				

				}

		function tambah_berita(){
				
						$config['upload_path']   = './assets/image/images/';
				        $config['allowed_types'] = 'gif|jpg|png|jpeg';
				        $config['max_size'] 	 = '99999999999999999999999';
				        $config['max_width']  	 = '9999999999999999';
				        $config['max_height']  	 = '99999999999999999999';
				 		$this->upload->initialize($config);
				        if(!$this->upload->do_upload()){
				        $image =null;
		        }else {
			        	$image = $this->upload->data();
				}
					if ($this->session->userdata('id_rohis')!='0') {
							$dat= $this->session->userdata('id_rohis');
					}else{
							$dat='superadmin';
					}

				$data = array(
							'id_rohis' => $dat,
							'judul' => $this->input->post('judul'),
							'tanggal' => $this->input->post('tanggal'),
							'konten_berita' => $this->input->post('konten_berita'),
							'kategori_berita' => $this->input->post('kategori_berita'),
							'username' => $this->session->userdata('username'),
							'image' => $image['file_name']
					);

				if ($this->berita->tambah($data)) {
						$this->session->set_flashdata('message','Data Berhasil Ditambahkan');
						redirect('akses_superadmin/tampil_berita');

				}else{

						$this->session->set_flashdata('error','Data Gagal Ditambahkan');
						redirect('akses_superadmin/tampil_berita');
				}
			}

		function edit_berita(){


					$id = $this->input->post('id');
					$data = array(

						'tanggal' => $this->input->post('tanggal'),
						'judul' => $this->input->post('judul'),
						'konten_berita' => $this->input->post('konten_berita'),
						'kategori_berita' => $this->input->post('kategori_berita')

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
				          $data['image'] = $file_data['file_name'];
				        }
				      }

						$this->db->where('id',$id);
					if ($this->db->update('rh_berita',$data)) {

						$this->session->set_flashdata('message','Data Berhasil Diubah');
						redirect('akses_superadmin/tampil_berita');

					}else{

						$this->session->set_flashdata('error','Data Gagal Diubah');
						redirect('akses_superadmin/tampil_berita');
		}
	}


			 function cari(){
				
				$cari = $this->input->post('cari');
				$cek = $this->m_akses_rohis->cari($cari);
				if ($cek->num_rows() > 0) {

					$data['message'] = "";
					$data['control_admin'] = $cek;

		            $this->db->limit(5);
		            $this->db->order_by('rh_login.id','DESC');
					$this->db->select('id,username,password,date,hakakses,id_rohis,status,bg_data');
		            
		            $data['sort'] = $this->db->get('rh_login');

					self::get_include();
					$this->load->view('Backend/superadmin/cari',$data);
					
				}else{

					$data['message'] = "Data yang anda cari tidak ada";
					$data['control_admin'] = $cek;

		            $this->db->limit(5);
		            $this->db->order_by('rh_login.id','DESC');
					$this->db->select('id,username,password,date,hakakses,id_rohis,status,bg_data');
		            $data['sort'] = $this->db->get('rh_login');
					
					self::get_include();
					$this->load->view('Backend/superadmin/cari',$data);
					

				}
			}

	function checkbox_berita(){

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
							$this->db->delete('rh_berita');
						}	
					}else
					{	
						self::hapus($id);
						$this->db->where('id',$id);
						$this->db->delete('rh_berita');
					}

						$this->session->set_flashdata('message','Data Berhasil Dihapus');
						redirect('akses_superadmin/tampil_berita');
				}else{
						$this->session->set_flashdata('error','Data Anda Belum Diseleksi');
						redirect('akses_superadmin/tampil_berita');
				}
			}


		function hapus($id){

				$query = $this->db->where('id',$id);
				$query = $this->db->get('rh_berita');
				$row = $query->result();

				unlink("./assets/image/images/".$row[0]->image);

			}
		function delete_one($id){
			$this->db->where('id',$id);
			$this->db->delete('rh_berita');
			$this->session->set_flashdata('message','Data Berhasil Dihapus');
			redirect('akses_superadmin/tampil_berita');

		}
		function laporan_pemasukan(){

				$this->load->view('Backend/superadmin/include/header');
				$this->load->view('Backend/superadmin/laporan-pemasukan/index');
				$this->load->view('Backend/superadmin/include/footer');
				
			}

		function laporan_pengeluaran(){

				$this->load->view('Backend/superadmin/include/header');
				$this->load->view('Backend/superadmin/laporan-pengeluaran/index');				
				$this->load->view('Backend/superadmin/include/footer');
			}

		function deadindividu($id=''){
			
			$data = array(
				'status' =>2
			);
			$this->db->where('id',$id);
			$this->db->update('rh_login',$data);
			$this->session->set_flashdata('message','Status Berhasil Di Nonaktifikan');
			redirect('akses_superadmin/setting_rohis');
		}

		function onindividu($id=''){
			
			$data = array(
					'status' =>1
			);
			$this->db->where('id',$id);
			$this->db->update('rh_login',$data);
			$this->session->set_flashdata('message','Status Behasil Di Aktifkan');
			redirect('akses_superadmin/setting_rohis');

		}
		
		 function view_detail(){


	            $this->db->limit(6);
	            $this->db->order_by('rh_berita.id','DESC');
				$this->db->select('id,tanggal,kategori_berita,konten_berita,username,image,judul');
        		
	            $data['sort'] = $this->db->get('rh_berita');


				$id = $this->uri->segment(3);

				$data['detail_info'] = $this->berita->info_detail($id)->row_array();

				self::get_include();
				$this->load->view('Backend/superadmin/info_detail',$data);
						
			}


	}
 ?>