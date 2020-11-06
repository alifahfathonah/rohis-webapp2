<?php 

		class M_siswa_muslim extends CI_Model{

		public function siswa_add($data){
				if ($this->db->insert('rh_siswa_muslim',$data)) {
					return TRUE;
				}
			}


		public function aksi_edit_siswa($id,$data){
				$this->db->set($data);
				$this->db->where('id',$id);
				if ($this->db->update('rh_siswa_muslim',$data)) {
					return true;
				}
			}

		public function cari($cari){

			if ($this->session->userdata('id_rohis')!='0') {
			$this->db->where("id_rohis",$this->session->userdata('id_rohis'));
			}
				$this->db->like('id',$cari);
				$this->db->or_like('nama',$cari);
				$this->db->or_like('jenis_kelamin',$cari);
				$this->db->or_like('kelas',$cari);
				$this->db->or_like('ekonomi',$cari);
				return $this->db->get('rh_siswa_muslim');
				
			}
		}
 ?>