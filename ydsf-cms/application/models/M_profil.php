<?php 

		class M_profil extends CI_Model{

			function profil_edit($id,$data){
				$this->db->set($data);
				$this->db->where('id',$id);
				if ($this->db->update('rh_profil',$data)) {
					return TRUE;
				}
			}
			function profil_add(){
				
				if ($this->db->insert('rh_profil',$data)) {
					return TRUE;
				}else{
					return FALSE;
				}
			}

				function detail_sekolah($id){
				$query = $this->db->get_where('rh_profil',array('id'=>$id));
				return $query->row_array();
			}
	

				function aksi_edit_profil($id,$data){
				$this->db->set($data);
				$this->db->where('id',$id);
				if ($this->db->update('rh_profil',$data)) {
					return true;
				}
			}

			function profil_detail($id){
				$query = $this->db->get_where('rh_profil',array('id'=>$id));
				return $query->row_array();
			}

			function get_sekolah($id_sekolah=""){
				$query = $this->db->where('id',$id_sekolah);
				$query = $this->db->get('rh_profil');
				return $query->result();
			}

				function frontend_cari($cari){
				$this->db->like('id',$cari);
				$this->db->or_like('nama_sekolah',$cari);
				$this->db->or_like('alamat_surat',$cari);
				return $this->db->get('rh_profil');
			}

		}
 ?>