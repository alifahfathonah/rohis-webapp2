
        <!-- START Template Main -->
        <section id="main" role="main">
            <!-- START Template Container -->
            <div class="container-fluid">
                <!-- Page Header -->
                <div class="page-header page-header-block">
                    <div class="page-header-section">
                        <h4 class="title semibold"><span class="ico-dashboard"></span> Dashboards</h4>
                    </div>
                    <div class="page-header-section">
                    </div>
                </div>
                <!-- Page Header -->


                <div class="row">
                    <!-- START Left Side -->
                    <div class="col-md-9">
                        <!-- Top Stats -->
                        
             <div class="row">
                            <div class="col-sm-12">
                                <!-- START panel -->
                                <div class="panel mt10">
                                    <!-- panel-toolbar -->
                                    <div class="panel-heading pt10">
                                        <div class="panel-toolbar">
                                            <h5 class="semibold nm ellipsis">Website States</h5>
                                        </div>
                                    </div>
                                    <!--/ panel-toolbar -->
                                    <div class="panel-body pt0">
                                        <div class="chart mt10" id="chart-audience" style="height: 250px"></div>
                                    </div>
                                    <!-- panel-footer -->
                                    <div class="panel-footer hidden-xs">
                                        <ul class="nav nav-section nav-justified">
                                            <li>
                                                <div class="section">
                                                    <h4 class="bold text-default mt0 mb5" data-toggle="counterup"><?php echo $this->db->count_all_results('rh_siswa_muslim'); ?></h4>
                                                    <p class="nm text-muted">
                                                        <span class="semibold">Total Siswa Muslim</span>
                                                    </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="section">
                                                    <h4 class="bold text-default mt0 mb5"><span data-toggle="counterup"><?php echo $this->db->count_all_results('rh_profil'); ?></span></h4>
                                                    <p class="nm text-muted">
                                                        <span class="semibold">Jumlah sekolah yang terdaftar</span>
                                                        
                                                    </p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!--/ panel-footer -->
                                </div>
                                <!--/ END panel -->
                            </div>
                        </div>
                                           </div>
                    <!--/ END Left Side -->

                    <!-- START Right Side -->
                    <div class="col-md-3">
                        <div class="panel panel-minimal">
                            <div class="panel-heading"><h5 class="panel-title"><i class="ico-health mr5"></i>Aktivitas Rohis Terbaru</h5></div>
                        
                            <!-- Media list feed -->
                            <ul class="media-list media-list-feed nm">
                            
                            <?php foreach ($jadwal->result() as $data) {?>
                                
                            
                                <li class="media">
                                    <div class="media-object pull-left">
                                       <i class="ico-user bgcolor-success"></i>
                                    </div>
                                    <div class="media-body">
                                        <p class="media-heading"><?php echo $data->nama_aktivitas; ?></p>
                                        <p class="media-text"><?php echo $data->tempat ?></p>
                                        <p class="media-meta"><?php echo tgl_jam_sql($data->tanggal)?>- <?php echo $data->jam; ?></p>
                                    </div>
                                </li>
                                <?php } ?> 
                            </ul>
                            <!--/ Media list feed -->
                        </div>
                    </div>
                    <!--/ END Right Side -->
                </div>
            </div>
            <!--/ END Template Container -->


     <script>
                /* ========================================================================
 * dashboard-v1.js
 * Page/renders: index.html
 * Plugins used: flot, sparkline, selectize
 * ======================================================================== */

'use strict';

(function (factory) {
    if (typeof define === 'function' && define.amd) {
        define([
            'selectize',
            'jquery.flot',
            'jquery.flot.resize',
            'jquery.flot.categories',
            'jquery.flot.time',
            'jquery.flot.tooltip',
            'jquery.flot.spline'
        ], factory);
    } else {
        factory();
    }
}(function () {

    $(function () {
        // Selectize
        // ================================
        $('#selectize-customselect').selectize();
         
        // Sparkline
        // ================================
        $('.sparklines').sparkline('html', {
            enableTagOptions: true
        });
        
        // Area Chart - Spline
        // ================================
        $.plot('#chart-audience', [
        <?php for($x=0;$x<count($datam);$x++){
        if($x!=0){
            $koma=',';
        }else{
            $koma='';
        }
        echo $koma."{
                label: '".$rohis[$datam[$x]][1]."',
                color: '".$rohis[$datam[$x]][0]."',
                data: [";
            for($z=0;$z<count($blns);$z++)
            {
                if($z!=0){$komas=',';}else{$komas='';}
                if(empty($rohis[$datam[$x]]['data'][$z+1])){
                    $val=0;
                }else{
                    $val=$rohis[$datam[$x]]['data'][$z+1];
                }
                echo $komas."['".$blns[$z]."', ".$val."]";
            }
                echo "]";
            echo "}";
        } ?>
            ], {
            series: {
                lines: {
                    show: false
                },
                splines: {
                    show: true,
                    tension: 0.4,
                    lineWidth: 2,
                    fill: 0.8
                },
                points: {
                    show: true,
                    radius: 4
                }
            },
            grid: {
                borderColor: 'rgba(0, 0, 0, 0.05)',
                borderWidth: 1,
                hoverable: true,
                backgroundColor: 'transparent'
            },
            tooltip: true,
            tooltipOpts: {
                content: '%x : %y',
                defaultTheme: false
            },
            xaxis: {
                tickColor: 'rgba(0, 0, 0, 0.05)',
                mode: 'categories'
            },
            yaxis: {
                tickColor: 'rgba(0, 0, 0, 0.05)'
            },
            shadowSize: 0
        });
    });

}));
                </script>
