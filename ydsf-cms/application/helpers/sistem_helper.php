<?php 
		function no_access(){
			$ci =& get_instance();
			if (!$ci->session->userdata('hakakses')) {
				$ci->session->set_flashdata('error','anda belum login');
				$ci->session->set_flashdata("error", "<div class='alert alert-dismissable alert-danger'>
	                            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
	                            <strong>Maaf !!</strong> Anda Belum Login.
	                        </div>");
				redirect('config/login');
			}
		}
			function levelsuper(){
			$ci =& get_instance();
			if ($ci->session->userdata('hakakses')!='superadmin') {
				$ci->session->set_flashdata("error"," Anda Tidak Memiliki Akses Untuk Halaman Tersebut . ");
				redirect('berita/tampil_berita');
			}
		}


	/* fungsi non database */
function tgl_jam_sql ($tgl) {
	$pc_satu	= explode(" ", $tgl);
	if (count($pc_satu) < 2) {	
		$tgl1		= $pc_satu[0];
		$jam1		= "";
	} else {
		$jam1 = $pc_satu[1];
		$tgl1 = $pc_satu[0];
	}
	
	$pc_dua		= explode("-", $tgl1);
	$tgl		= $pc_dua[2];
	$bln		= $pc_dua[1];
	$thn		= $pc_dua[0];
	
	if ($bln == "01") { 
	$bln_txt = "Januari"; 
	}else if ($bln == "02"){
	$bln_txt = "Februari";
	}else if ($bln == "03"){
	$bln_txt = "Maret"; 
	}else if ($bln == "04"){
	$bln_txt = "April"; 
	}else if ($bln == "05"){
	$bln_txt = "Mei"; 
	}else if ($bln == "06"){
 	$bln_txt = "Juni"; 
	}else if ($bln == "07"){
 	$bln_txt = "Juli"; 
	}else if ($bln == "08"){
	$bln_txt = "Agustus"; 
	}else if ($bln == "09"){
 	$bln_txt = "September";
    }else if ($bln == "10"){
   	$bln_txt = "Oktober"; 
	}else if ($bln == "11"){
	$bln_txt = "November"; 
	}else if ($bln == "12"){ 
	$bln_txt = "Desember"; 
	}else { 
	$bln_txt = ""; 
}
	return $tgl." ".$bln_txt." ".$thn."  ".$jam1;
}



function bulan($bln,$op)
{
    $bln = $bln-0;
    $bulan = array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
    $bulans = array("Jan","Feb","Mar","Apr","Mei","Jun","Jul","Agu","Sep","Okt","Nov","Des");

    if($op==1)
    {
        return $bulans[$bln-1];
    }else
    {
        return $bulan[$bln-1];
    }
}

function tanggal($datetime,$op)
{
    $datetime = explode("-",$datetime);

    $datetime = $datetime[2]." ".bulan($datetime[1],$op)." ".$datetime[0];

    return $datetime;

}

function justtanggal($datetime)
{
    $datetime = explode(" ",$datetime);
    $datetime[0] = explode("-",$datetime[0]);

    $datetime = $datetime[0][2];

    return $datetime;

}

function justbulan($datetime)
{
    $datetime = explode(" ",$datetime);
    $datetime[0] = explode("-",$datetime[0]);

    $datetime = $datetime[0][1];

    return $datetime;
 
}

function justtahun($datetime)
{
    $datetime = explode(" ",$datetime);
    $datetime[0] = explode("-",$datetime[0]);

    $datetime = $datetime[0][0];

    return $datetime;
 
}


		function _page($total_row, $per_page, $uri_segment, $url) {
	$CI 	=& get_instance();
	$CI->load->library('pagination');
	$config['base_url'] 	= $url;
	$config['total_rows'] 	= $total_row;
	$config['uri_segment'] 	= $uri_segment;
	$config['per_page'] 	= $per_page; 
	$config['num_tag_open'] = '<li>';
	$config['num_tag_close']= '</li>';
	$config['prev_link'] 	= '&lt;';
	$config['prev_tag_open']='<li>';
	$config['prev_tag_close']='</li>';
	$config['next_link'] 	= '&gt;';
	$config['next_tag_open']='<li>';
	$config['next_tag_close']='</li>';
	$config['cur_tag_open']='<li class="active disabled"><a href="#"  style="background: #e3e3e3">';
	$config['cur_tag_close']='</a></li>';
	$config['first_tag_open']='<li>';
	$config['first_tag_close']='</li>';
	$config['last_tag_open']='<li>';
	$config['last_tag_close']='</li>';
	
	$CI->pagination->initialize($config); 
	return $CI->pagination->create_links();
}



 ?>