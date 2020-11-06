<?php 

		class M_login extends CI_Model{


			function cekuser($username,$password){

				// $this->db->where('username',$username);
				// $this->db->where('password',$password);

				$cek = $this->db->get_where('rh_login',array('username'=>$username,'password'=>$password),TRUE);
				if ($cek->num_rows() > 0) {
					return $cek->row_array();
				}
			}
		}
 ?>