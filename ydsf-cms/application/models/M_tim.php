<?php 

		class M_tim extends CI_Model{

			private $table_rh ="rh_tim";
			private $id = "id";

			public function tim_add($data){
				if ($this->db->insert($this->table_rh,$data)) {
					return TRUE;
				}
					return null;
			}

			public function action_update($id,$data){


				$id = $this->input->post('id');
				$data = array(
						'nama'=> $this->input->post('nama'),
						'seksi_divisi'=> $this->input->post('seksi_divisi')
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

							$this->db->set($data);
							$this->db->where('id',$id);
							if ($this->db->update($this->table_rh,$data)) {
								return true;
							}
				}

			public function add_tim($in_data){

				if ($this->db->insert($this->table_rh,$in_data)) {
					return TRUE;
				}else{
					return NULL;
				}
			}

			public function delete($segment4){

				$this->db->where($this->id,$segment4);
				if ($this->db->delete($this->table_rh)) {
					return TRUE;
				}else{
					return FALSE;
				}
			}
		}
 ?>