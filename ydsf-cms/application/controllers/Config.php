<?php 

class Config extends CI_Controller{

			function __construct(){
				parent::__construct();
				$this->load->model('m_login');
				date_default_timezone_set('Asia/bangkok');

			}
			function login(){
					$this->load->view('Backend/autentikasi/login');
					$this->load->view('Backend/include/footer');

			}

			function proseslogin(){	
				$email    = $this->input->post('email');
				$username = $this->input->post('username');
				$password = $this->input->post('password');

				if (empty($username)) {
					$this->session->set_flashdata("error","<div class='alert alert-dismissable alert-danger'>
	                            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
	                            <strong>Maaf !!</strong> Username Anda Belum Terisi
	                        </div>");
					redirect("config/login");
				}elseif(empty($password)){
					$this->session->set_flashdata("error","<div class='alert alert-dismissable alert-danger'>
	                            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
	                            <strong>Maaf !!</strong> Password Anda Belum Terisi
	                        </div>");
					redirect("config/login");
				}

				$this->form_validation->set_rules('username','username','required');
				$this->form_validation->set_rules('password','password','required');
				$this->form_validation->set_error_delimiters('','<br>');
				
				if($this->form_validation->run()== TRUE){
					$cekuser = $this->m_login->cekuser($username,$password);
					
					if($cekuser){

						$data = array(
							'username' => $username,
							'email' => $email,
							'hakakses' => $cekuser['hakakses'],
							'id'	   => $cekuser['id'],
							'status'   => $cekuser['status']
						); 
						$this->session->set_userdata($data);
						
						$hakakses = $this->session->userdata('hakakses');
						if($hakakses== 'superadmin'){

								if($this->session->userdata('status')!=1){

								$this->session->set_flashdata("error","<div class='alert alert-dismissable alert-danger'>
		                            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
		                            <strong>Maaf !!</strong> Akun Anda Telah Di Nonaktifkan
		                        </div>");
		                        redirect('config/login');
						}

							redirect('akses_superadmin/dashboard');
						}else if($this->session->userdata('status')==1){

							redirect('berita/data_berita');

						}elseif($this->session->userdata('status')!=1){

							$this->session->set_flashdata("error","<div class='alert alert-dismissable alert-danger'>
	                            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
	                            <strong>Maaf !!</strong> Akun Anda Telah Di Nonaktifkan Oleh Superadmin
	                        </div>");
	                        redirect('config/login');
						}
					}else{
							$this->session->set_flashdata("error","
								<div class='alert alert-dismissable alert-danger'>
		                            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
		                            <strong>Maaf !!</strong> Username & Password tidak sesuai.
		                        </div>");
							redirect('config/login');
					}
					}else{
							$this->session->set_flashdata("error","
								<div class='alert alert-dismissable alert-danger'>
		                            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
		                            <strong>Maaf !!</strong> anda gagal login.
		                        </div>");
								redirect('config/login');
						}
							$this->load->view('Backend/autentikasi/login');
					}

			function logout(){

				$data = array(
						'username' => '',
						'email' => '',
						'hakakses' =>'',
						'password'=>'',
					);

						$this->session->sess_destroy();
						$this->session->unset_userdata($data);
						redirect('frontend_berita/f_berita_terbaru');
			}


	public function registration()
	{
		$this->form_validation->set_rules('username', 'Username', 'required|trim');
		$this->form_validation->set_rules(
			'email',
			'Email',
			'required|trim|valid_email|is_unique[rh_login.email]',
			['is_unique' => '<div class="alert alert-danger" role="alert">Email ini telah digunakan, mohon untuk meggunakan email lain</div>']
		);
		$this->form_validation->set_rules(
			'password1',
			'Password',
			'required|trim|min_length[4]|matches[password2]',
			['matches' => 'password dont match!', 'min_length' => 'password too short']
		);
		$this->form_validation->set_rules('password2', 'Password', 'matches[password1]');

		if ($this->form_validation->run() == false) {

			$this->load->view('Backend/autentikasi/registrasi');
		} else {
			$data = [
				
				'username' => $this->input->post('username'),
				'email' => $this->input->post('email'),
				'password' => $this->input->post('password1'),
				'status' => 1,
				'hakakses' => 'admin',
				'date' => time(),
				'id_rohis' =>1
			];
			$this->db->insert('rh_login', $data);
			
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! Anda Berhasil Registrasi</div>');
			redirect('config/login');
		}

		}


		}

 ?>