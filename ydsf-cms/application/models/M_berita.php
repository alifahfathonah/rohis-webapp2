<?php 
		class M_berita extends CI_Model{

			private $table_berita = "rh_berita";
			private $data_id = "id";


			public function get_all_data($id= null)
			{
				if ($id  == null) {
					$query = "SELECT * FROM rh_berita ORDER BY rh_berita.id DESC";
					$data = $this->db->query($query);
				// $data = $this->db->get('rh_berita');
				return $data->result_array();	
				}else {
					return $this->db->get_where('rh_berita',['id'=>$id])->result_array();
				}
				
			}

			public function search_berita($cari)
			{
				$this->db->like('id',$cari);
				$this->db->or_like('judul',$cari);
				$this->db->or_like('konten_berita',$cari);
				$this->db->or_like('kategori_beita',$cari);

				return $this->db->get('rh_berita',$cari);
			}

			public function deleteBerita($id)
			{
				$this->db->where('id',$id);
				$this->db->delete('rh_berita');
				return $this->db->affected_rows();
			}

			public function createBerita($data)
			{
				$this->db->insert('rh_berita',$data);
				return $this->db->affected_rows();
			}
			

			public function updateBerita($data,$id)
			{
				$this->db->set($data);
				$this->db->where('id',$id);
				$this->db->update('rh_berita',$data);
				return $this->db->affected_rows();
			}

			

			public function tambah($data){

				if ($this->db->insert($this->table_berita,$data)) {
					return TRUE;
				}
			}

			public function action_update($id,$data_update){
				$this->db->set($data_update);
				if ($this->db->update($this->table_berita,$data_update,['id'=>$id])) {
					return TRUE;
				}
			}

			public function detail_berita($id){

				$query = $this->db->get_where($this->table_berita,array('id'=>$id));
				return $query->row_array();
			}

			public function frontend_cari($cari){
				
				$this->db->like('id',$cari);
				$this->db->or_like('judul',$cari);
				$this->db->or_like('username',$cari);
				$this->db->or_like('kategori_berita',$cari);
				return $this->db->get($this->table_berita);
			}

			public function cari($cari){

			if ($this->session->userdata('id_rohis')!='0') {
			$this->db->where("id_rohis",$this->session->userdata('id_rohis'));
			}
				$this->db->like('id',$cari);
				$this->db->or_like('judul',$cari);
				$this->db->or_like('username',$cari);
				$this->db->or_like('kategori_berita',$cari);
				$this->db->or_like('tanggal',$cari);
				return $this->db->get($this->table_berita);
				
			}

			public function info_detail($id){
				$query = $this->db->get_where($this->table_berita,array('id'=>$id));
				return $query;

			}
		}

 ?>