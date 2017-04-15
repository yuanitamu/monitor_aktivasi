     <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ADMIN | PT. INDONESIA COMNETS PLUS REGIONAL JAWA TIMUR</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="<?php echo base_url()?>assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="<?php echo base_url()?>assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="<?php echo base_url()?>assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="<?php echo base_url()?>assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='<?php echo base_url()?>http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <?php
	$this -> load->database();
	$this -> load-> model ('mjar');
	$jaringan = $this -> mjar -> tampil ();
	$this->load->helper('form');
	
?>
 <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Pemeliharaan Jaringan</h2>   
                        <h5>Berisi data mengenai pemeliharaan jaringan</h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                             Tabel Pemeliharaan Jaringan 
                        </div>
						
<div class="row"> 
                    
            
<div class="panel-body">
<div id="container" style="width: 800px; height: 400px; margin: 0 auto"></div>
</div>

</div>

                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
								<h3 align="center" style="margin-top:20px; margin-bottom:20px;"> Tabel Pemeliharaan Jaringan </h3>
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Tanggal</th>
											<th>Target Pengawasan Penanganan Gangguan <br />dan Jasa Telekomunikasi (menit) </th>
                                            <th>Pengawasan Penanganan Gangguan <br />dan Jasa Telekomunikasi (menit) </th>
                                            <th>Target Peningkatan Kualitas Proses Penanganan <br />Gangguan PS, FOT, FOC<br /></th>											
                                            <th>Peningkatan Kualitas Proses Penanganan <br />Gangguan PS, FOT, FOC<br /></th>
                                            											
                                            <th>#</th>
											<th>#</th>
                                        </tr>
                                    </thead>
                                    <tbody>
										<?php 
											$num=1;
											foreach ($jaringan as $dt) {  ?>
											<tr>
												<?php $dt->idJar;?>
												<td><?php echo $num; ?></td>
												<td><?php echo $dt->tglJar; ?></td>
												<td><?php echo $dt->TmenitJar; ?></td>
												<td><?php echo $dt->menitJar; ?></td>
												<td><?php echo $dt->TpersenJar; ?></td>												 
												<td><?php echo $dt->persenJar; ?></td>
													
												<td><?php
												echo form_open('cjar/edit');
												echo form_hidden('tglJar',$dt->tglJar,'tglJar="idJar"');?>
												<button class="btn btn-primary"><i class="fa fa-edit "></i> Edit</button>
												<?php echo form_close();
												?></td>
												<td><?php
												echo form_open('cjar/delete');
												echo form_hidden('tglJar',$dt->tglJar,'tglJar="tglJar"');?>
												<button class="btn btn-warning"><i class="fa fa-eraser"></i> Delete</button>
												<?php echo form_close();
												?>
											</td>
											</tr>
											<?php $num++;
										 } ?>
									</tbody>
									</table>
									<a href="<?php echo base_url(); ?>index.php/cjar/tambah" class="btn btn-danger"><i class="fa fa-pencil"></i> Tambah</a>
									    </div>
                            
                        </div>
                    </div>
					             <!--End Advanced Tables -->
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url()?>assets/js/highcharts.js"></script>
<script src="<?php echo base_url()?>assets/js/exporting.js"></script>

<?php
 
mysql_connect("localhost","root","");
mysql_select_db("dash");
 
?>
 
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Grafik Pemeliharaan Jaringan</title>
 
        <script type="text/javascript">
$(function () {
    var chart;
    $(document).ready(function() {
	Highcharts.dateFormats = {
        W: function (timestamp) {
            var date = new Date(timestamp),
                day = date.getUTCDay() === 0 ? 7 : date.getUTCDay(),
                dayNumber;
            date.setDate(date.getUTCDate() + 4 - day);
            dayNumber = Math.floor((date.getTime() - new Date(date.getUTCFullYear(), 0, 1, -6)) / 86400000);
            return 1 + Math.floor(dayNumber / 7);

        }
    };
        chart = new Highcharts.Chart({
            chart: {
                renderTo: 'container',
                type: 'line',
                marginRight: 130,
                marginBottom: 25
            },
            title: {
                text: '<b>Grafik Pemeliharaan Jaringan</b>',
                x: -20 //center
				
            },
            xAxis: {
               
            	 type: 'datetime',
            tickInterval: 7 * 24 * 36e5, // one week
            labels: {
                format: '{value:Week %W/%Y}',
                align: 'right',
                rotation : 0
            }
				},
            yAxis: {
                title: {
                    text: 'Jumlah'
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#808080'
                }]
            },
            tooltip: {
            xDateFormat: 'Week %W/%Y',
            shared: true
        },

        plotOptions: {
            series: {
                pointStart: Date.UTC(2015, 4, 4),
                pointInterval: 7 * 24 * 36e5
            }
       
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'top',
                x: 19,
                y: 100,
                borderWidth: 0
            },
            series:             
            [
            <?php //query tiap negara lbih dulu, baru tiap negara diambil datanya, dijadikan data berjajar berdasar koma
            $sql   = "SELECT * FROM ketpj";
            $query = mysql_query( $sql );
            while( $ret = mysql_fetch_array( $query ) ){
               $idKet= $ret['idKet'];
               $nama = $ret['ket'];
                  $sql_   = "SELECT * FROM datapj WHERE idKet='$idKet'";
                  $query_ = mysql_query( $sql_ );
                  
                  $data = "";
                  while( $ret_ = mysql_fetch_array( $query_ ) ){
                     $nilai = $ret_['nilai'];
                     $data = $data . "," . $nilai;
                  }
                  $data = substr( $data , 1 , strlen( $data ) );
                  ?>
                  {
                      name: '<?php echo $nama; ?>',
                      data: [<?php echo $data; ?>],
					  pointInterval: 7 * 24 * 36e5,
            			pointStart: Date.UTC(2015, 4, 4)
                  },
                  <?php
            
            }
            ?>
            ]
        });
    });
    
});
        </script>
</div>


                </div>
            </div>								 
                </div>
            </div>
     <!-- CUSTOM STYLES-->
    <link href="<?php echo base_url()?>assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='<?php echo base_url()?>http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
       <script src="<?php echo base_url()?>assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?php echo base_url()?>assets/js/jquery.metisMenu.js"></script>
                      