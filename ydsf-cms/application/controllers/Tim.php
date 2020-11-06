<?php 

		class Tim extends CI_Controller {

			private $rohis_id = "id_rohis";
			private $table_tim = "rh_tim";
				function __construct(){
				parent:: __construct();
				$this->load->model('m_tim','tim');
				no_access();
			}


			public function show_tim(){

				$config['base_url'] = site_url('tim/show_tim');
				$config['total_rows'] = $this->db->where($this->rohis_id,$this->session->userdata('id_rohis'));
	            $config['total_rows'] = $this->db->get($this->table_tim)->num_rows();
	            $config['per_page'] = 10;
	            $config['num_links'] = 2;
	            $config['full_tag_open'] = '<div class="pagination">';
	            $config['full_tag_close'] = '</div>';
	            $this->pagination->initialize($config);

	            $this->db->select('id,nama,id_rohis,seksi_divisi,image');
	            // $this->db->where('id_rohis',$this->session->userdata($this->rohis_id));
	            $data['tim'] = $this->db->get($this->table_tim,$config['per_page'], $this->uri->segment(3));
	            $data['style_pagination'] = '';

				$this->load->view('Backend/include/header');
				$this->load->view('Backend/rh-tim/tim',$data);
				$this->load->view('Backend/include/footer');

			}


			public function home_tim(){

				$segment = $this->uri->segment(3);
				$segment4 = $this->uri->segment(4);
				$id = $this->input->post('id');

				$config['upload_path'] = './assets/image/images/';
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
				$in_data = array(

					'id_rohis' => $this->session->userdata('id_rohis'),
					'nama' => $this->input->post('nama'),
					'seksi_divisi' => $this->input->post('seksi_divisi'),
					'image' => $image['file_name']
				);

				if($segment == 'add_data'){

						if ($this->tim->add_tim($in_data)) {
							$this->session->set_flashdata('message','Data Berhasil Ditambahkan');
							redirect('tim/show_tim');
						}
							$this->session->set_flashdata('error','Data Gagal Ditambahkan');
							redirect('tim/show_tim');


				}elseif($segment = 'delete'){


				$this->tim->delete($segment4);
					$this->session->set_flashdata('message','Data Berhasil Dihapus');
					redirect('tim/show_tim');
				}else{
						$this->session->set_flashdata('error','Data Gagal Diubah');
						redirect('tim/show_tim');	
				}
			}

			public function update(){
		
				if ($this->tim->action_update($id,$data)) {
						$this->session->set_flashdata('message','Data Anda Berhasil Diubah');
						redirect('tim/show_tim');
				}else {
						$this->session->set_flashdata('error','Data Gagal Diubah');
						redirect('tim/show_tim');			
					}
			}
		}
 ?>