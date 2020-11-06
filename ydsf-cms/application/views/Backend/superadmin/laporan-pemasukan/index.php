
        <!-- START Template Main -->
        <section id="main" role="main">
            <!-- START Template Container -->
            <div class="container-fluid">
                <!-- Page Header -->
                <div class="page-header page-header-block">
                    <div class="page-header-section">
                        <h4 class="title semibold"><span class="ico-money"></span> Laporan Pemasukan </h4>
                    </div>
                </div>
          <center><div class="control-group">
            <label class="control-label">Bulan</label>
            <div class="controls">
              <select id="bulan" style="width:120px;" class="form-control">
                <?php
                $bln=date('m');
                    for ($i=01; $i <=12 ; $i++) {
                        if($i==1){
                            $bulan="Januari";}else if($i==2){$bulan="Februari";}
                        else if($i==3){$bulan="Maret";}else if($i==4){$bulan="April";}
                        else if($i==5){$bulan="Mei";}else if($i==6){$bulan="Juni";}
                        else if($i==7){$bulan="Juli";}else if($i==8){$bulan="Agustus";}
                        else if($i==9){$bulan="September";}else if($i==10){$bulan="Oktober";}
                        else if($i==11){$bulan="November";} else{$bulan="Desember";}
                        if($i==$bln){
                            echo "<option value='$i' selected='selected'>$bulan</option>";
                        }
                        else{
                        echo "<option value='$i'>$bulan</option>";
                        }
                    }
                ?>
              </select>
              <label class="control-label">Tahun</label>
              <select id="tahun" style="width:100px;" class="form-control">
                <?php
                    $tahun=date('Y');
                    for ($i=$tahun; $i >=2016; $i--) { 
                        echo "<option value='$i'>$i</option>";
                    }
                ?>
              </select>
            </div>
          </div>
          <br>
          <div class="control-group">
            <div class="controls">
             <button type="button" content="Tampilkan" value="Tampilkan" class="btn btn-success" id="show">Tampilkan</button><br><br>

            </div>
          </div>
     </center>
               <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span class="panel-icon mr5"><i class="ico-money"></i></span> 
                            </div>
                             <div class="panel-body">
                            <div id="tampil">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ END row -->
            </div>




<script type="text/javascript">
$(document).ready(function(){
    $("#show").click(function(){
        var bulan=$("#bulan").val();
        var tahun=$("#tahun").val();
        $.ajax({
            type:"POST",
            url:"<?php echo base_url();?>keuangan/tampil_laporan_pemasukan",
            data:"bulan="+bulan+"&tahun="+tahun,
            success : function(data) {
                $("#tampil").html(data);
            }
        });
    });
});
</script>