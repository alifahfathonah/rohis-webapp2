<?php 
		
		defined('BASEPATH') OR exit('No direct script access allowed');
		
		class M_upload extends CI_Model {
		
		
			public function cari($cari){

					if ($this->session->userdata('id_rohis')!='0') {
			$this->db->where("id_rohis",$this->session->userdata('id_rohis'));
			}

				$this->db->or_like('username',$cari);
				$this->db->or_like('image',$cari);
				$this->db->or_like('tanggal',$cari);
				return $this->db->get('rh_upload');
				
			}
		}
		
		/* End of file m_upload.php */
		/* Location: ./application/models/m_upload.php */
 ?>