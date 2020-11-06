<?php 

require APPPATH . 'libraries/REST_Controller.php';

class Berita extends REST_Controller
{

		function __construct($config='rest'){

				parent:: __construct($config);
				$this->load->database();

				$this->methods['index_get']['limit']=10; 
				$this->load->model('m_berita','berita');
				$this->methods['index_get']['limit'] = 100; #10 requests per hour per berita/key

			}


	public function index_get()
	{

		$id = $this->get('id');
		if ($id == null) {
			$berita = $this->berita->get_all_data();
		}else{
			$berita = $this->berita->get_all_data($id);

		}
		

		if ($berita) {
			 $this->response([
                    'status' => true,
                    'data' => $berita
                ], REST_Controller::HTTP_OK);
		}else {
			 $this->response([
                    'status' => false,
                    'data' => "id not found"
                ], REST_Controller::HTTP_NOT_FOUND);
		}
	}


	//fix
	public function action_delete($id=null)
	{
		
		$id=$this->delete('id');
		if ($this->berita->deleteBerita($id)>0) {

			 $this->response([
            'status' => true,
            'id' => $id,
            'message' => "Deleted"
        ], REST_Controller::HTTP_CREATED);

		}else {
			 $this->response([
            'status' => false,
            'message' => "id not found"
        ], REST_Controller::HTTP_BAD_REQUEST);
		}
	}
	

	public function index_delete($id=null)
	{

		// $id = $this->delete('id');
			if ($this->berita->deleteBerita($id)>0) {

				 $this->response([
	            'status' => true,
	            'id' => $id,
	            'message' => "Deleted"
	        ], REST_Controller::HTTP_CREATED);

			}else {
				 $this->response([
	            'status' => false,
	            'message' => "id not found"
	        ], REST_Controller::HTTP_BAD_REQUEST);
			}
	}


	public function index_post()
	{

		$flag = $this->post('flag');

		if ($flag=="INSERT") {
		

			if (isset($_FILES['image'])) 
			{

				$config['upload_path'] = './assets/image/images/';
				$config['allowed_types'] = 'png|jpg|jpeg|gif';
				$config['max_size'] = '20480';
				$image = $_FILES['image']['name'];
				$path="./assets/image/images/";
				$this->upload->initialize($config);
				if (!$this->upload->do_upload('image')) 
				{
					$this->response([
	                    'status' => false,
	                    'message' => "Failed to create new data"
	                ], REST_Controller::HTTP_BAD_REQUEST);
				} 
				else 
				{
					$data = array(
								'id'=> $this->post('id'),
								'judul' => $this->post('judul'),
								'konten_berita'=> $this->post('konten_berita'),
								'kategori_berita'=> $this->post('kategori_berita'),
								'tanggal' => date('l, d-m-Y'),
								'image'=> $image);

								if ($this->berita->createBerita($data) > 0) {
									 $this->response([
				                    'status' => true,
				                    'message' => "new berita has been created"
				               		 ], REST_Controller::HTTP_CREATED);
								}else  {
								 $this->response([
				                    'status' => false,
				                    'message' => "Failed to create new data"
				                ], REST_Controller::HTTP_BAD_REQUEST);
						}
									
				}
					}else {
					$data = [
						'judul' => $this->post('judul'),
						'kategori_berita' => $this->post('kategori_berita'),
						'konten_berita' => $this->post('konten_berita'),
						'tanggal' => date('l, d-m-Y'),
						'image' => "kosong.png"
					];

					if ($this->berita->createBerita($data) > 0) {
								 $this->response([
			                    'status' => true,
			                    'message' => "new berita without image has been created"
			                ], REST_Controller::HTTP_CREATED);
					}else  {
							 $this->response([
			                    'status' => false,
			                    'message' => "Failed to create new data"
			                ], REST_Controller::HTTP_BAD_REQUEST);
					}
		}
	}else if ($flag=="UPDATE") {

		//Config Upload
		if (isset($_FILES['image'])) {
		
			$config['upload_path'] = './assets/image/images/';
			$config['allowed_types'] = 'png|jpg|jpeg|gif';
			$config['max_size'] = '2048099999999999999999999';
			$path="./assets/image/images/";
			$image = $_FILES['image']['name'];
			$this->upload->initialize($config);
			
			if (!$this->upload->do_upload('image')) 
			{
				$this->response(array('status' => 'fail', 502));
			} 
			else 
			{
				$id = $this->post('id');
				
				//Hapus Image Lama
				$queryimg = $this->db->query("SELECT image FROM `".$this->db->dbprefix('rh_berita')."` WHERE id='".$id."'");
				$row = $queryimg->row();
				$picturepath="./assets/image/images/".$row->image;	
				unlink($picturepath);
				
				$data = array(
					'id'=> $this->post('id'),
								'judul' => $this->post('judul'),
								'konten_berita'=> $this->post('konten_berita'),
								'kategori_berita'=> $this->post('kategori_berita'),
								'tanggal' => date('l, d-m-Y'),
								'image'=> $image);

								if ($this->berita->updateBerita($data,$id) > 0) {
									 $this->response([
				                    'status' => true,
				                    'message' => "new berita has been updated",
				                     $data,
				                ], REST_Controller::HTTP_CREATED);
						}else {
								 $this->response([
				                    'status' => false,
				                    'message' => "Failed to update data"
				                ], REST_Controller::HTTP_BAD_REQUEST);
						}
			}
		}
		}elseif ($flag=="ONLYIMAGE") {

			if (isset($_FILES['image'])) {
			$config['upload_path'] = './assets/image/images/';
			$config['allowed_types'] = 'png|jpg|jpeg|gif';
			$config['max_size'] = '2048099999999999999999999';
			$path="./assets/image/images/";
			$image = $_FILES['image']['name'];
			$this->upload->initialize($config);
		
			if (!$this->upload->do_upload('image')) {

				$this->response(array('status' => 'fail', 502));

			}else {
				
				$id = $this->post('id');

				$queryimg = $this->db->query("SELECT image FROM `".$this->db->dbprefix('rh_berita')."` WHERE id='".$id."'");
				$row = $queryimg->row();
				$picturepath="./assets/image/images/".$row->image;	
				unlink($picturepath);

					$data = array(
							'id' => $this->post('id'),
							'image' => $image
					);

						if ($this->berita->updateBerita($data,$id) > 0) {
									 $this->response([
				                    'status' => true,
				                    'message' => "new berita has been updated",
				                     $data,
				                ], REST_Controller::HTTP_CREATED);
						}else {
								 $this->response([
				                    'status' => false,
				                    'message' => "Failed to update data"
				                ], REST_Controller::HTTP_BAD_REQUEST);
						}

				}
		}
	}

}

	

	public function index_put()
	{

		// $id = $this->put('id');

		// 	$data = [
		// 		'judul' => $this->put('judul'),
		// 		'kategori_berita' => $this->put('kategori_berita'),
		// 		'konten_berita' => $this->put('konten_berita'),
		// 		'tanggal' => date('l,d-m-Y')
		// 	];

		// 		if ($this->berita->updateBerita($data,$id) > 0) {
		// 			 $this->response([
  //                   'status' => true,
  //                   'message' => "new berita has been updated"
  //               ], REST_Controller::HTTP_CREATED);
		// }else  {
		// 		 $this->response([
  //                   'status' => false,
  //                   'message' => "Failed to update data"
  //               ], REST_Controller::HTTP_BAD_REQUEST);
		// }

			// $data = array(
			// 		'id'=> $this->put('id'),
			// 		'judul' => $this->put('judul'),
			// 		'konten_berita'=> $this->put('konten_berita'),
			// 		'kategori_berita'=> $this->put('kategori_berita'),
			// 		'tanggal' => date('l, d-m-Y'),
			// 		);

			// 	if ($this->berita->updateBerita($data,$id)) {
			// 			$this->response($data);
			// 	}

			
			$config['upload_path'] = './assets/image/images/';
			$config['allowed_types'] = 'png|jpg';
			$config['max_size'] = '204801111111111111111';
			$path="./assets/image/images/";
			$image = isset($_FILES['image']['name']);
			$this->upload->initialize($config);
			
			if ($this->upload->do_upload('image')) 
			{

				$this->response(array('status' => 'fail','message'=>'data tidak ada', 502));
			} 
			else 
			{
				$id = $this->put('id');
				//Hapus Image Lama
				$queryimg = $this->db->query("SELECT image FROM ".$this->db->dbprefix('rh_berita')." WHERE id='".$id."'");
				$row = $queryimg->row();
				$picturepath="./assets/image/images/".$row->image;	
				unlink($picturepath);
				var_dump($row);
				$data = array(
								'judul' => $this->put('judul'),
								'konten_berita'=> $this->put('konten_berita'),
								'kategori_berita'=> $this->put('kategori_berita'),
								'tanggal' => date('l, d-m-Y'),
								'image'=> $image);
				// $this->db->where('id', $id);
				// $update = $this->db->update('rh_berita', $data);
				if ($this->db->updateBerita($data,$id)) {
				$this->response($data, 200);	
				}	
			
		}		
	}
}

 ?>