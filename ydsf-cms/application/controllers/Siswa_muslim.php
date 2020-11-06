<?php 

		class Siswa_muslim extends CI_Controller{

		function __construct(){

				parent::__construct();
				$this->load->model('m_siswa_muslim','muslim');
				no_access();
			}

		public function tampil_siswa(){

					$segment3 = $this->uri->segment(3);
					$segment4 = $this->uri->segment(4);

					$id = $this->input->post('id');
					$data = array(
							'id_rohis' 			 => $this->session->userdata('id_rohis'),
							'nama' 			     => $this->input->post('nama'),
							'jenis_kelamin'		 => $this->input->post('jenis_kelamin'),
							'beasiswa' 			 => $this->input->post('beasiswa'),
							'kelas' 		     => $this->input->post('kelas'),
							'ekonomi' 		     => $this->input->post('ekonomi'),
							'aktifitas_dakwah'   => $this->input->post('aktifitas_dakwah'),
							'aktifitas_akademis' => $this->input->post('aktifitas_akademis')
						);

				if ($segment3 == "action_add") {

					if ($data!='') {
						
						if ($this->muslim->siswa_add($data)) {
								$this->session->set_flashdata('message','Data Anda Berhasil Diubah');
								redirect('siswa_muslim/tampil_siswa');
							}
					}else{

						$this->session->set_flashdata('error','Data Gagal Diubah');
						redirect('siswa_muslim/tampil_siswa');
					}
				}elseif($segment3 == 'delete'){

							$this->db->where('id',$segment4);
							$this->db->delete('rh_siswa_muslim');
							$this->session->set_flashdata('message','Data Berhasil di Hapus');
							redirect('siswa_muslim/tampil_siswa');

				}elseif($segment3 == "checkbox"){


						$validation = array(
									array("field" => 'id[]', 'rules' => 'required'),
									array('field' => 'delete', 'rules' =>'required')
							);
						$this->form_validation->set_rules($validation);
						$this->form_validation->set_rules('id');

						if ($this->form_validation->run() == TRUE) {

							$id = $this->input->post('id');
							$this->db->where_in('id',$id);
							$this->db->delete('rh_siswa_muslim');
							$this->session->set_flashdata('message','Data Berhasil di Hapus');
							redirect('siswa_muslim/tampil_siswa');
						}else{
							$this->session->set_flashdata('error','Data Anda Belum Diseleksi');
							redirect('siswa_muslim/tampil_siswa');
						}

				}elseif($segment3 == "action_update"){

							if ($this->muslim->aksi_edit_siswa($id,$data)) {
							$this->session->set_flashdata('message','Data Anda Berhasil Diubah');
							redirect('siswa_muslim/tampil_siswa');
						}else{
							$this->session->set_flashdata('error','Data Gagal Diubah');
							redirect('siswa_muslim/tampil_siswa');}

				}else{

			   			$config['base_url'] = site_url('siswa_muslim/tampil_siswa');
			            $config['total_rows'] = $this->db->where('id_rohis',$this->session->userdata('id_rohis'));
			            $config['total_rows'] = $this->db->get('rh_siswa_muslim')->num_rows();
			            $config['per_page'] = 1;
			            $config['num_links'] = 2;
			            $config['full_tag_open'] = '<div class="pagination">';
			            $config['full_tag_close'] = '</div>';
			            $this->pagination->initialize($config);
			            //this 
			            $this->db->select('id,nama,jenis_kelamin,kelas,beasiswa,ekonomi,aktifitas_dakwah,aktifitas_akademis');
			            // $this->db->where('id',$this->session->userdata('id_rohis'));
			           $data['muslim'] = $this->db->get('rh_siswa_muslim',$config['per_page'], $this->uri->segment(3));
			            $data['style_pagination'] = '';


			            $this->db->limit(5);
			            $this->db->order_by('rh_siswa_muslim.id','DESC');
				        $this->db->select('id,nama,jenis_kelamin,kelas,beasiswa,ekonomi,aktifitas_dakwah,aktifitas_akademis');
		            	// $this->db->where('id_rohis',$this->session->userdata('id_rohis'));
			            $data['sort'] = $this->db->get('rh_siswa_muslim');

						$this->load->view('Backend/include/header');
						$this->load->view('Backend/rh-siswa-muslim/siswa_muslim',$data);
						$this->load->view('Backend/include/footer');
					}
				}

			}

	
 ?>