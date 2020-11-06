<?php 

		class M_aktivitas_rohis extends CI_Model{

			private $table_jadwal = "rh_jadwal_kegiatan";


			function kegiatan_add($data){
					$method = TRUE;
				if ($this->db->insert($this->table_jadwal,$data)) {
					return $method;
				}
			}

				function update_jadwal($id,$data){
				$this->db->set($data);
				$this->db->where('id',$id);
				if ($this->db->update($this->table_jadwal,$data)) {
					return TRUE;
				}
			}

			public function checkbox($id){

				$this->db->where_in('id',$id);
				if ($this->db->delete('rh_jadwal_kegiatan')) {
					return TRUE;
				}else{
					return FAlSE;
				}
			}

			public function cari($cari){
					if ($this->session->userdata('id_rohis')!='0') {
			$this->db->where("id_rohis",$this->session->userdata('id_rohis'));}

				$this->db->like('ulama_tokoh',$cari);
				$this->db->or_like('nama_aktivitas',$cari);
				$this->db->or_like('tempat',$cari);
				$this->db->or_like('kategori_aktivitas',$cari);
				return $this->db->get('rh_jadwal_kegiatan');
				
			}
		}

 ?>