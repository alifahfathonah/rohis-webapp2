<?php 

		class Profil extends CI_Controller{

		function __construct(){

				parent:: __construct();
				$this->load->model('m_profil','profil');
				no_access();
			}


		function add_profil(){

				$config['upload_path'] = './assets/image/image-sekolah/';
		        $config['allowed_types'] = 'gif|jpg|png|jpeg';
		        $config['max_size'] = '999999999999999999999999999999999999999';
		        $config['max_width']  = '9999999999999999999999999999999999999';
		        $config['max_height']  = '999999999999999999999999999999999999';
		 		$this->upload->initialize($config);
		        if(!$this->upload->do_upload()){
		        $image =null;
		        }else {
		        	$image = $this->upload->data();
				}
				$id = $this->uri->segment(3);
				$query = $this->db->get_where('rh_profil',array('id'=>$id))->row_array();
				$data['query'] = $query;
				$id = $this->input->post('id');

			$data = array(
				'id_rohis' => $this->session->userdata('id_rohis'),
				'nama_sekolah'	 => $this->input->post('nama_sekolah'),
				'alamat_surat'	 => $this->input->post('alamat_surat'),
				'long'    	     => $this->input->post('long'),
				'lat'    	     => $this->input->post('lat'),
				'rt'      		 => $this->input->post('rt'),
				'rw'      		 => $this->input->post('rw'),
				'desa'       	 => $this->input->post('desa'),
				'kecamatan' 	 => $this->input->post('kecamatan'),
				'kabupaten' 	 => $this->input->post('kabupaten'),
				'id_rohis'		 => $this->session->userdata('id_rohis'),
				'bg_data'		 => $this->session->userdata('bg_data'),
				'image'			 => $image['file_name'],
				'username'		 => $this->session->userdata('username')
			);

			$this->db->set($data);
			$this->profil->profil_add($data);
			$this->session->set_flashdata('message',"Data Berhasil Diubah");
			redirect('profil/rh_profil');

		
			}

		function edit_profil(){

				$rules = array(
				array('field' => 'nama_sekolah','label' => 'Nama Sekolah','rules' => 'required'),
				array('field' => 'alamat_surat','label' => 'Alamat Surat','rules' => 'required'),
				array('field' => 'long',        'label'	=> 'Long','rules' 		  => 'required'),
				array('field' => 'lat',			'label' => 'Lat','rules'		  => 'required'),
				array('field' => 'rt',			'label' => 'RT','rules' 		  => 'required'),
				array('field' => 'rw',			'label' => 'RW','rules'			  => 'required'),
				array('field' => 'desa',		'label' => 'Desa','rules'		  => 'required'),
				array('field' => 'kecamatan',	'label' => 'Kecamatan','rules'	  => 'required'),
				array('field' => 'kabupaten',	'label' => 'Kabupaten','rules' 	  => 'required')

					);			
				$this->form_validation->set_rules($rules);

				if ($this->form_validation->run() ) {

						$id = $this->input->post('id');
								$data = array(
							'nama_sekolah'	=> $this->input->post('nama_sekolah'),
							'alamat_surat'	=> $this->input->post('alamat_surat'),
							'long'			=> $this->input->post('long'),
							'lat'			=> $this->input->post('lat'),
							'rt'			=> $this->input->post('rt'),
							'rw'			=> $this->input->post('rw'),
							'desa'			=> $this->input->post('desa'),
							'kecamatan'		=> $this->input->post('kecamatan'),
							'kabupaten'		=> $this->input->post('kabupaten')					
						);

				if (isset($_FILES['image'])) {
						$this->load->library('upload');
						$destinationPath = "./assets/image/images-sekolah";

						$config['upload_path'] = $destinationPath;
						$config['allowed_types'] = 'jpg|png|jpeg|gif';
						$this->upload->initialize($config);
					if ($this->upload->do_upload('image')) {

							$file_data = $this->upload->data();
							$data['image'] = $file_data['file_name'];
					}
				}
						$this->db->where('username',$this->session->userdata('username'));
						$this->db->update('rh_profil',$data);
						$this->session->set_flashdata('message','Data Berhasil Disimpan');
						redirect('profil/my_profile');
				}else{
						$this->session->set_flashdata('error','Data Gagal Diubah');
						redirect('profil/my_profile');
					}
				}

		function checkbox(){
				$validation = array(
							array("field" => 'id[]', 'rules' => 'required'),
							array('field' => 'delete', 'rules' =>'required')
					);
				$this->form_validation->set_rules($validation);
				$this->form_validation->set_rules('id');

				if ($this->form_validation->run() == TRUE) {
					$id = $this->input->post('id');

					$this->db->where_in('id',$id);
					$this->db->delete('rh_profil');
					$this->session->set_flashdata('message','Data Telah Dihapus');
					redirect('profil/rh_profil');
				}else{
					$this->session->set_flashdata('error','Data Belum Diseleksi');
					redirect('profil/rh_profil');
				}
			}



		 function ubah_password() {
		
		$id						= $this->session->userdata('id');
		$password				= md5($this->input->post('password'));
		$password2				= md5($this->input->post('password2'));
		// $cek_password 	= $this->db->query("select * from rh_login where id = $id")->row_array();
		$this->db->select('*');
		$this->db->where("id ='".$this->session->userdata('id')."'");
		$cek_password = $this->db->get('rh_login')->row_array();
		if ($cek_password['password'] != $password) {
			$this->session->set_flashdata('error','Password lama tidak sama');
			redirect('profil/profile');
		}else{
			$this->db->query("update rh_login set password = '$password2' where id = ".$this->session->userdata('id')." ");
			$this->session->set_flashdata('message','Password Berhasil Diubah');
			redirect('profil/profile');
		}
	}

	public function profile(){

		if ($this->session->userdata('id_rohis')!='' && $this->session->userdata('username')!='') {
			
		  $info =  $this->db->get_where('rh_pribadi',array('username'=>$this->session->userdata('username')));
		 // $query = $this->db->where('username',$this->session->userdata('username'));
		 // $query = $this->db->get('rh_pribadi');
				    $data = array(
				      'detail'    => $info->row_array(),
				    );
		}
		 			$this->load->view('Backend/include/header');
			     	$this->load->view('Backend/rh-profil/profile',$data);
			    	$this->load->view('Backend/include/footer');		
		
	}

	
		public function my_profile(){

		if ($this->session->userdata('id_rohis')!='' && $this->session->userdata('username')!='') {
			
		  $info =  $this->db->get_where('rh_profil',array('username'=>$this->session->userdata('username')));
		 // $query = $this->db->where('username',$this->session->userdata('username'));
		 // $query = $this->db->get('rh_pribadi');
				    $data = array(
				      'detail'    => $info->row_array(),
				    );
		}
		 			$this->load->view('Backend/include/header');
			     	$this->load->view('Backend/rh-profil/bio',$data);
			    	$this->load->view('Backend/include/footer');		
	}

			function edit_bio(){

				$rules = array(
				array('field' 	=> 'nama_depan',		'label'	=> 'Nama Depan','rules'		 => 'required'),
				array('field' 	=> 'nama_belakang',		'label' => 'Nama Belakang','rules'   => 'required'),
				array('field' 	=> 'nama_perusahaan',   'label'	=> 'Nama Perusahaan','rules' => 'required'),
				array('field' 	=> 'negara',			'label' => 'Negara','rules'		  	 => 'required'),
				array('field' 	=> 'alamat1',			'label' => 'Alamat1','rules' 		 => 'required'),
				array('field' 	=> 'alamat2',			'label' => 'Alamat2','rules'		 => 'required'),
				array('field' 	=> 'kota',				'label' => 'Kota','rules'		  	 => 'required'),
				array('field' 	=> 'provinsi',			'label' => 'Provinsi','rules'	  	 => 'required'),
				array('field' 	=> 'kode_pos',			'label' => 'Kode Pos','rules' 	  	 => 'required')
					);			

				$this->form_validation->set_rules($rules);

				if ($this->form_validation->run() ) {

						$id = $this->input->post('id');
						$data = array(
							'nama_depan'		=> $this->input->post('nama_depan'),
							'nama_belakang'		=> $this->input->post('nama_belakang'),
							'nama_perusahaan'	=> $this->input->post('nama_perusahaan'),
							'negara'			=> $this->input->post('negara'),
							'alamat1'			=> $this->input->post('alamat1'),
							'alamat2'			=> $this->input->post('alamat2'),
							'kota'				=> $this->input->post('kota'),
							'provinsi'			=> $this->input->post('provinsi'),
							'kode_pos'			=> $this->input->post('kode_pos')					
						);

				if (isset($_FILES['image'])) {
						$this->load->library('upload');
						$destinationPath = "./assets/image/images-sekolah";

						$config['upload_path'] = $destinationPath;
						$config['allowed_types'] = 'jpg|png|jpeg|gif';
						$this->upload->initialize($config);
					if ($this->upload->do_upload('image')) {

							$file_data = $this->upload->data();
							$data['image'] = $file_data['file_name'];
					}
				}
						$this->db->where('username',$this->session->userdata('username'));
						$this->db->update('rh_pribadi',$data);
						$this->session->set_flashdata('message','Data Berhasil Disimpan');
						redirect('profil/profile');
				}else{
						$this->session->set_flashdata('error','Data Gagal Diubah');
						redirect('profil/profile');
		}
	}


}
 ?>

