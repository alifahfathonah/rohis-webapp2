<?php 

		class Frontend_sekolah extends CI_Controller{

				function __construct(){
				parent:: __construct();
				$this->load->model('m_profil','profil');
				date_default_timezone_set('Asia/Jakarta');
				date_default_timezone_get('Asia/Jakarta');
			
			}


			function maps($param="")
		    	{
		        $this->load->library('googlemaps');
		        
		        $config['zoom'] = '13';

		        $styleplus="";
		        
		        if($param!="")
		        {
					$get_data = $this->db->where('id',$param);
					$get_data = $this->db->get('rh_profil');
		            $datas = $get_data->result();

					$styleplus = "style='overflow:hidden;margin-top:-150px'";
		            $config['center'] = $datas[0]->long.','.$datas[0]->lat;
		        }else{
					$get_data = $this->db->get('rh_profil');
		        	$config['center'] = '-6.9205235,107.6116515';
				}

		        $this->googlemaps->initialize($config);	

				foreach($get_data->result() as $res): 
					$marker = array();
					$marker['position'] = $res->long.','.$res->lat;
					$marker['infowindow_content'] = 'Sekolah '.$res->nama_sekolah;
					$marker['draggable'] = TRUE;
					$marker['animation'] = 'DROP';
					$this->googlemaps->add_marker($marker);
				endforeach;
		        $this->googlemaps->add_marker($marker);
		        $map = $this->googlemaps->create_map();


		        echo "<html ".$styleplus.">".$map['html'];
		        echo $map['js']."</html>";

		    }

		function f_daftar_sekolah($id=''){

			$config['base_url'] = site_url('Frontend_sekolah/f_daftar_sekolah');
            $config['total_rows'] = $this->db->get('rh_profil')->num_rows();
            $config['per_page'] = 6;
            $config['num_links'] = 2;
            $config['full_tag_open'] = '<div class="pagination">';
            $config['full_tag_close'] = '</div>';
            $this->pagination->initialize($config);
			$this->db->select('id,id_rohis,nama_sekolah,alamat_surat,long,lat,rt,rw,desa,kecamatan,kabupaten,bg_data,image,username');
            $data['daftar'] = $this->db->get('rh_profil',$config['per_page'], $this->uri->segment(3));
            $data['style_pagination'] = '';

			$this->load->view('frontend/include/header');
			$this->load->view('frontend/sekolah/f_daftar_sekolah',$data);
			$this->load->view('frontend/include/footer');

		}
				function f_detail_sekolah($id_sekolah=""){


					$id = $this->uri->segment(3);
					$data['view_detail'] = $this->profil->detail_sekolah($id);
					$data['sekolah'] = $this->profil->get_sekolah($id_sekolah);
					// $data['sekolah'] = $this->db->get('rh_profil')->result();

					$this->db->select('id_rohis,tanggal,jam,nama_aktivitas,ulama_tokoh,tempat,target');
					$data['detail_sekolah'] = $this->db->get('rh_jadwal_kegiatan');


					$this->db->select('id_rohis,image,tanggal,id');
					$data['detail_gallery'] = $this->db->get('rh_upload');

					$this->load->view('frontend/include/header');;
					$this->load->view('frontend/sekolah/f_detail_sekolah',$data);
					$this->load->view('frontend/include/footer');
				}


				function cari(){

	        $cari=$this->input->post('cari');
	        $cek=$this->profil->frontend_cari($cari);
	        if($cek->num_rows()>0){
            $data['message']="";
            $data['daftar']= $cek;
            
            $this->load->view('frontend/include/header');
            $this->load->view('frontend/sekolah/cari_sekolah',$data);
        	$this->load->view('frontend/include/footer');

	        }else{
	        	
	        $data['daftar']= $cek;
           	$data['message'] = "Data Yang Anda Cari Tidak Ada";
           	
            $this->load->view('frontend/include/header');
       	 	$this->load->view('frontend/sekolah/cari_sekolah',$data);
    		$this->load->view('frontend/include/footer');
	        }
	    }
		}

 ?>