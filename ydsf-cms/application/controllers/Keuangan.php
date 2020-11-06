	<?php 

		class Keuangan extends CI_Controller{

			function __construct(){
				parent:: __construct();
				$this->load->model('m_keuangan','uang');
				no_access();
			}

		function tampil_pemasukan(){

			$config['base_url'] = site_url('keuangan/tampil_pemasukan');
			$config['total_rows'] = $this->db->where('id_rohis',$this->session->userdata('id_rohis'));
            $config['total_rows'] = $this->db->get('rh_pemasukan')->num_rows();
            $config['per_page'] =10;
            $config['num_links'] = 2;
            $config['full_tag_open'] = '<div class="pagination">';
            $config['full_tag_close'] = '</div>';
            $this->pagination->initialize($config);
			$this->db->select('id,deskripsi,tanggal,saldo');
			// $this->db->where('id_rohis',$this->session->userdata('id_rohis'));
            $data['pemasukan'] = $this->db->get('rh_pemasukan',$config['per_page'], $this->uri->segment(3));
            $data['style_pagination'] = '';

			$this->load->view('Backend/include/header');
			$this->load->view('Backend/rh-keuangan/pemasukan',$data);
			$this->load->view('Backend/include/footer');
			}

		function pemasukan_tambah(){
				
				$objek = array(
						'id_rohis' => $this->session->userdata('id_rohis'),
						'deskripsi' => $this->input->post('deskripsi'),
						'tanggal' => $this->input->post('tanggal'),
						'saldo' => $this->input->post('saldo')
					);
				if ($this->uang->tambah_pemasukan($objek)) {
					$this->session->set_flashdata('message','Data Berhasil Ditambahkan');
					redirect('keuangan/tampil_pemasukan');
				}else {
					$this->session->set_flashdata('error','Data Tidak Dapat Dimasukan');
					redirect('keuangan/tampil_pemasukan');
				}
			}



		function edit_pemasukan(){

					$id = $this->input->post('id');
					$data = array(
							'tanggal' => $this->input->post('tanggal'),
							'deskripsi' => $this->input->post('deskripsi'),
							'saldo' => $this->input->post('saldo')
						);
					if ($this->uang->pemasukan_edit($id,$data)) {
						$this->session->set_flashdata('message','Data Berhasil Diubah');
						redirect('keuangan/tampil_pemasukan');
					}else{
						$this->session->set_flashdata('error','Data Gagal Diubah');
						redirect('keuangan/tampil_pemasukan');
					}
			}

		function laporan_pemasukan(){

				$this->load->view('Backend/include/header');
				$this->load->view('Backend/rh-keuangan/laporan-pemasukan/index');
				$this->load->view('Backend/include/footer');
			}

		 function tampil_laporan_pemasukan(){

	            $bulan=$this->input->post('bulan');
	            $tahun=$this->input->post('tahun');
	            $data['bulan']=$bulan;
	            $data['tahun']=$tahun;
	            $data['laporan']=$this->uang->laporan_pemasukan($bulan,$tahun);
	            $data['jumlah_pemasukan']=$this->uang->jumlah_pemasukan($bulan,$tahun);
	            
				$this->load->view('Backend/rh-keuangan/laporan-pemasukan/tampil',$data);
				$this->load->view('Backend/include/footer');
        }

        function checkbox_pemasukan(){
				$validation = array(
							array("field" => 'id[]', 'rules' => 'required'),
							array('field' => 'delete', 'rules' =>'required')
					);
				$this->form_validation->set_rules($validation);
				$this->form_validation->set_rules('id');

				if ($this->form_validation->run() == TRUE) {
					$id = $this->input->post('id');

					$this->db->where_in('id',$id);
					$this->db->delete('rh_pemasukan');
					$this->session->set_flashdata('message','Data Berhasil Dihapus');
					redirect('keuangan/tampil_pemasukan');
				}else{
					$this->session->set_flashdata('error','Data Anda Belum Diseleksi');
					redirect('keuangan/tampil_pemasukan');
				}
			}


		function tampil_pengeluaran(){

				$config['base_url'] = site_url('keuangan/tampil_pengeluaran');
				$config['total_rows'] = $this->db->where('id_rohis',$this->session->userdata('id_rohis'));
	            $config['total_rows'] = $this->db->get('rh_pengeluaran')->num_rows();
	            $config['per_page'] = 10;
	            $config['num_links'] = 2;
	            $config['full_tag_open'] = '<div class="pagination">';
	            $config['full_tag_close'] = '</div>';
	            $this->pagination->initialize($config);
				$this->db->select('id,deskripsi,tanggal,saldo');
				// $this->db->where('id_rohis',$this->session->userdata('id_rohis'));
	            $data['pengeluaran'] = $this->db->get('rh_pengeluaran',$config['per_page'], $this->uri->segment(3));
	            $data['style_pagination'] = '';

				$this->load->view('Backend/include/header');
				$this->load->view('Backend/rh-keuangan/pengeluaran',$data);
				$this->load->view('Backend/include/footer');
			}

		function laporan_pengeluaran(){

				$this->load->view('Backend/include/header');
				$this->load->view('Backend/rh-keuangan/laporan-pengeluaran/index');
				$this->load->view('Backend/include/footer');
			}

		function tampil_laporan_pengeluaran(){

            $bulan=$this->input->post('bulan');
            $tahun=$this->input->post('tahun');
            $data['bulan']=$bulan;
            $data['tahun']=$tahun;
            $data['laporan']=$this->uang->laporan_pengeluaran($bulan,$tahun);
            
            $data['jumlah_pengeluaran']=$this->uang->jumlah_pengeluaran($bulan,$tahun);
			$this->load->view('Backend/rh-keuangan/laporan-pengeluaran/tampil',$data);
			$this->load->view('Backend/include/footer');
        }

		function pengeluaran_tambah(){
	
					$data = array(
							'id_rohis' => $this->session->userdata('id_rohis'),
							'deskripsi' => $this->input->post('deskripsi'),
							'tanggal' => $this->input->post('tanggal'),
							'saldo' => $this->input->post('saldo')
						);
					if ($this->uang->tambah_pengeluaran($data)) {
						$this->session->set_flashdata('message','Data Berhasil Ditambahkan');
						redirect('keuangan/tampil_pengeluaran');
					}else {
						$this->session->set_flashdata('error','Data Tidak Dapat Dimasukan');
						redirect('keuangan/tampil_pengeluaran');
					}
				}
				
		function edit_pengeluaran(){

					$id = $this->input->post('id');
					$data = array(
							'tanggal' => $this->input->post('tanggal'),
							'deskripsi' => $this->input->post('deskripsi'),
							'saldo' => $this->input->post('saldo')
						);
					if ($this->uang->pengeluaran_edit($id,$data)) {
						$this->session->set_flashdata('message','Data Berhasil Diubah');
					redirect('keuangan/tampil_pengeluaran');
				}else{
						$this->session->set_flashdata('error','Data Gagal Diubah');
						redirect('keuangan/tampil_pengeluaran');
					}
			}

			 
		function checkbox_pengeluaran(){

				$validation = array(
							array("field" => 'id[]', 'rules' => 'required'),
							array('field' => 'delete', 'rules' =>'required')
					);
				$this->form_validation->set_rules($validation);
				$this->form_validation->set_rules('id');

				if ($this->form_validation->run() == TRUE) {
					$id = $this->input->post('id');

					$this->db->where_in('id',$id);
					$this->db->delete('rh_pengeluaran');
					$this->session->set_flashdata('message','Data Berhasil Dihapus');
					redirect('keuangan/tampil_pengeluaran');
				}else{
					$this->session->set_flashdata('error','Data Anda Belum Diseleksi');
					redirect('keuangan/tampil_pengeluaran');
				}
			}

		function tampil_laporan_pemasukan_super(){

	            $bulan=$this->input->post('bulan');
	            $tahun=$this->input->post('tahun');
	            $data['bulan']=$bulan;
	            $data['tahun']=$tahun;
	            $data['laporan']=$this->uang->laporan_pemasukan_rohis($bulan,$tahun);
	            $data['jumlah_pemasukan']=$this->uang->jumlah_pemasukan_rohis($bulan,$tahun);
	            
				$this->load->view('Backend/rh-keuangan/laporan-pemasukan/tampil',$data);
				$this->load->view('Backend/include/footer');
        }

       function tampil_laporan_pengeluaran_super(){

            $bulan=$this->input->post('bulan');
            $tahun=$this->input->post('tahun');
            $data['bulan']=$bulan;
            $data['tahun']=$tahun;
            $data['laporan']=$this->uang->laporan_pengeluaran_rohis($bulan,$tahun);
            
            $data['jumlah_pengeluaran']=$this->uang->jumlah_pengeluaran_rohis($bulan,$tahun);
			$this->load->view('Backend/rh-keuangan/laporan-pengeluaran/tampil',$data);
			$this->load->view('Backend/include/footer');
        }


        function delete_one($id){

        	$this->db->where('id',$id);
        	$this->db->delete('rh_pemasukan');
        	$this->session->set_flashdata('message','Data Berhasil Dihapus');
        	redirect('keuangan/tampil_pemasukan');
        }

           function delete_one1($id){

        	$this->db->where('id',$id);
        	$this->db->delete('rh_pengeluaran');
        	$this->session->set_flashdata('message','Data Berhasil Dihapus');
        	redirect('keuangan/tampil_pengeluaran');
        }

	}
 ?>