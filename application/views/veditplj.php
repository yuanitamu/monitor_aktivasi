     <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
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
                            Form Edit Data Lastmile & Jaringan
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                  <form action="<?php echo "".base_url()."index.php/cplj/p_edit"?>" name="" method="POST">
										<div class="form-group">
                                            <label>Tanggal</label>
                                            <input class="form-control" placeholder="Masukkan Tanggal" type="date" name="tglPlj" value="<?php echo $plj->tglPlj ?>"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Realisasi Delivery Penyelesaian SO (Hari)</label>
                                            <input class="form-control" placeholder="Rata-Rata Lama hari Penyelesaian penyambungan pelanggan" name="hariPlj" value="<?php echo $plj->hariPlj ?>"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Target Delivery Time SO (Hari)</label>
                                            <input class="form-control" placeholder="Target Lama hari Penyelesaian penyambungan pelanggan" name="ThariPlj" value="<?php echo $plj->ThariPlj ?>"/>
                                        </div>
										
										<div class="form-group">
                                            <label>Realisasi Penyelesaian SO (%)</label>
                                            <input class="form-control" placeholder="Pencapaian penyelesaian (realisasi fisik) Program investasi Terkontrak" maxlength="3" name="persenPlj" value="<?php echo $plj->persenPlj ?>" />
                                        </div>
										<div class="form-group">
                                            <label>Target Penyelesaian (%)</label>
                                            <input class="form-control" placeholder="Target Pencapaian penyelesaian (realisasi fisik) Program investasi Terkontrak" maxlength="3" name="targetPlj" value="<?php echo $plj->targetPlj ?>" />
										</div>
										<input type="hidden" id="idPlj" name="idPlj" value="<?php echo $plj->idPlj ?>"/>
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
                      