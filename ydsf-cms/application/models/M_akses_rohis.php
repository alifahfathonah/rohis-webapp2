<?php 
		
		class M_akses_rohis extends CI_Model{

			function add_rohis($data){
				
				$this->db->insert('rh_login',$data);

				if($data['hakakses']=="admin")
				{
					$this->db->insert('rh_profil',$data);
					$this->db->insert('rh_pribadi',$data);
				}
					return TRUE;
				
			}

				function edit_rohis($id,$data){
				$this->db->set($data);
				$this->db->where('id',$id);
				$this->db->update('rh_login',$data);

				if($data['hakakses']=="admin")
				{
					$this->db->insert('rh_profil',$data);
				}
				return true;
				
			}

			function cek(){
				$this->db->where('id');
				$query = $this->db->get('rh_login');
				return $query;
			}

			function cari($cari){
				$this->db->like('id',$cari);
				$this->db->or_like('username',$cari);
				return $this->db->get('rh_login');
			}

			function terbaru(){
				$this->db->order_by('rh_jadwal_kegiatan.id','DESC');
				$query = $this->db->get('rh_jadwal_kegiatan');
				return $query;

			}

			    function get_dashboard($month="")
			    {
			        $query = $this->db->query('select id_rohis,nama_sekolah,sum(jml_kegiatan) as jml_kegiatan from (select p.id_rohis,p.nama_sekolah,count(jk.id) as jml_kegiatan from rh_jadwal_kegiatan jk,rh_profil p where jk.id_rohis=p.id_rohis and jk.tanggal like "'.$month.'%" group by jk.id_rohis
						UNION ALL
						select p.id_rohis,p.nama_sekolah,count(kr.id) as jml_kegiatan from rh_kegiatan_rutin kr,rh_profil p where kr.id_rohis=p.id_rohis and kr.tanggal like "'.$month.'%" group by kr.id_rohis)t
						group by id_rohis order by jml_kegiatan DESC');
			        
			        if($query->num_rows() > 0)
			        
			        return $query->result();
			        
			        else
			        
			        return null;
			    }


		}

 ?>