<?php 

	class Frontend_berita extends CI_Controller{


				function __construct(){
				parent:: __construct();
				$this->load->model('m_berita','berita');
				date_default_timezone_set('Asia/Jakarta');
				date_default_timezone_get('Asia/Jakarta');
			
			}

			function f_berita(){

			$config['base_url'] 	= site_url('Frontend_berita/f_berita');
            $config['total_rows'] = $this->db->get('rh_berita')->num_rows();
            $config['per_page'] = 6;
            $config['num_links'] = 2;
            $config['full_tag_open'] = '<div class="pagination">';
            $config['full_tag_close'] = '</div>';
            $this->pagination->initialize($config);
			$this->db->select('id,tanggal,kategori_berita,konten_berita,username,image,judul');
            $data['berita'] = $this->db->get('rh_berita',$config['per_page'], $this->uri->segment(3));
            $data['style_pagination'] = '';

				$this->load->view('frontend/berita/f_berita',$data);
				$this->load->view('frontend/include/footer');
				}

		function f_detail_berita(){
			$this->db->limit('5');
			$this->db->order_by('rh_berita.id','DESC');
			$this->db->select('id,tanggal,kategori_berita,konten_berita,username,image,judul');
			$data['akses_detail'] = $this->db->get('rh_berita')->result();
			$id = $this->uri->segment(3);
			$data['view_detail'] = $this->berita->detail_berita($id);
			$this->load->view('frontend/include/header');
			$this->load->view('frontend/berita/f_detail_berita',$data);
			$this->load->view('frontend/include/footer');

		}


		function f_berita_terbaru(){
			$this->db->limit('5');
			$this->db->select('id,tanggal,kategori_berita,konten_berita,username,image,judul,username');
			$data['berita_terbaru'] = $this->db->get('rh_berita');
			
			$this->db->limit('10');
			$this->db->select('id,id_rohis,nama_sekolah,alamat_surat,long,lat,rt,rw,desa,kecamatan,kabupaten,bg_data,image,username');
			$data['daftar_sekolah'] = $this->db->get('rh_profil');
			$this->load->view('frontend/include/header');
			$this->load->view('frontend/berita/f_berita_terbaru',$data);
			$this->load->view('frontend/include/footer');

		}


				function cari(){

		        $cari=$this->input->post('cari');
		        $cek=$this->berita->frontend_cari($cari);
		        if($cek->num_rows()>0){
	            $data['message'] ="";
	            $data['berita'] = $cek;
	            
	            
	            $this->load->view('frontend/berita/cari_berita',$data);
	        	$this->load->view('frontend/include/footer');

		        }else{
		        	
		        $data['berita'] = $cek;
	           	$data['message'] = "Data Yang Anda Cari Tidak Ada";
	            
	       	 	$this->load->view('frontend/berita/cari_berita',$data);
	    		$this->load->view('frontend/include/footer');
	        }
	    }
	}
 ?>