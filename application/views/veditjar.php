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
   <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Form Tambah Data</h2>                          
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            Form Tambah Data Pemeliharaan Jaringan
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                  <form action="<?php echo "".base_url()."index.php/cjar/p_edit"?>" name="" method="POST">
										<div class="form-group">
                                            <label>Tanggal</label>
                                            <input class="form-control" placeholder="Masukkan Tanggal" type="date" name="tglJar" value="<?php echo $jaringan->tglJar ?>"/>
                                        </div>
										<div class="form-group">
                                            <label>Target Lama Waktu (menit)</label>
                                            <input class="form-control" placeholder="Target Pengawasan Penanganan Gangguan dan Jasa Telekomunikasi (menit)" name="TmenitJar" value="<?php echo $jaringan->TmenitJar ?>"/>
                                        </div>	
                                        <div class="form-group">
                                            <label>Lama Waktu (menit)</label>
                                            <input class="form-control" placeholder="Pengawasan Penanganan Gangguan dan Jasa Telekomunikasi (menit)" name="menitJar" value="<?php echo $jaringan->menitJar ?>"/>
                                        </div>
                                        
										<div class="form-group">
                                            <label>Target Presentase Peningkatan Kualitas</label>
                                            <input class="form-control" placeholder="Target Peningkatan Kualitas Proses Penanganan Gangguan PS, FOT, FOC" name="TpersenJar" value="<?php echo $jaringan->TpersenJar ?>"/>
                                        </div>										
										<div class="form-group">
                                            <label>Presentase Peningkatan Kualitas</label>
                                            <input class="form-control" placeholder="Peningkatan Kualitas Proses Penanganan Gangguan PS, FOT, FOC" name="persenJar" value="<?php echo $jaringan->persenJar ?>"/>
                                        </div>
																			
										<input type="hidden" id="idJar" name="idJar" value="<?php echo $jaringan->idJar ?>"/>
										<button class="btn btn-primary"><i class="fa fa-check"></i> Submit</button>
									</form>
								</div>
							</div>
							
						</div>
					</div>
					<script src="<?php echo base_url()?>assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?php echo base_url()?>assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="<?php echo base_url()?>assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="<?php echo base_url()?>assets/js/custom.js"></script>
                      