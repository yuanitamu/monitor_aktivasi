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
   
   
<class="active-menu">
 <div id="page-wrapper">
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
                             Tabel Pemeliharaan Jaringan Per Bulan 
                        </div>

                        <div class="panel-body">
		                	<div class="row">
								<div class="col-md-12">
<?php $monthSelected = $group; ?>
								<form role="form" action="<?php echo site_url("cjar/tampil")?>" method="get" >								
								<h4> Bulan : </h4>
								<input type="month" id ="bln" class="form-control" value="<?php echo $monthSelected ?>" name="month" >
								<input type="hidden" class="form-control" name="view" value="bln">
								<button type="submit" id ="submit_month" class="btn btn-default btn-sm">Search</button>
								</form>
		                        </div>
        		            </div>

<?php 
	if($view == "bln"){
		set_keuangan_screen($hasil,$group,$view);
		}
?>

<?php
function set_keuangan_screen($jaringan,$group,$view){
		?>						
                    <div class="table-responsive" style="padding-top:15px;">
						<table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr class="active">
                                            <th>No.</th>
                                            <th>Tanggal</th>
                                            <th>Pengawasan Penanganan Gangguan <br />dan Jasa Telekomunikasi (menit) </th>
                                            <th>Target Pengawasan Penanganan Gangguan <br />dan Jasa Telekomunikasi (menit) </th>											
                                            <th>Peningkatan Kualitas Proses Penanganan <br />Gangguan PS, FOT, FOC<br /></th>
                                            <th>Target Peningkatan Kualitas Proses Penanganan <br />Gangguan PS, FOT, FOC<br /></th>											
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
												<td><?php echo $dt->menitJar; ?></td>
												<td><?php echo $dt->TmenitJar; ?></td>												 
												<td><?php echo $dt->persenJar; ?></td>
												<td><?php echo $dt->TpersenJar; ?></td>
							<td><?php
							echo form_open('cjar/edit');
							echo form_hidden('idJar',$dt->idJar,'idJar="idJar"');?>
							<button class="btn btn-primary"><i class="fa fa-edit "></i> Edit</button>
							<?php echo form_close();
							?></td>
							<td><?php
							echo form_open('cjar/delete');
							echo form_hidden('idJar',$dt->idJar,'idJar="idJar"');?>
							<button class="btn btn-warning"><i class="fa fa-eraser"></i> Delete</button>
							<?php echo form_close();
							?>
							</td>
							</tr>
							<?php $num++;
						}?>
						</tbody>
						</table>
						<a href="<?php echo base_url(); ?>index.php/cjar/tambah" class="btn btn-danger"><i class="fa fa-pencil"></i> Tambah</a>
					</div>                          
                </div>
<?php }?>				
			<!--End Advanced Tables -->
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