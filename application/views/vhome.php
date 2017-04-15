<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>PT. INDONESIA COMNETS PLUS REGIONAL JAWA TIMUR</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

	<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
	<!--script src="js/less-1.3.3.min.js"></script-->
	<!--append �#!watch� to the browser URL, then refresh the page. -->
	
	<link href="<?php echo base_url()?>assets/a/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/a/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/a/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/a/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/a/css/main.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/a/css/responsive.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/assets/css/custom.css" rel="stylesheet">
	<script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
	<style type="text/css"> ${demo.css}	</style>	

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->
<head>
<nav class="navbar top-bar navbar-inverse item active" style="background-color:#FFFFFF; margin-left:-60px; height:70px; margin-top:10px">
            <div class="container">
                <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
      				<ul class="nav navbar-nav">
      				<li class="active"><a href="#myModal" data-toggle="modal">Login</a></li>
	 			</div>	
				<div>
				<button><a href="<?php echo base_url('index.php/clogin/slider')?>">hal</a></button>
				</div>			
                <a class="navbar-brand"><img src="<?php echo base_url()?>assets/img/image2.png" alt="logo"; ></a>
            </div><!--/.container-->
        </nav><!--/nav-->

    </head><!--/header-->
	
	<section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
				<li data-target="#main-slider" data-slide-to="3"></li>
				<li data-target="#main-slider" data-slide-to="4"></li>
				<li data-target="#main-slider" data-slide-to="5"></li>
				<li data-target="#main-slider" data-slide-to="6"></li>
            </ol>
            <div class="carousel-inner">

                <div class="item active" style="background-image: url(<?php echo base_url()?>assets/img/image2-body.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2 class="animation animated-item-1">Selamat Datang di</h2>
                                    <h1 class="animation animated-item-2">PT. INDONESIA COMNETS PLUS</h1>
                                    <h1 class="animation animated-item-2">Regional Jawa Timur</h1>								
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->

                <div class="item" style="background-image: url(<?php echo base_url()?>assets/img/image2-body.jpg)">
                    <div class="container">
                        <div class="row slide-margin" style="margin-top:-10px">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">VISI</h1>
                                    <h5 class="animation animated-item-2">Menjadi penyedia solusi TIK terkemuka di Indonesia berbasis jaringan melalui pemanfaatan aset strategis</h5>
                                    <h1 class="animation animated-item-1">MISI</h1>
                                    <h5 class="animation animated-item-2">1. Memenuhi kebutuhan dan harapan PLN secara proaktif dengan menyediakan solusi-solusi TIK yang inovatif dan memberikan nilai tambah</h5>
                                    <h5 class="animation animated-item-2">2. Membangun organisasi pembelajar yang berkinerja tinggi untuk mendorong Perusahaan mencapai bisnis yang unggul dan menjadi pilihan bagi talenta-talenta terbaik.</h5>	
                                    <h5 class="animation animated-item-2">3. Memberi kontribusi terhadap perkembangan telekomunikasi nasional</h5>																										
                                    <h5 class="animation animated-item-2">4. Memberikan layanan TIK yang terbaik di kelasnya kepada pelanggan guna meningkatkan nilai Perusahaan</h5>																																			
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
<?php
mysqli_connect("localhost","root","");
mysql_select_db("dash");

$plj = "SELECT * FROM plj ORDER BY tglPlj asc LIMIT 1";
$Plj = mysql_query($plj);
while( $load = mysql_fetch_array($Plj) ){
	$hariPlj = $load['hariPlj'];
	$ThariPlj = $load['ThariPlj'];
	$persenPlj = $load['persenPlj'];	
    $targetPlj = $load['targetPlj'];	
}

$jar = "SELECT * FROM jaringan ORDER BY tglJar asc LIMIT 1";
$Jar = mysql_query($jar);
while( $load = mysql_fetch_array($Jar) ){
	$menitJar = $load['menitJar'];
	$TmenitJar = $load['TmenitJar'];
	$persenJar = $load['persenJar'];	
    $TpersenJar = $load['TpersenJar'];	
}

$pa = "SELECT * FROM pa ORDER BY tglPa asc LIMIT 1";
$Pa = mysql_query($pa);
while( $load = mysql_fetch_array($Pa) ){
	$hariPa = $load['hariPa'];
	$ThariPa = $load['ThariPa'];
	$persenPa = $load['persenPa'];	
    $TpersenPa = $load['TpersenPa'];	
}

$da = "SELECT * FROM da ORDER BY tglDa asc LIMIT 1";
$Da = mysql_query($da);
while( $load = mysql_fetch_array($Da) ){
	$kaliDa = $load['kaliDa'];
	$TkaliDa = $load['TkaliDa'];
	$persenDa = $load['persenDa'];	
    $TpersenDa = $load['TpersenDa'];	
}

$adum = "SELECT * FROM adum ORDER BY tglAdum asc LIMIT 1";
$Adum = mysql_query($adum);
while( $load = mysql_fetch_array($Adum) ){
	$kali1Adum = $load['kali1Adum'];
	$Tkali1Adum = $load['Tkali1Adum'];
	$kali2Adum = $load['kali2Adum'];	
    $Tkali2Adum = $load['Tkali2Adum'];	
}
?>

                <div class="item" style="background-image: url(<?php echo base_url()?>assets/img/image2-body.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content" style="margin-right:-100px; margin-top:100px">
                                    <h6 class="animation animated-item-1" style="margin-left:115px">PEMBANGUNAN LASTMILE & JARINGAN</h6>
								<table align="center" style="margin-left:165px; margin-top:30px; text-align: center;" width="760px">
									
									<tr>
										<td>
											<div class="animation animated-item-2" style="color:#fff; font-size:20px;">Rata-Rata Lama hari Penyelesaian penyambungan pelanggan <  <?php echo $ThariPlj ?> Hari<br><br></div>
										</td>
										
										<td>
											<div class="animation animated-item-2" style="color:#fff; font-size:20px;">Pencapaian penyelesaian (realisasi fisik) Program investasi Terkontrak > <?php echo $targetPlj ?> %<br><br></div>
										</td>						

									<tr>
										<td align="center">
										<div class="animation animated-item-2" id="speedo1" style="min-width: 250px; max-width: 260px; height: 300px;"></div>
										</td>
										<td align="center">
										<div class="animation animated-item-2" id="speedo2" style="min-width: 250px; max-width: 260px; height: 300px;"></div>
										</td>							
									</tr>
									</table>								
								</div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
				
                <div class="item" style="background-image: url(<?php echo base_url()?>assets/img/image2-body.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content" style="margin-right:-100px; margin-top:100px">
                                    <h6 class="animation animated-item-1" style="margin-left:300px">PEMELIHARAAN  JARINGAN</h6>
								<table align="center" style="margin-left:165px; margin-top:30px; text-align: center;" width="760px">
									
									<tr>
										<td>
											<div class="animation animated-item-2" style="color:#fff; font-size:20px;">Mengawasi penanganan gangguan dan jasa telekomunikasi dengan target rata-rata waktu (durasi) <  <?php echo $TmenitJar ?> menit<br><br></div>
										</td>
										
										<td>
											<div class="animation animated-item-2" style="color:#fff; font-size:20px;">Peningkatkan kualitas proses penanganan gangguan PS, FOT, FOC < <?php echo $TpersenJar ?> %<br><br></div>
										</td>
									</tr>
									<tr>
										<td align="center">
										<div class="animation animated-item-2" id="speedo3" style="min-width: 250px; max-width: 260px; height: 300px;"></div>
										</td>
										<td align="center">
										<div class="animation animated-item-2" id="speedo4" style="min-width: 250px; max-width: 260px; height: 300px;"></div>
										</td>							
									</tr>
									</table>								
								</div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
				
                <div class="item" style="background-image: url(<?php echo base_url()?>assets/img/image2-body.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content" style="margin-right:-100px; margin-top:100px">
                                    <h6 class="animation animated-item-1" style="margin-left:300px">PRESALES AKTIVASI</h6>
								<table align="center" style="margin-left:165px; margin-top:30px; text-align: center;" width="760px">
									
									<tr>
										<td>
											<div class="animation animated-item-2" style="color:#fff; font-size:20px;">Rata-Rata lama hari respon jawaban presales per semester <  <?php echo $ThariPa ?> Hari<br><br></div>
										</td>
										
										<td>
											<div class="animation animated-item-2" style="color:#fff; font-size:20px;">Meningkatkan akurasi panjang kabel dengan toleransi maksimal 20% dibanding dengan realisasi SO > 6,5 jam <?php echo $TpersenPa ?> %<br><br></div>
										</td>
									</tr>
									<tr>
										<td align="center">
										<div class="animation animated-item-2" id="speedo5" style="min-width: 250px; max-width: 260px; height: 300px;"></div>
										</td>
										<td align="center">
										<div class="animation animated-item-2" id="speedo6" style="min-width: 250px; max-width: 260px; height: 300px;"></div>
										</td>							
									</tr>
									</table>								
								</div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->		
									
                <div class="item" style="background-image: url(<?php echo base_url()?>assets/img/image2-body.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content" style="margin-right:-100px; margin-top:100px">
                                    <h6 class="animation animated-item-1" style="margin-left:400px">DATA ASET</h6>
								<table align="center" style="margin-left:165px; margin-top:30px; text-align: center;" width="760px">
									
									<tr>
										<td>
											<div class="animation animated-item-2" style="color:#fff; font-size:20px;">Mengawasi terlaksananya penertiban penggunaan ROW ilegal >  <?php echo $TkaliDa ?> x<br><br></div>
										</td>
										
										<td>
											<div class="animation animated-item-2" style="color:#fff; font-size:20px;">Melaksanakan pendataan Asset management dan ROW yang sudah di gunakan oleh pihak ketiga > <?php echo $TpersenDa ?> %<br><br></div>
										</td>
									</tr>
									<tr>
										<td align="center">
										<div class="animation animated-item-2" id="speedo7" style="min-width: 250px; max-width: 260px; height: 300px;"></div>
										</td>
										<td align="center">
										<div class="animation animated-item-2" id="speedo8" style="min-width: 250px; max-width: 260px; height: 300px;"></div>
										</td>							
									</tr>
									</table>								
								</div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->		
				
                <div class="item" style="background-image: url(<?php echo base_url()?>assets/img/image2-body.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content" style="margin-right:-100px; margin-top:100px">
                                    <h6 class="animation animated-item-1" style="margin-left:180px">ADMINITRASI & UMUM (ADUM)</h6>
								<table align="center" style="margin-left:165px; margin-top:30px; text-align: center;" width="760px">
									
									<tr>
										<td>
											<div class="animation animated-item-2" style="color:#fff; font-size:20px;">Tersedianya pelaporan  fasilitas kantor dan keuangan >  <?php echo $Tkali1Adum ?> x<br><br></div>
										</td>
										
										<td>
											<div class="animation animated-item-2" style="color:#fff; font-size:20px;">Terlaksananya ketersediaan dan pelaporan material gudang  > <?php echo $Tkali2Adum ?> x<br><br></div>
										</td>

									<tr>
										<td align="center">
										<div class="animation animated-item-2" id="speedo9" style="min-width: 250px; max-width: 260px; height: 300px;"></div>
										</td>
										<td align="center">
										<div class="animation animated-item-2" id="speedo10" style="min-width: 250px; max-width: 260px; height: 300px;"></div>
										</td>							
									</tr>
									</table>								
								</div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->									
								
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>
    </section><!--/#main-slider-->

	<footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2015 FILKOM-UB developer. All Rights Reserved.
                </div>
                
            </div>
        </div>
    </footer><!--/#footer-->
	
 <!-- modal begin -->
 <div id="myModal" class="modal fade">
   <div class="modal-dialog">
     <div class="modal-content">
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
         <h4 class="modal-title">Login</h4>
       </div>
       <div class="modal-body">

        <form class="form-horizontal" action="<?php echo base_url('index.php/clogin/getDataLogin')?>" method="post">
		<div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
				<div class="col-sm-10">
					<input type="email" class="form-control" id="email" required  name = "email">
				</div>
		</div>
		<div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
				<div class="col-sm-10">
					<input type="password" class="form-control" id="password" required  name = "password">
				</div>
		</div>
         <div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<div class="checkbox">
					 <label><input type="checkbox"> Remember me</label>
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				 <input type="submit" class="btn btn-default" value="Login" id ="login"></form>    
        </div>
	
   </div>
 </div>
</div>
<script type="text/javascript">
$(function () {

    $('#speedo1').highcharts({

        chart: {
            type: 'gauge',
            plotBackgroundColor: null,
            plotBackgroundImage: null,
            plotBorderWidth: 0,
            plotShadow: false
        },

        title: {
            text: '<?php if($hariPlj < $ThariPlj) echo 'TERCAPAI' ?>'
        },

        pane: {
            startAngle: -150,
            endAngle: 150,
            background: [{
                backgroundColor: {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                    stops: [
                        [0, '#FFF'],
                        [1, '#333']
                    ]
                },
                borderWidth: 0,
                outerRadius: '109%'
            }, {
                backgroundColor: {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                    stops: [
                        [0, '#333'],
                        [1, '#FFF']
                    ]
                },
                borderWidth: 1,
                outerRadius: '107%'
            }, {
                // default background
            }, {
                backgroundColor: '#DDD',
                borderWidth: 0,
                outerRadius: '105%',
                innerRadius: '103%'
            }]
        },

        // the value axis
        yAxis: {
            min: 0,
            max: 100,

            minorTickInterval: 'auto',
            minorTickWidth: 0.4,
            minorTickLength: 10,
            minorTickPosition: 'inside',
            minorTickColor: '#000',

            tickPixelInterval: 33,
            tickWidth: 3,
            tickPosition: 'inside',
            tickLength: 11,
            tickColor: '#000',
            labels: {
                step: 2,
                rotation: 'auto'
            },
            title: {
                text: 'dalam %'
            },
            plotBands: [{
                from: 0,
                to: <?php echo $ThariPlj ?>,
                color: '#00DD00' // green
            /*}, {
                from: 50,
                to: 85,
                color: '#DDDF0D' // yellow*/
            }, {
                from: <?php echo $ThariPlj ?>,
                to: 100,
                color: '#EE0000' // red
            }]
        },

        series: [
			{
            name: 'REALISASI PENYELESAIAN',
            data: [<?php echo $hariPlj; ?>],
            tooltip: {
                valueSuffix: '%'
            }
        }]

    },
        // Add some life
        function (chart) {
            if (!chart.renderer.forExport) {
                setInterval(function () {
                    var point = chart.series[0].points[0],
                        newVal,
                        //inc = Math.round((Math.random() - 0.5) * 20);
						inc = 10;

                    //newVal = point.y + inc;
                    if (newVal < 0 || newVal > 100) {
                        newVal = 0;
                    }

                    point.update(newVal);

                }, 3000);
            }
        });
});
</script>

<script type="text/javascript">
$(function () {

    $('#speedo2').highcharts({

        chart: {
            type: 'gauge',
            plotBackgroundColor: null,
            plotBackgroundImage: null,
            plotBorderWidth: 0,
            plotShadow: false
        },

        title: {
            text: ''
        },

        pane: {
            startAngle: -150,
            endAngle: 150,
            background: [{
                backgroundColor: {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                    stops: [
                        [0, '#FFF'],
                        [1, '#333']
                    ]
                },
                borderWidth: 0,
                outerRadius: '109%'
            }, {
                backgroundColor: {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                    stops: [
                        [0, '#333'],
                        [1, '#FFF']
                    ]
                },
                borderWidth: 1,
                outerRadius: '107%'
            }, {
                // default background
            }, {
                backgroundColor: '#DDD',
                borderWidth: 0,
                outerRadius: '105%',
                innerRadius: '103%'
            }]
        },

        // the value axis
        yAxis: {
            min: 0,
            max: 100,

            minorTickInterval: 'auto',
            minorTickWidth: 0.4,
            minorTickLength: 10,
            minorTickPosition: 'inside',
            minorTickColor: '#000',

            tickPixelInterval: 33,
            tickWidth: 3,
            tickPosition: 'inside',
            tickLength: 11,
            tickColor: '#000',
            labels: {
                step: 2,
                rotation: 'auto'
            },
            title: {
                text: 'dalam %'
            },
            plotBands: [{
                from: <?php echo $targetPlj ?>,
                to: 100,
                color: '#00DD00' // green
            /*}, {
                from: 50,
                to: 85,
                color: '#DDDF0D' // yellow*/
            }, {
                from: 0,
                to: <?php echo $targetPlj ?>,
                color: '#EE0000' // red
            }]
        },

        series: [
			{
            name: 'REALISASI PENYELESAIAN',
            data: [<?php echo $persenPlj; ?>],
            tooltip: {
                valueSuffix: '%'
            }
        }]

    },
        // Add some life
        function (chart) {
            if (!chart.renderer.forExport) {
                setInterval(function () {
                    var point = chart.series[0].points[0],
                        newVal,
                        //inc = Math.round((Math.random() - 0.5) * 20);
						inc = 10;

                    //newVal = point.y + inc;
                    if (newVal < 0 || newVal > 100) {
                        newVal = 0;
                    }

                    point.update(newVal);

                }, 3000);
            }
        });
});
</script>

<script type="text/javascript">
$(function () {

    $('#speedo3').highcharts({

        chart: {
            type: 'gauge',
            plotBackgroundColor: null,
            plotBackgroundImage: null,
            plotBorderWidth: 0,
            plotShadow: false
        },

        title: {
            text: ''
        },

        pane: {
            startAngle: -150,
            endAngle: 150,
            background: [{
                backgroundColor: {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                    stops: [
                        [0, '#FFF'],
                        [1, '#333']
                    ]
                },
                borderWidth: 0,
                outerRadius: '109%'
            }, {
                backgroundColor: {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                    stops: [
                        [0, '#333'],
                        [1, '#FFF']
                    ]
                },
                borderWidth: 1,
                outerRadius: '107%'
            }, {
                // default background
            }, {
                backgroundColor: '#DDD',
                borderWidth: 0,
                outerRadius: '105%',
                innerRadius: '103%'
            }]
        },

        // the value axis
        yAxis: {
            min: 0,
            max: 100,

            minorTickInterval: 'auto',
            minorTickWidth: 0.4,
            minorTickLength: 10,
            minorTickPosition: 'inside',
            minorTickColor: '#000',

            tickPixelInterval: 33,
            tickWidth: 3,
            tickPosition: 'inside',
            tickLength: 11,
            tickColor: '#000',
            labels: {
                step: 2,
                rotation: 'auto'
            },
            title: {
                text: 'dalam %'
            },
            plotBands: [{
                from: 0,
                to: <?php echo $TmenitJar ?>,
                color: '#00DD00' // green
            /*}, {
                from: 50,
                to: 85,
                color: '#DDDF0D' // yellow*/
            }, {
                from: <?php echo $TmenitJar ?>,
                to: 100,
                color: '#EE0000' // red
            }]
        },

        series: [
			{
            name: 'REALISASI PENYELESAIAN',
            data: [<?php echo $menitJar; ?>],
            tooltip: {
                valueSuffix: '%'
            }
        }]

    },
        // Add some life
        function (chart) {
            if (!chart.renderer.forExport) {
                setInterval(function () {
                    var point = chart.series[0].points[0],
                        newVal,
                        //inc = Math.round((Math.random() - 0.5) * 20);
						inc = 10;

                    //newVal = point.y + inc;
                    if (newVal < 0 || newVal > 100) {
                        newVal = 0;
                    }

                    point.update(newVal);

                }, 3000);
            }
        });
});
</script>

<script type="text/javascript">
$(function () {

    $('#speedo4').highcharts({

        chart: {
            type: 'gauge',
            plotBackgroundColor: null,
            plotBackgroundImage: null,
            plotBorderWidth: 0,
            plotShadow: false
        },

        title: {
            text: ''
        },

        pane: {
            startAngle: -150,
            endAngle: 150,
            background: [{
                backgroundColor: {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                    stops: [
                        [0, '#FFF'],
                        [1, '#333']
                    ]
                },
                borderWidth: 0,
                outerRadius: '109%'
            }, {
                backgroundColor: {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                    stops: [
                        [0, '#333'],
                        [1, '#FFF']
                    ]
                },
                borderWidth: 1,
                outerRadius: '107%'
            }, {
                // default background
            }, {
                backgroundColor: '#DDD',
                borderWidth: 0,
                outerRadius: '105%',
                innerRadius: '103%'
            }]
        },

        // the value axis
        yAxis: {
            min: 0,
            max: 100,

            minorTickInterval: 'auto',
            minorTickWidth: 0.4,
            minorTickLength: 10,
            minorTickPosition: 'inside',
            minorTickColor: '#000',

            tickPixelInterval: 33,
            tickWidth: 3,
            tickPosition: 'inside',
            tickLength: 11,
            tickColor: '#000',
            labels: {
                step: 2,
                rotation: 'auto'
            },
            title: {
                text: 'dalam %'
            },
            plotBands: [{
                from: <?php echo $TpersenJar ?>,
                to: 100,
                color: '#00DD00' // green
            /*}, {
                from: 50,
                to: 85,
                color: '#DDDF0D' // yellow*/
            }, {
                from: 0,
                to: <?php echo $TpersenJar ?>,
                color: '#EE0000' // red
            }]
        },

        series: [
			{
            name: 'REALISASI PENYELESAIAN',
            data: [<?php echo $persenJar; ?>],
            tooltip: {
                valueSuffix: '%'
            }
        }]

    },
        // Add some life
        function (chart) {
            if (!chart.renderer.forExport) {
                setInterval(function () {
                    var point = chart.series[0].points[0],
                        newVal,
                        //inc = Math.round((Math.random() - 0.5) * 20);
						inc = 10;

                    //newVal = point.y + inc;
                    if (newVal < 0 || newVal > 100) {
                        newVal = 0;
                    }

                    point.update(newVal);

                }, 3000);
            }
        });
});
</script>

<script type="text/javascript">
$(function () {

    $('#speedo5').highcharts({

        chart: {
            type: 'gauge',
            plotBackgroundColor: null,
            plotBackgroundImage: null,
            plotBorderWidth: 0,
            plotShadow: false
        },

        title: {
            text: ''
        },

        pane: {
            startAngle: -150,
            endAngle: 150,
            background: [{
                backgroundColor: {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                    stops: [
                        [0, '#FFF'],
                        [1, '#333']
                    ]
                },
                borderWidth: 0,
                outerRadius: '109%'
            }, {
                backgroundColor: {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                    stops: [
                        [0, '#333'],
                        [1, '#FFF']
                    ]
                },
                borderWidth: 1,
                outerRadius: '107%'
            }, {
                // default background
            }, {
                backgroundColor: '#DDD',
                borderWidth: 0,
                outerRadius: '105%',
                innerRadius: '103%'
            }]
        },

        // the value axis
        yAxis: {
            min: 0,
            max: 100,

            minorTickInterval: 'auto',
            minorTickWidth: 0.4,
            minorTickLength: 10,
            minorTickPosition: 'inside',
            minorTickColor: '#000',

            tickPixelInterval: 33,
            tickWidth: 3,
            tickPosition: 'inside',
            tickLength: 11,
            tickColor: '#000',
            labels: {
                step: 2,
                rotation: 'auto'
            },
            title: {
                text: 'dalam %'
            },
            plotBands: [{
                from: 0,
                to: <?php echo $ThariPa ?>,
                color: '#00DD00' // green
            /*}, {
                from: 50,
                to: 85,
                color: '#DDDF0D' // yellow*/
            }, {
                from: <?php echo $ThariPa ?>,
                to: 100,
                color: '#EE0000' // red
            }]
        },

        series: [
			{
            name: 'REALISASI PENYELESAIAN',
            data: [<?php echo $hariPa; ?>],
            tooltip: {
                valueSuffix: '%'
            }
        }]

    },
        // Add some life
        function (chart) {
            if (!chart.renderer.forExport) {
                setInterval(function () {
                    var point = chart.series[0].points[0],
                        newVal,
                        //inc = Math.round((Math.random() - 0.5) * 20);
						inc = 10;

                    //newVal = point.y + inc;
                    if (newVal < 0 || newVal > 100) {
                        newVal = 0;
                    }

                    point.update(newVal);

                }, 3000);
            }
        });
});
</script>

<script type="text/javascript">
$(function () {

    $('#speedo6').highcharts({

        chart: {
            type: 'gauge',
            plotBackgroundColor: null,
            plotBackgroundImage: null,
            plotBorderWidth: 0,
            plotShadow: false
        },

        title: {
            text: ''
        },

        pane: {
            startAngle: -150,
            endAngle: 150,
            background: [{
                backgroundColor: {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                    stops: [
                        [0, '#FFF'],
                        [1, '#333']
                    ]
                },
                borderWidth: 0,
                outerRadius: '109%'
            }, {
                backgroundColor: {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                    stops: [
                        [0, '#333'],
                        [1, '#FFF']
                    ]
                },
                borderWidth: 1,
                outerRadius: '107%'
            }, {
                // default background
            }, {
                backgroundColor: '#DDD',
                borderWidth: 0,
                outerRadius: '105%',
                innerRadius: '103%'
            }]
        },

        // the value axis
        yAxis: {
            min: 0,
            max: 100,

            minorTickInterval: 'auto',
            minorTickWidth: 0.4,
            minorTickLength: 10,
            minorTickPosition: 'inside',
            minorTickColor: '#000',

            tickPixelInterval: 33,
            tickWidth: 3,
            tickPosition: 'inside',
            tickLength: 11,
            tickColor: '#000',
            labels: {
                step: 2,
                rotation: 'auto'
            },
            title: {
                text: 'dalam %'
            },
            plotBands: [{
                from: <?php echo $TpersenPa ?>,
                to: 100,
                color: '#00DD00' // green
            /*}, {
                from: 50,
                to: 85,
                color: '#DDDF0D' // yellow*/
            }, {
                from: 0,
                to: <?php echo $TpersenPa ?>,
                color: '#EE0000' // red
            }]
        },

        series: [
			{
            name: 'REALISASI PENYELESAIAN',
            data: [<?php echo $persenPa; ?>],
            tooltip: {
                valueSuffix: '%'
            }
        }]

    },
        // Add some life
        function (chart) {
            if (!chart.renderer.forExport) {
                setInterval(function () {
                    var point = chart.series[0].points[0],
                        newVal,
                        //inc = Math.round((Math.random() - 0.5) * 20);
						inc = 10;

                    //newVal = point.y + inc;
                    if (newVal < 0 || newVal > 100) {
                        newVal = 0;
                    }

                    point.update(newVal);

                }, 3000);
            }
        });
});
</script>

<script type="text/javascript">
$(function () {

    $('#speedo7').highcharts({

        chart: {
            type: 'gauge',
            plotBackgroundColor: null,
            plotBackgroundImage: null,
            plotBorderWidth: 0,
            plotShadow: false
        },

        title: {
            text: ''
        },

        pane: {
            startAngle: -150,
            endAngle: 150,
            background: [{
                backgroundColor: {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                    stops: [
                        [0, '#FFF'],
                        [1, '#333']
                    ]
                },
                borderWidth: 0,
                outerRadius: '109%'
            }, {
                backgroundColor: {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                    stops: [
                        [0, '#333'],
                        [1, '#FFF']
                    ]
                },
                borderWidth: 1,
                outerRadius: '107%'
            }, {
                // default background
            }, {
                backgroundColor: '#DDD',
                borderWidth: 0,
                outerRadius: '105%',
                innerRadius: '103%'
            }]
        },

        // the value axis
        yAxis: {
            min: 0,
            max: 100,

            minorTickInterval: 'auto',
            minorTickWidth: 0.4,
            minorTickLength: 10,
            minorTickPosition: 'inside',
            minorTickColor: '#000',

            tickPixelInterval: 33,
            tickWidth: 3,
            tickPosition: 'inside',
            tickLength: 11,
            tickColor: '#000',
            labels: {
                step: 2,
                rotation: 'auto'
            },
            title: {
                text: 'dalam %'
            },
            plotBands: [{
                from: <?php echo $TkaliDa ?>,
                to: 100,
                color: '#00DD00' // green
            /*}, {
                from: 50,
                to: 85,
                color: '#DDDF0D' // yellow*/
            }, {
                from: 0,
                to: <?php echo $TkaliDa ?>,
                color: '#EE0000' // red
            }]
        },

        series: [
			{
            name: 'REALISASI PENYELESAIAN',
            data: [<?php echo $kaliDa; ?>],
            tooltip: {
                valueSuffix: '%'
            }
        }]

    },
        // Add some life
        function (chart) {
            if (!chart.renderer.forExport) {
                setInterval(function () {
                    var point = chart.series[0].points[0],
                        newVal,
                        //inc = Math.round((Math.random() - 0.5) * 20);
						inc = 10;

                    //newVal = point.y + inc;
                    if (newVal < 0 || newVal > 100) {
                        newVal = 0;
                    }

                    point.update(newVal);

                }, 3000);
            }
        });
});
</script>

<script type="text/javascript">
$(function () {

    $('#speedo8').highcharts({

        chart: {
            type: 'gauge',
            plotBackgroundColor: null,
            plotBackgroundImage: null,
            plotBorderWidth: 0,
            plotShadow: false
        },

        title: {
            text: ''
        },

        pane: {
            startAngle: -150,
            endAngle: 150,
            background: [{
                backgroundColor: {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                    stops: [
                        [0, '#FFF'],
                        [1, '#333']
                    ]
                },
                borderWidth: 0,
                outerRadius: '109%'
            }, {
                backgroundColor: {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                    stops: [
                        [0, '#333'],
                        [1, '#FFF']
                    ]
                },
                borderWidth: 1,
                outerRadius: '107%'
            }, {
                // default background
            }, {
                backgroundColor: '#DDD',
                borderWidth: 0,
                outerRadius: '105%',
                innerRadius: '103%'
            }]
        },

        // the value axis
        yAxis: {
            min: 0,
            max: 100,

            minorTickInterval: 'auto',
            minorTickWidth: 0.4,
            minorTickLength: 10,
            minorTickPosition: 'inside',
            minorTickColor: '#000',

            tickPixelInterval: 33,
            tickWidth: 3,
            tickPosition: 'inside',
            tickLength: 11,
            tickColor: '#000',
            labels: {
                step: 2,
                rotation: 'auto'
            },
            title: {
                text: 'dalam %'
            },
            plotBands: [{
                from: <?php echo $TpersenDa ?>,
                to: 100,
                color: '#00DD00' // green
            /*}, {
                from: 50,
                to: 85,
                color: '#DDDF0D' // yellow*/
            }, {
                from: 0,
                to: <?php echo $TpersenDa ?>,
                color: '#EE0000' // red
            }]
        },

        series: [
			{
            name: 'REALISASI PENYELESAIAN',
            data: [<?php echo $persenDa; ?>],
            tooltip: {
                valueSuffix: '%'
            }
        }]

    },
        // Add some life
        function (chart) {
            if (!chart.renderer.forExport) {
                setInterval(function () {
                    var point = chart.series[0].points[0],
                        newVal,
                        //inc = Math.round((Math.random() - 0.5) * 20);
						inc = 10;

                    //newVal = point.y + inc;
                    if (newVal < 0 || newVal > 100) {
                        newVal = 0;
                    }

                    point.update(newVal);

                }, 3000);
            }
        });
});
</script>

<script type="text/javascript">
$(function () {

    $('#speedo9').highcharts({

        chart: {
            type: 'gauge',
            plotBackgroundColor: null,
            plotBackgroundImage: null,
            plotBorderWidth: 0,
            plotShadow: false
        },

        title: {
            text: ''
        },

        pane: {
            startAngle: -150,
            endAngle: 150,
            background: [{
                backgroundColor: {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                    stops: [
                        [0, '#FFF'],
                        [1, '#333']
                    ]
                },
                borderWidth: 0,
                outerRadius: '109%'
            }, {
                backgroundColor: {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                    stops: [
                        [0, '#333'],
                        [1, '#FFF']
                    ]
                },
                borderWidth: 1,
                outerRadius: '107%'
            }, {
                // default background
            }, {
                backgroundColor: '#DDD',
                borderWidth: 0,
                outerRadius: '105%',
                innerRadius: '103%'
            }]
        },

        // the value axis
        yAxis: {
            min: 0,
            max: 100,

            minorTickInterval: 'auto',
            minorTickWidth: 0.4,
            minorTickLength: 10,
            minorTickPosition: 'inside',
            minorTickColor: '#000',

            tickPixelInterval: 33,
            tickWidth: 3,
            tickPosition: 'inside',
            tickLength: 11,
            tickColor: '#000',
            labels: {
                step: 2,
                rotation: 'auto'
            },
            title: {
                text: 'dalam %'
            },
            plotBands: [{
                from: <?php echo $Tkali1Adum ?>,
                to: 100,
                color: '#00DD00' // green
            /*}, {
                from: 50,
                to: 85,
                color: '#DDDF0D' // yellow*/
            }, {
                from: 0,
                to: <?php echo $Tkali1Adum ?>,
                color: '#EE0000' // red
            }]
        },

        series: [
			{
            name: 'REALISASI PENYELESAIAN',
            data: [<?php echo $kali1Adum; ?>],
            tooltip: {
                valueSuffix: '%'
            }
        }]

    },
        // Add some life
        function (chart) {
            if (!chart.renderer.forExport) {
                setInterval(function () {
                    var point = chart.series[0].points[0],
                        newVal,
                        //inc = Math.round((Math.random() - 0.5) * 20);
						inc = 10;

                    //newVal = point.y + inc;
                    if (newVal < 0 || newVal > 100) {
                        newVal = 0;
                    }

                    point.update(newVal);

                }, 3000);
            }
        });
});
</script>

<script type="text/javascript">
$(function () {

    $('#speedo10').highcharts({

        chart: {
            type: 'gauge',
            plotBackgroundColor: null,
            plotBackgroundImage: null,
            plotBorderWidth: 0,
            plotShadow: false
        },

        title: {
            text: ''
        },

        pane: {
            startAngle: -150,
            endAngle: 150,
            background: [{
                backgroundColor: {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                    stops: [
                        [0, '#FFF'],
                        [1, '#333']
                    ]
                },
                borderWidth: 0,
                outerRadius: '109%'
            }, {
                backgroundColor: {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                    stops: [
                        [0, '#333'],
                        [1, '#FFF']
                    ]
                },
                borderWidth: 1,
                outerRadius: '107%'
            }, {
                // default background
            }, {
                backgroundColor: '#DDD',
                borderWidth: 0,
                outerRadius: '105%',
                innerRadius: '103%'
            }]
        },

        // the value axis
        yAxis: {
            min: 0,
            max: 100,

            minorTickInterval: 'auto',
            minorTickWidth: 0.4,
            minorTickLength: 10,
            minorTickPosition: 'inside',
            minorTickColor: '#000',

            tickPixelInterval: 33,
            tickWidth: 3,
            tickPosition: 'inside',
            tickLength: 11,
            tickColor: '#000',
            labels: {
                step: 2,
                rotation: 'auto'
            },
            title: {
                text: 'dalam %'
            },
            plotBands: [{
                from: <?php echo $Tkali2Adum ?>,
                to: 100,
                color: '#00DD00' // green
            /*}, {
                from: 50,
                to: 85,
                color: '#DDDF0D' // yellow*/
            }, {
                from: 0,
                to: <?php echo $Tkali2Adum ?>,
                color: '#EE0000' // red
            }]
        },

        series: [
			{
            name: 'REALISASI PENYELESAIAN',
            data: [<?php echo $kali2Adum; ?>],
            tooltip: {
                valueSuffix: '%'
            }
        }]

    },
        // Add some life
        function (chart) {
            if (!chart.renderer.forExport) {
                setInterval(function () {
                    var point = chart.series[0].points[0],
                        newVal,
                        //inc = Math.round((Math.random() - 0.5) * 20);
						inc = 10;

                    //newVal = point.y + inc;
                    if (newVal < 0 || newVal > 100) {
                        newVal = 0;
                    }

                    point.update(newVal);

                }, 3000);
            }
        });
});
</script>


 <script src="<?php echo base_url();?>assets/as/js/jquery.min.js"></script>
 <script src="<?php echo base_url();?>assets/as/js/bootstrap.min.js"></script>
 <script src="<?php echo base_url();?>assets/as/js/jquery.easing.min.js"></script>	
 <script src="<?php echo base_url();?>assets/as/js/jquery.scrollTo.js"></script>
 <script src="<?php echo base_url();?>assets/as/js/wow.min.js"></script>
 <!-- Custom Theme JavaScript -->
 <script src="<?php echo base_url();?>assets/as/js/custom.js"></script>
 
 <script src="<?php echo base_url()?>assets/js/highcharts.js"></script>
<script src="<?php echo base_url()?>assets/js/highcharts-more.js"></script>
<script src="<?php echo base_url()?>assets/js/modules/exporting.js"></script>



<!-- modal end -->    
</body>
</html>
