        <section id="main" role="main">
            <!-- START Template Container -->
            <div class="container-fluid">
                <!-- Page Header -->
                <div class="page-header page-header-block">
                    <div class="page-header-section">
                        <h4 class="title semibold"><span class="ico-users3"></span> Aktivitas Rohis Terbaru</h4>
                    </div>
                    <div class="page-header-section">
                    </div>
                </div>
            
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span class="panel-icon mr5"><i class="ico-equalizer"></i></span> 
                            </div>
                            <div >
        <form action="<?php echo site_url('aktivitas_rohis/checkbox_jadwal'); ?>" method="post">
        <table class="table table-hover table-bordered">
            <tr>
            <th>No</th>
                <th>Nama Aktivitas</th>
                <th>Ulama/ustadz/Tokoh yang dihadirkan</th>
                <th>target</th>
                <th>tempat</th>
                <th>tanggal</th>
                <th>jam</th>
            </tr>
            <?php if ($aktivitas->num_rows() > 0 ) { ?>
            
            <?php $no=1; foreach ($aktivitas->result() as $data) : ?>
            <tr>
                <td><?php echo $this->uri->segment('3')+$no; ?></td>
                <td><?php echo $data->nama_aktivitas; ?></td>
                <td><?php echo $data->ulama_tokoh; ?></td>
                <td><?php echo $data->target; ?></td>
                <td><?php echo $data->tempat; ?></td>
                <td><?php echo $data->tanggal; ?></td>
                <td><?php echo $data->jam; ?></td>
                 
            </td>
            </tr>
            <?php $no++; endforeach;?>
            <tr>
                <td colspan="9">
                     
                </td>
            </tr>
            <?php }else{ ?>
            <tr><?php 
                        echo '<tr>';
              echo "<tr><td colspan='10'  style='text-align: center; font-weight: bold'><span class='  ico-notification2'></span> Data tidak ditemukan</td></tr>";
                        echo '<tr>';
             ?></tr>
            <?php }?>
            </table>
        </form>
                </div>
            </div>
        </div>
    </div>
</div>
