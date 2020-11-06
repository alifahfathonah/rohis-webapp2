


<table class="table table-hover table table-bordered ">

		<tr>
			<th width="5%">No</th>
			<th width="15%">Tanggal</th>
			<th width="40%">Deskripsi</th>
			<th width="15%">Saldo</th>
		</tr>
	<tr>
		<?php
		$no=1; 
			foreach ($laporan->result_array() as $data) { ?>
			<tr>
				<td><?php echo $this->uri->segment('3')+$no;?></td>
				<td><?php echo tgl_jam_sql($data['tanggal']);?></td>
				<td><?php echo $data['deskripsi']?></td>
				<td><?php echo $data['saldo']?></td>
				
			</tr>
		<?php
		$no++;
			}
		?>
	</tr>
</table>
<?php
	if($no==1){
		echo "<tr>";
		 echo '<tr>           <div class="col-lg-6 col-lg-offset-3">
                                    <div class="panel panel-minimal" style="margin-top:10%;">
                                        <!-- Upper Text -->
                                        <div class="panel-body text-center">
                                            <i class="ico-file-remove2 longshadow fsize112 text-default"></i>
                                        </div>
                                        <div class="panel-body text-center">
                                            <h1 class="semibold longshadow text-center text-default fsize22 mb10 mt0">WHOOPS!!</h1>
                                            <h4 class="semibold text-primary text-center nm">SORRY,NO DATA THIS PAGE...</h4>
                                        </div>
                                        <!--/ Upper Text -->
                                    </div>
                                </div></tr>';
		echo "<tr>";
	}
	else{
		foreach ($jumlah_pengeluaran->result_array() as $hasil) {
		?>
			<table class="table table-striped" style="width:400px; float:right;">
				<tr>
					<td> Total Saldo pengeluaran</td><td>Rp <?php echo number_format($hasil['saldo'],2);?></td>
				</tr>
			</table>
		<?php
		}
		?>	

		<?php
	}
?>

   