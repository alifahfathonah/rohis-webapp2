<?php 
		class M_keuangan extends CI_Model{


			function tambah_pemasukan($objek){
				if ($this->db->insert('rh_pemasukan',$objek)) {
					return TRUE;
				}else{
					return FALSE;
				}
			}

				function tambah_pengeluaran($data){
				if ($this->db->insert('rh_pengeluaran',$data)) {
					return TRUE;
				}else{
					return FALSE;
				}
			}

			function pemasukan_edit($id,$data){
				$this->db->where('id',$id);
				$this->db->set($data);
				if ($this->db->update('rh_pemasukan',$data)) {
					 return TRUE;
				}
			}

			function pengeluaran_edit($id,$data){
				$this->db->where('id',$id);
				$this->db->set($data);
				if ($this->db->update('rh_pengeluaran',$data)) {
					 return TRUE;
				}
			}

			function laporan_pemasukan($bulan,$tahun){
			
			if ($this->session->userdata('id_rohis')!='0') {
			$this->db->where("id_rohis",$this->session->userdata('id_rohis'));
			}
			$this->db->order_by('rh_pemasukan.id','DESC');
			$this->db->select('tanggal,deskripsi,saldo');
			$this->db->where("month(tanggal)='$bulan' and year(tanggal)='$tahun'");

			$query = $this->db->get('rh_pemasukan');
			return $query;
			}

			function jumlah_pemasukan($bulan,$tahun){
				if ($this->session->userdata('id_rohis')!='0') {
			$this->db->where("id_rohis",$this->session->userdata('id_rohis'));
			}
			
				$this->db->select("sum(saldo) as saldo");
				$this->db->where("month(tanggal)='$bulan' and year(tanggal)='$tahun'");
				$query = $this->db->get('rh_pemasukan');
				return $query;
			}

			function jumlah_pengeluaran($bulan,$tahun){
				if ($this->session->userdata('id_rohis')!='0') {
			$this->db->where("id_rohis",$this->session->userdata('id_rohis'));
			}
			
				$this->db->select("sum(saldo) as saldo");
				$this->db->where("month(tanggal)='$bulan' and year(tanggal)='$tahun'");
				$query = $this->db->get('rh_pengeluaran');
				return $query;
			}

			function laporan_pengeluaran($bulan,$tahun){

			if ($this->session->userdata('id_rohis')!='0') {
			$this->db->where("id_rohis",$this->session->userdata('id_rohis'));
			}
			$this->db->order_by('rh_pengeluaran.id','DESC');
			$this->db->select('tanggal,deskripsi,saldo');
			$this->db->where("month(tanggal)='$bulan' and year(tanggal)='$tahun'");
			$query = $this->db->get('rh_pengeluaran');
			return $query;

			}

			function laporan_pemasukan_rohis($bulan,$tahun){
			

			$this->db->order_by('rh_pemasukan.id','DESC');
			$this->db->select('tanggal,deskripsi,saldo');
			$this->db->where("month(tanggal)='$bulan' and year(tanggal)='$tahun'");

			$query = $this->db->get('rh_pemasukan');
			return $query;
			}

			function laporan_pengeluaran_rohis($bulan,$tahun){

			$this->db->order_by('rh_pengeluaran.id','DESC');
			$this->db->select('tanggal,deskripsi,saldo');
			$this->db->where("month(tanggal)='$bulan' and year(tanggal)='$tahun'");
			$query = $this->db->get('rh_pengeluaran');
			return $query;

			}


			function jumlah_pemasukan_rohis($bulan,$tahun){
			
				$this->db->select("sum(saldo) as saldo");
				$this->db->where("month(tanggal)='$bulan' and year(tanggal)='$tahun'");
				$query = $this->db->get('rh_pemasukan');
				return $query;
			}

			function jumlah_pengeluaran_rohis($bulan,$tahun){
		
			
				$this->db->select("sum(saldo) as saldo");
				$this->db->where("month(tanggal)='$bulan' and year(tanggal)='$tahun'");
				$query = $this->db->get('rh_pengeluaran');
				return $query;
			}

			function cari_pemasukan($cari,$id_rohis){

			if ($this->session->userdata('id_rohis')!='0') {
			$this->db->where("id_rohis",$this->session->userdata('id_rohis'));
				
				$this->db->like('tanggal',$cari);
				$this->db->or_like('deskripsi',$cari);
				$this->db->or_like('saldo',$cari);
				return $this->db->get('rh_pemasukan');

				
				}
			}

			function cari_pengeluaran($cari){

			if ($this->session->userdata('id_rohis')!='0') {
			$this->db->where("id_rohis",$this->session->userdata('id_rohis'));
			}
				if ($this->db->where('id_rohis',$this->session->userdata('id_rohis'))) {
					$this->db->like('tanggal',$cari);
					$this->db->or_like('deskripsi',$cari);
				$this->db->or_like('saldo',$cari);
				};
				
				return $this->db->get('rh_pengeluaran');
			
				
			}
		}
 ?>