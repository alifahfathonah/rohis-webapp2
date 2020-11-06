<?php 

		class Aktivitas_rohis extends CI_Controller{

		function __construct(){

			error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

				parent:: __construct();
				$this->load->model('m_aktivitas_rohis','aktivitas');
				date_default_timezone_set('Asia/Jakarta');
				date_default_timezone_get('Asia/Jakarta');
				no_access();
			}

		public function jadwal_kegiatan(){

				$segment = $this->uri->segment(3);
				$segment4 =$this->uri->segment(4);
				$id = $this->input->post('id');
				$data = array(
				'id_rohis' 		 => $this->session->userdata('id_rohis'),
				'nama_aktivitas' => $this->input->post('nama_aktivitas'),
				'ulama_tokoh'	 => $this->input->post('ulama_tokoh'),
				'target' 		 => $this->input->post('target'),
				'kategori_aktivitas' => $this->input->post('kategori_aktivitas'),
				'tempat' 		 => $this->input->post('tempat'),
				'jam' 			 => $this->input->post('jam'),
				'tanggal' 		 =>	$this->input->post('tanggal')
			);

				if ($segment == "add_action") {

							if ($this->aktivitas->kegiatan_add($data)) {


								$this->session->set_flashdata('message','Data Berhasil Ditambahkan');
								redirect('aktivitas_rohis/jadwal_kegiatan');	
						}else{

								$this->session->set_flashdata('error','Data Gagal Dimasukan');
								redirect('aktivitas_rohis/jadwal_kegiatan');
						}

				}elseif($segment == "checkbox"){


							$validation = array(
							array("field" => 'id[]', 'rules' => 'required'),
							array('field' => 'delete', 'rules' =>'required')
					);

								$this->form_validation->set_rules($validation);
								$this->form_validation->set_rules('id');

						if ($this->form_validation->run() == TRUE) {

								$this->aktivitas->checkbox($id);
								$this->session->set_flashdata('message','Data Berhasil Dihapus');
								redirect('Aktivitas_rohis/jadwal_kegiatan');
						}else{
								$this->session->set_flashdata('error','Data Anda Belum Diseleksi');
								redirect('Aktivitas_rohis/jadwal_kegiatan');
						}

				}elseif($segment == "cari"){

				$cari = $this->input->post('cari');
				$cek = $this->aktivitas->cari($cari);
				if ($cek->num_rows() > 0) {

					$data['message'] = "";
					$data['jadwal'] = $cek;

		            $this->db->limit(5);
		            $this->db->order_by('rh_jadwal_kegiatan.id','DESC');
		            $this->db->select('id,nama_aktivitas,ulama_tokoh,target,tempat,jam,tanggal,kategori_aktivitas');
		            // $this->db->where('id_rohis',$this->session->userdata('id_rohis'));
		            $data['sort_jadwal'] = $this->db->get('rh_jadwal_kegiatan');

					$this->load->view('Backend/include/header');
					$this->load->view('Backend/rh-aktivitas/cari',$data);
					$this->load->view('Backend/include/footer');
				}else{

					$data['message'] = "Data yang anda cari tidak ada";
					$data['jadwal'] = $cek;


		            $this->db->limit(5);
		            $this->db->order_by('rh_jadwal_kegiatan.id','DESC');
		            $this->db->select('id,nama_aktivitas,ulama_tokoh,target,tempat,jam,tanggal,kategori_aktivitas');
		            // $this->db->where('id_rohis',$this->session->userdata('id_rohis'));
		            $data['sort_jadwal'] = $this->db->get('rh_jadwal_kegiatan');
					
					$this->load->view('Backend/include/header');
					$this->load->view('Backend/rh-aktivitas/cari',$data);
					$this->load->view('Backend/include/footer');

				}


				}elseif($segment == "update"){

						if ($this->aktivitas->update_jadwal($id,$data)) {

								$this->session->set_flashdata('message','Data Berhasil Diubah');
								redirect('aktivitas_rohis/jadwal_kegiatan');
						}else{
								$this->session->set_flashdata('error','Data Gagal Diubah');
								redirect('aktivitas_rohis/jadwal_kegiatan');
						}

				}elseif($segment == "delete"){
					//hanya fungsi delete saja yang menggunakan segment4 , karena mendapatkan id dari aksi yang akan di hapus
					$this->db->where('id',$segment4);
					if ($this->db->delete('rh_jadwal_kegiatan')) {
						$this->session->set_flashdata('message','Data Berhasil Dihapus');
						redirect('aktivitas_rohis/jadwal_kegiatan');
					}else{
						$this->session->set_flashdata('error','Data Gagal Dihapus');
								redirect('aktivitas_rohis/jadwal_kegiatan');
					}

				}else{			

					$config['base_url'] = site_url('aktivitas_rohis/jadwal_kegiatan');
		   			$config['total_rows'] = $this->db->where('id_rohis',$this->session->userdata('id_rohis'));
		            $config['total_rows'] = $this->db->get('rh_jadwal_kegiatan')->num_rows();
		            $config['per_page'] = 1;
		            $config['num_links'] = 2;
		            $config['full_tag_open'] = '<div class="pagination">';
		            $config['full_tag_close'] = '</div>';

		            $this->pagination->initialize($config);
					$this->db->select('id,nama_aktivitas,ulama_tokoh,target,tempat,jam,tanggal,kategori_aktivitas');
					// $this->db->where('id_rohis',$this->session->userdata('id_rohis'));
		            $data['jadwal'] = $this->db->get('rh_jadwal_kegiatan',$config['per_page'], $this->uri->segment(3));
		            $data['style_pagination'] = '';

		            //untuk menampilkan data berdasarkan recent 
		            $this->db->limit(5);
		            $this->db->order_by('rh_jadwal_kegiatan.id','DESC');
		            $this->db->select('id,nama_aktivitas,ulama_tokoh,target,tempat,jam,tanggal,kategori_aktivitas');
		            // $this->db->where('id_rohis',$this->session->userdata('id_rohis'));
		            $data['sort_jadwal'] = $this->db->get('rh_jadwal_kegiatan');

					$this->load->view('Backend/include/header');
					$this->load->view('Backend/rh-aktivitas/jadwal_kegiatan',$data);
					$this->load->view('Backend/include/footer');
				}
			}

		}
 ?>