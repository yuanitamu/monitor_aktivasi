<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
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
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0; background:#d9534f">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
				<a style="background:#d9534f; color:white; font-size:32px;" class="navbar-brand" href="<?php echo base_url(); ?>index.php/clogin/home"><b>ICON+</b></a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 10px;
float: left;
font-size: 21px;"><b> PT. INDONESIA COMNETS PLUS REGIONAL JAWA TIMUR &nbsp;</b> </div>
 <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> 
<a href="<?php echo base_url(); ?>index.php/cregister/register" class="btn btn-danger square-btn-adjust">Registrasi</a>
<a href="<?php echo base_url(); ?>index.php/clogin/log_out" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->

                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="<?php echo base_url(); ?>assets/img/find_user.png" class="user-image img-responsive"/>
					<div style="font-size:24px; color:#FFFFFF"> Admin </div>
				</li>
				
					
                    <li>
						<a  href="<?php echo base_url(); ?>index.php/clogin/home"><i class="fa fa-dashboard fa-3x"></i> Home</a>
						
                    </li>
                    <li>
					<?php
					$tanggal = date('Y-m-d');
					$bulan = date('Y-m');
					?>					
                        <a href="#"><i class="fa fa-bolt fa-3x"></i> Lastmile & Jaringan<span class="fa arrow collapse"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo base_url('index.php/cplj/tampil?view=all')?>">Semua Data</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('index.php/cplj/tampil?view=bln&month='.$bulan)?>">Data Bulanan</a>
                            </li>
                        </ul>
                    </li>  
					
                    <li>
                        <a href="#"><i class="fa fa-qrcode fa-3x"></i> Pemeliharaan Jaringan<span class="fa arrow collapse"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo base_url('index.php/cjar/tampil?view=all')?>">Semua Data</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('index.php/cjar/tampil?view=bln&month='.$bulan)?>">Data Bulanan</a>
                            </li>
                        </ul>
						
                    </li>
					<li>
						<a href="#"><i class="fa fa-bar-chart-o fa-3x"></i> Presales Aktivasi<span class="fa arrow collapse"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo base_url('index.php/cpa/tampil?view=all')?>">Semua Data</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('index.php/cpa/tampil?view=bln&month='.$bulan)?>">Data Bulanan</a>
                            </li>
                        </ul>						
                    </li>	
                    <li>
						<a href="#"><i class="fa fa-table fa-3x"></i> Data Aset<span class="fa arrow collapse"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo base_url('index.php/cda/tampil?view=all')?>">Semua Data</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('index.php/cda/tampil?view=bln&month='.$bulan)?>">Data Bulanan</a>
                            </li>
                        </ul>	
                    </li>
                    <li>
						<a href="#"><i class="fa fa-edit fa-3x"></i> ADUM<span class="fa arrow collapse"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo base_url('index.php/cadum/tampil?view=all')?>">Semua Data</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('index.php/cadum/tampil?view=bln&month='.$bulan)?>">Data Bulanan</a>
                            </li>
                        </ul>	
                    </li>				
					<li>
                        <a  href="<?php echo base_url(); ?>index.php/cso/tampil"><i class="fa fa-bar-chart-o fa-3x"></i> Status Sales Order</a>
                    </li>	
                </ul>             
            </div>
            
        </nav>
<!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="<?php echo base_url()?>assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?php echo base_url()?>assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="<?php echo base_url()?>assets/js/custom.js"></script>	
     <!-- MORRIS CHART SCRIPTS -->
     <script src="<?php echo base_url()?>assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/morris/morris.js"></script>
		</body>
		</html>