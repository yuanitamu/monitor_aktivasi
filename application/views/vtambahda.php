     <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PT. INDONESIA COMNETS PLUS Regional Jawa Timur | Data Aset</title>
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
                            Form Tambah Data "Data Aset"
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                  <form action="<?php echo "".base_url()."index.php/cda/tampil?view=tambah"?>" name="" method="POST">
										<div class="form-group">
                                            <label>Tanggal</label>
                                            <input class="form-control" placeholder="Masukkan Tanggal" type="date" name="tglDa"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Banyak Pengawasan</label>
                                            <input class="form-control" placeholder="Pengawasan Penertiban Penggunaan ROW Ilegal (&gt;2x)" name="kaliDa"/>
                                        </div>
										<div class="form-group">
                                            <label>Target Banyak Pengawasan</label>
                                            <input class="form-control" placeholder="Target Pengawasan Penertiban Penggunaan ROW Ilegal (&gt;2x)" name="TkaliDa"/>
                                        </div>
										<div class="form-group">
                                            <label>Presentase Penyelesaian</label>
                                            <input class="form-control" placeholder="Pelaksanaan Pendataan Aset Management &amp; ROW(%)" maxlength="3" name="persenDa" />
                                        </div>
										
										<div class="form-group">
                                            <label>Target Presentase Penyelesaian</label>
                                            <input class="form-control" placeholder="Target Pelaksanaan Pendataan Aset Management &amp; ROW(%)" maxlength="3" name="TpersenDa" />
                                        </div>
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
                      