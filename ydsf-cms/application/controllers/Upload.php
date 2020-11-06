<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {

			private $table_upload = "rh_upload";


		function __construct(){
				parent:: __construct();
				$this->load->model('m_upload','data_upload');
				date_default_timezone_set('Asia/Jakarta');
				date_default_timezone_get('Asia/Jakarta');
				no_access();
				
			}

			public function upload_test(){

				$segment = $this->uri->segment(3);
				$segment4 = $this->uri->segment(4);

						$config['upload_path'] = './assets/image/upload/';
				        $config['allowed_types'] = 'gif|jpg|png|jpeg';
				        $config['max_size'] = '99999999999999999999999';
				        $config['max_width']  = '9999999999999999';
				        $config['max_height']  = '99999999999999999999';
				 		$this->upload->initialize($config);
				        if(!$this->upload->do_upload()){
				        $image =null;
				        }else {
				        	$image = $this->upload->data();
						}

				$data = array(
					'username' => $this->session->userdata('username'),
					'jam' => $this->input->post('jam'),
					'id_rohis' => $this->session->userdata('id_rohis'),
					'tanggal' => $this->input->post('tanggal'),
					'deskripsi' => $this->input->post('deskripsi'),
					'image' => $image['file_name']);

				if ($segment == "action_add") {
						
					if ($this->db->insert('rh_upload',$data)) {
							$this->session->set_flashdata('message','Data Berhasil Ditambahkan');
							redirect('upload/upload_test');
					}else{
							$this->session->set_flashdata('error','Data Gagal Ditambahkan');
							redirect('upload/upload_test');
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
									$this->db->delete('rh_upload');
								}	
							}else
							{	
								self::hapus($id);
								$this->db->where('id',$id);
								$this->db->delete('rh_upload');
							}

								$this->session->set_flashdata('message','Data Berhasil Dihapus');
								redirect('upload/upload_test');
						}else{
								$this->session->set_flashdata('error','Data Anda Belum Diseleksi');
								redirect('upload/upload_test');
						}

				}elseif($segment =="update"){

		
				}else{

				$config['base_url'] = site_url('upload/upload_test');
				$config['total_rows'] = $this->db->where('id_rohis',$this->session->userdata('id_rohis'));
	            $config['total_rows'] = $this->db->get('rh_upload')->num_rows();
	            $config['per_page'] = 5;
	            $config['num_links'] = 2;
	            $config['full_tag_open'] = '<div class="pagination">';
	            $config['full_tag_close'] = '</div>';
	            $this->pagination->initialize($config);

	            $this->db->order_by('rh_upload.id','DESC');
				$this->db->select('id,id_rohis,image,tanggal,username,jam,deskripsi');
				// $this->db->where('id_rohis',$this->session->userdata('id_rohis'));
	            $data['upload'] = $this->db->get('rh_upload',$config['per_page'], $this->uri->segment(3));
	            $data['style_pagination'] = '';

            	$this->db->limit('5');
            	$this->db->order_by('rh_upload.id','DESC');
            	$this->db->select('id,image,id_rohis,jam,tanggal,username');
            	$id = $this->input->post('id');
	            // $this->db->where('id_rohis',$this->session->userdata('id_rohis'));
            	$data['tabbed'] = $this->db->get('rh_upload');

				$this->load->view('Backend/include/header');
				$this->load->view('Backend/rh-upload/v_upload',$data);
				$this->load->view('Backend/include/footer');

				}
			}

				function edit_gambar(){

						$id = $this->input->post('id');
						$data = array(
						'tanggal' => $this->input->post('tanggal'),
						'jam' => $this->input->post('jam'),
						'deskripsi' => $this->input->post('deskripsi'),
					);
		
				     if(isset($_FILES['image']))
				      {
					        $this->load->library('upload');
					        $destinationPath        = "./assets/image/upload";
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
					if ($this->db->update('rh_upload',$data)) {
						$this->session->set_flashdata('message','Data Berhasil DiUbah');
						redirect('upload/upload_test');

					}else{

						$this->session->set_flashdata('error','Data Gagal Diubah');
						redirect('upload/upload_test');
		}
	}

				public function hapus($id){

				$query = $this->db->where('id',$id);
				$query = $this->db->get('rh_upload');
				$row = $query->result();

				unlink("./assets/image/upload/".$row[0]->image);

			}

			public function delete(){
				$id = $this->uri->segment(3);
				$this->db->where('id',$id);
				$this->db->delete($this->table_upload);
				redirect('upload/upload_test');
			}
}
?>