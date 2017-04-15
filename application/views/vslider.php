<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>DASHBOARD | PT. INDONESIA COMNETS PLUS REGIONAL JAWA TIMUR</title>
</head>
<body style="padding:0px; margin:0px; font-family:Arial, Verdana;background-color:#fff;">
    <!-- it works the same with all jquery version from 1.x to 2.x -->
    <script type="text/javascript" src="<?php echo base_url()?>assets/a/js/jquery-1.9.1.min.js"></script>
    <!-- use jssor.slider.mini.js (40KB) instead for release -->
    <!-- jssor.slider.mini.js = (jssor.js + jssor.slider.js) -->
    <script type="text/javascript" src="<?php echo base_url()?>assets/a/js/jssor.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/a/js/jssor.slider.js"></script>
	
 <!-- Custom Theme JavaScript -->
	<link href="<?php echo base_url()?>assets/a/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/a/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/a/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/a/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/a/css/main.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/a/css/responsive.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/assets/css/custom.css" rel="stylesheet">
	<script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
	<style type="text/css"> ${demo.css}	</style>	
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

    <script>
        jQuery(document).ready(function ($) {

            var _CaptionTransitions = [];
            _CaptionTransitions["L"] = { $Duration: 900, x: 0.6, $Easing: { $Left: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
            _CaptionTransitions["R"] = { $Duration: 900, x: -0.6, $Easing: { $Left: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
            _CaptionTransitions["T"] = { $Duration: 900, y: 0.6, $Easing: { $Top: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
            _CaptionTransitions["B"] = { $Duration: 900, y: -0.6, $Easing: { $Top: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
            _CaptionTransitions["ZMF|10"] = { $Duration: 900, $Zoom: 11, $Easing: { $Zoom: $JssorEasing$.$EaseOutQuad, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 };
            _CaptionTransitions["RTT|10"] = { $Duration: 900, $Zoom: 11, $Rotate: 1, $Easing: { $Zoom: $JssorEasing$.$EaseOutQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInExpo }, $Opacity: 2, $Round: { $Rotate: 0.8} };
            _CaptionTransitions["RTT|2"] = { $Duration: 900, $Zoom: 3, $Rotate: 1, $Easing: { $Zoom: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2, $Round: { $Rotate: 0.5} };
            _CaptionTransitions["RTTL|BR"] = { $Duration: 900, x: -0.6, y: -0.6, $Zoom: 11, $Rotate: 1, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInCubic }, $Opacity: 2, $Round: { $Rotate: 0.8} };
            _CaptionTransitions["CLIP|LR"] = { $Duration: 900, $Clip: 15, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic }, $Opacity: 2 };
            _CaptionTransitions["MCLIP|L"] = { $Duration: 900, $Clip: 1, $Move: true, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic} };
            _CaptionTransitions["MCLIP|R"] = { $Duration: 900, $Clip: 2, $Move: true, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic} };

            var options = {
                $FillMode: 2,                                       //[Optional] The way to fill image in slide, 0 stretch, 1 contain (keep aspect ratio and put all inside slide), 2 cover (keep aspect ratio and cover whole slide), 4 actual size, 5 contain for large image, actual size for small image, default value is 0
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlayInterval: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideEasing: $JssorEasing$.$EaseOutQuint,          //[Optional] Specifies easing for right to left animation, default value is $JssorEasing$.$EaseOutQuad
                $SlideDuration: 800,                               //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
                $DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                $CaptionSliderOptions: {                            //[Optional] Options which specifies how to animate caption
                    $Class: $JssorCaptionSlider$,                   //[Required] Class to create instance to animate caption
                    $CaptionTransitions: _CaptionTransitions,       //[Required] An array of caption transitions to play caption, see caption transition section at jssor slideshow transition builder
                    $PlayInMode: 1,                                 //[Optional] 0 None (no play), 1 Chain (goes after main slide), 3 Chain Flatten (goes after main slide and flatten all caption animations), default value is 1
                    $PlayOutMode: 3                                 //[Optional] 0 None (no play), 1 Chain (goes before main slide), 3 Chain Flatten (goes before main slide and flatten all caption animations), default value is 1
                },

                $BulletNavigatorOptions: {                          //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                 //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 1,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                    $SpacingX: 8,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 8,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                    $Orientation: 1                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                },

                $ArrowNavigatorOptions: {                           //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$,                  //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 1,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
                }
            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var bodyWidth = document.body.clientWidth;
                if (bodyWidth)
                    jssor_slider1.$ScaleWidth(Math.min(bodyWidth, 1920));
                else
                    window.setTimeout(ScaleSlider, 30);
            }
            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>
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

    <!-- Jssor Slider Begin -->
    <!-- To move inline styles to css file/block, please specify a class name for each element. --> 

	<nav class="navbar top-bar navbar-inverse item active" style="background-color:#FFFFFF; margin-left:-60px; height:70px; margin-top:12px">
            <div class="container">
                <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
      				<ul class="nav navbar-nav">
      				<li class="active"><a href="#myModal" data-toggle="modal">Login</a></li>
	 			</div>			
                <a class="navbar-brand"><img src="<?php echo base_url()?>assets/img/1920/image2.png" alt="logo"; ></a>
            </div><!--/.container-->
        </nav>
	<!--/nav-->
    <div id="slider1_container" style="position: relative; margin: 0 auto;
        top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
        <!-- Loading Screen -->
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block;
                top: 0px; left: 0px; width: 100%; height: 100%;">
            </div>
            <div style="position: absolute; display: block; background: url(<?php echo base_url()?>assets/img/loading.gif) no-repeat center center;
                top: 0px; left: 0px; width: 100%; height: 100%;">
            </div>
        </div>
        <!-- Slides Container -->
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1300px;
            height: 500px; overflow: hidden;">
               <div>
                <img u="image" src="<?php echo base_url()?>assets/img/1920/body.jpg" />
               		 <div style="position: absolute; width: 480px; height: 120px; top: 200px; left: 120px; padding: 5px;
                    text-align: left; line-height: 60px; font-size: 40px; font-weight:100;
                        color:#FFFFFF;">Selamat Datang di
                	</div>
                	<b style="position: absolute; width: 750px; height: 120px; top: 270px; left: 120px; padding: 5px;
                    text-align: left; line-height: 60px; font-size: 45px; 
                        color:#FFFF00;">
                        PT. INDONESIA COMNETS PLUS Regional Jawa Timur
                	</b>
            	</div>
			   <div>
                <img u="image" src="<?php echo base_url()?>assets/img/1920/body.jpg" />
                <div style="position: absolute; height: 120px; top: 130px; left: 150px; padding: 5px;
                    text-align: left; line-height: 60px; font-size: 40px;
                        color: #FFFF00;">VISI
                </div>
				<div style="position: absolute; height: 120px; top: 170px; left: 150px; padding: 5px;
                    text-align: left; line-height: 60px; font-size: 20px;
                        color: #FFFFFF;">Menjadi penyedia solusi TIK terkemuka di Indonesia berbasis jaringan melalui pemanfaatan aset strategis
                </div>
				                <div style="position: absolute; height: 120px; top: 220px; left: 150px; padding: 5px;
                    text-align: left; line-height: 60px; font-size: 40px;
                        color: #FFFF00;">MISI
                </div>
				<div style="position: absolute; height: 120px; top: 280px; left: 150px; padding: 5px;
                    text-align: left; font-size: 20px;
                        color: #FFFFFF;">1. Memenuhi kebutuhan dan harapan PLN secara proaktif dengan menyediakan solusi-solusi TIK yang inovatif dan memberikan nilai tambah
                </div>
				<div style="position: absolute; height: 120px; top: 330px; left: 150px; padding: 5px;
                    text-align: left; font-size: 20px;
                        color: #FFFFFF;">2. Membangun organisasi pembelajar yang berkinerja tinggi untuk mendorong Perusahaan mencapai bisnis yang unggul dan menjadi pilihan bagi talenta-talenta terbaik
                </div>
				<div style="position: absolute; height: 120px; top: 380px; left: 150px; padding: 5px;
                    text-align: left;  font-size: 20px;
                        color: #FFFFFF;">3. Memberi kontribusi terhadap perkembangan telekomunikasi nasional
                </div>

				<div style="position: absolute; height: 120px; top: 410px; left: 150px; padding: 5px;
                    text-align: left;  font-size: 20px;
                        color: #FFFFFF;">4. Memberikan layanan TIK yang terbaik di kelasnya kepada pelanggan guna meningkatkan nilai Perusahaan
                </div>
            </div>
            <div>
                <img u="image" src="<?php echo base_url()?>assets/img/1920/body.jpg" />
                <div style="position: absolute;  height: 120px; top: 45px; left: 395px; padding: 5px;
                    text-align: center; line-height: 60px; font-size: 40px;
                        color: #FFFF00;">Pembangunan Lastmile & Jaringan 
                </div>
				<div style="position: absolute; height: 120px; top: 100px; left: 150px; padding: 5px;
                    text-align: left;  font-size: 20px;
                        color: #FFFFFF;">
                
						<table align="center" style="margin-left:165px;text-align: center;" width="800px">
									
									<tr>
										<td>
											<div style="color:#fff; font-size:20px;  margin-top:20px;">Rata-Rata Lama hari Penyelesaian penyambungan pelanggan <  <?php echo $ThariPlj ?> Hari<br><br></div>
										</td>
										
										<td>
											<div style="color:#fff; font-size:20px;  margin-top:20px; ">Pencapaian penyelesaian (realisasi fisik) Program investasi Terkontrak > <?php echo $targetPlj ?> %<br><br></div>
										</td>						

									<tr>
										<td align="center">
										<div  id="speedo1" style="min-width: 200px; max-width: 210px; height: 250px;"></div>
										</td>
										<td align="center">
										<div id="speedo2" style="min-width: 200px; max-width: 210px; height: 250px;"></div>
										</td>							
									</tr>
									</table>			
                        
                </div>
            </div>
			<div>
                <img u="image" src="<?php echo base_url()?>assets/img/1920/body.jpg" />
                <div style="position: absolute;  height: 120px; top: 45px; left: 470px; padding: 5px;
                    text-align: center; line-height: 60px; font-size: 40px;
                        color: #FFFF00;">Pemeliharaan Jaringan 
                </div>
				<div style="position: absolute; height: 120px; top: 100px; left: 150px; padding: 5px;
                    text-align: left;  font-size: 20px;
                        color: #FFFFFF;">
                
						<table align="center" style="margin-left:100px;text-align: center;" width="800px">
									
									<tr>
										<td>
											<div style="color:#fff; font-size:20px;  margin-top:20px;">Mengawasi penanganan gangguan dan jasa telekomunikasi dengan target rata-rata waktu (durasi) <  <?php echo $TmenitJar ?> menit<br><br></div>
										</td>
										
										<td>
											<div style="color:#fff; font-size:20px;  margin-top:20px; ">Peningkatkan kualitas proses penanganan gangguan PS, FOT, FOC < <?php echo $TpersenJar ?> %<br><br></div>
										</td>						

									<tr>
										<td align="center">
										<div  id="speedo3" style="min-width: 200px; max-width: 210px; height: 230px;"></div>
										</td>
										<td align="center">
										<div id="speedo4" style="min-width: 200px; max-width: 210px; height: 230px;"></div>
										</td>							
									</tr>
									</table>			
                        
                </div>
            </div>
						<div>
                <img u="image" src="<?php echo base_url()?>assets/img/1920/body.jpg" />
                <div style="position: absolute;  height: 120px; top: 45px; left: 500px; padding: 5px;
                    text-align: center; line-height: 60px; font-size: 40px;
                        color: #FFFF00;">Presales Aktivasi 
                </div>
				<div style="position: absolute; height: 120px; top: 100px; left: 150px; padding: 5px;
                    text-align: left;  font-size: 20px;
                        color: #FFFFFF;">
                
						<table align="center" style="margin-left:100px;text-align: center;" width="800px">
									
									<tr>
										<td>
											<div style="color:#fff; font-size:20px;  margin-top:20px;">Rata-Rata lama hari respon jawaban presales per semester <  <?php echo $ThariPa ?> Hari<br><br></div>
										</td>
										
										<td>
											<div style="color:#fff; font-size:20px;  margin-top:20px; ">Meningkatkan akurasi panjang kabel dengan toleransi maksimal 20% dibanding dengan realisasi SO > 6,5 jam <?php echo $TpersenPa ?> %<br><br></div>
										</td>						

									<tr>
										<td align="center">
										<div  id="speedo5" style="min-width: 200px; max-width: 210px; height: 230px;"></div>
										</td>
										<td align="center">
										<div id="speedo6" style="min-width: 200px; max-width: 210px; height: 230px;"></div>
										</td>							
									</tr>
									</table>			
                        
                </div>
            </div>
									<div>
                <img u="image" src="<?php echo base_url()?>assets/img/1920/body.jpg" />
                <div style="position: absolute;  height: 120px; top: 45px; left: 550px; padding: 5px;
                    text-align: center; line-height: 60px; font-size: 40px;
                        color: #FFFF00;">Data Aset 
                </div>
				<div style="position: absolute; height: 120px; top: 100px; left: 150px; padding: 5px;
                    text-align: left;  font-size: 20px;
                        color: #FFFFFF;">
                
						<table align="center" style="margin-left:100px;text-align: center;" width="800px">
									
									<tr>
										<td>
											<div style="color:#fff; font-size:20px;  margin-top:20px;">Mengawasi terlaksananya penertiban penggunaan ROW ilegal >  <?php echo $TkaliDa ?> x<br><br></div>
										</td>
										
										<td>
											<div style="color:#fff; font-size:20px;  margin-top:20px; ">PMelaksanakan pendataan Asset management dan ROW yang sudah di gunakan oleh pihak ketiga > <?php echo $TpersenDa ?> %<br><br></div>
										</td>						

									<tr>
										<td align="center">
										<div  id="speedo7" style="min-width: 200px; max-width: 210px; height: 230px;"></div>
										</td>
										<td align="center">
										<div id="speedo8" style="min-width: 200px; max-width: 210px; height: 230px;"></div>
										</td>							
									</tr>
									</table>			
                        
                </div>
            </div>
									<div>
                <img u="image" src="<?php echo base_url()?>assets/img/1920/body.jpg" />
                <div style="position: absolute;  height: 120px; top: 45px; left: 470px; padding: 5px;
                    text-align: center; line-height: 60px; font-size: 40px;
                        color: #FFFF00;">Administrasi & Umum 
                </div>
				<div style="position: absolute; height: 120px; top: 100px; left: 150px; padding: 5px;
                    text-align: left;  font-size: 20px;
                        color: #FFFFFF;">
                
						<table align="center" style="margin-left:100px;text-align: center;" width="800px">
									
									<tr>
										<td>
											<div style="color:#fff; font-size:20px;  margin-top:20px;">Tersedianya pelaporan  fasilitas kantor dan keuangan >  <?php echo $Tkali1Adum ?> x<br><br></div>
										</td>
										
										<td>
											<div style="color:#fff; font-size:20px;  margin-top:20px; ">Terlaksananya ketersediaan dan pelaporan material gudang  > <?php echo $Tkali2Adum ?> x<br><br></div>
										</td>						

									<tr>
										<td align="center">
										<div  id="speedo9" style="min-width: 200px; max-width: 210px; height: 230px;"></div>
										</td>
										<td align="center">
										<div id="speedo10" style="min-width: 200px; max-width: 210px; height: 230px;"></div>
										</td>							
									</tr>
									</table>			
                        
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
            text: '<?php if($hariPlj < $ThariPlj) echo 'TERCAPAI'; else echo 'BELUM TERCAPAI' ?>',
			style: {
                color: '#FF0000',
                fontSize: '16px',
				fontWeight: 'bold'
            }
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
                text: 'hari'
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
                valueSuffix: 'hari'
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
           text: '<?php if($persenPlj > $targetPlj) echo 'TERCAPAI'; else echo 'BELUM TERCAPAI' ?>',
		   style: {
                color: '#FF0000',
                fontSize: '16px',
				fontWeight: 'bold'
            }
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
                text: '%'
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
           text: '<?php if($menitJar < $TmenitJar) echo 'TERCAPAI'; else echo 'BELUM TERCAPAI' ?>',
		   style: {
                color: '#FF0000',
                fontSize: '16px',
				fontWeight: 'bold'
            }
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
                text: 'mnt'
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
                valueSuffix: 'menit'
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
          text: '<?php if($persenJar > $TpersenJar) echo 'TERCAPAI'; else echo 'BELUM TERCAPAI' ?>',
		  style: {
                color: '#FF0000',
                fontSize: '16px',
				fontWeight: 'bold'
            }
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
                text: '%'
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
            text: '<?php if($hariPa < $ThariPa) echo 'TERCAPAI'; else echo 'BELUM TERCAPAI' ?>',
			style: {
                color: '#FF0000',
                fontSize: '16px',
				fontWeight: 'bold'
            }
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
                text: 'hari'
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
                valueSuffix: 'hari'
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
            text: '<?php if($persenPa > $TpersenPa) echo 'TERCAPAI'; else echo 'BELUM TERCAPAI' ?>',
			style: {
                color: '#FF0000',
                fontSize: '16px',
				fontWeight: 'bold'
            }
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
                text: '%'
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
            text: '<?php if($kaliDa > $TkaliDa) echo 'TERCAPAI'; else echo 'BELUM TERCAPAI' ?>',
			style: {
                color: '#FF0000',
                fontSize: '16px',
				fontWeight: 'bold'
            }
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
                text: 'kali'
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
                valueSuffix: 'kali'
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
            text: '<?php if($persenDa > $TpersenDa) echo 'TERCAPAI'; else echo 'BELUM TERCAPAI' ?>',
			style: {
                color: '#FF0000',
                fontSize: '16px',
				fontWeight: 'bold'
            }
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
                text: '%'
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
            text: '<?php if($kali1Adum > $Tkali1Adum) echo 'TERCAPAI'; else echo 'BELUM TERCAPAI' ?>',
			style: {
                color: '#FF0000',
                fontSize: '16px',
				fontWeight: 'bold'
            }
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
                text: 'kali'
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
                valueSuffix: 'kali'
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
            text: '<?php if($kali2Adum > $Tkali2Adum) echo 'TERCAPAI'; else echo 'BELUM TERCAPAI' ?>',
			style: {
                color: '#FF0000',
                fontSize: '16px',
				fontWeight: 'bold'
            }
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
                text: 'kali'
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
                valueSuffix: 'kali'
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
	
                
        <!--#region Bullet Navigator Skin Begin -->
        <!-- Help: http://www.jssor.com/development/slider-with-bullet-navigator-jquery.html -->
        <style>
            /* jssor slider bullet navigator skin 21 css */
            /*
            .jssorb21 div           (normal)
            .jssorb21 div:hover     (normal mouseover)
            .jssorb21 .av           (active)
            .jssorb21 .av:hover     (active mouseover)
            .jssorb21 .dn           (mousedown)
            */
            .jssorb21 {
                position: absolute;
            }
            .jssorb21 div, .jssorb21 div:hover, .jssorb21 .av {
                position: absolute;
                /* size of bullet elment */
                width: 19px;
                height: 19px;
                text-align: center;
                line-height: 19px;
                color: white;
                font-size: 12px;
                background: url(<?php echo base_url()?>assets/img/b10.png) no-repeat;
                overflow: hidden;
                cursor: pointer;
            }
            .jssorb21 div { background-position: -5px -5px; }
            .jssorb21 div:hover, .jssorb21 .av:hover { background-position: -35px -5px; }
            .jssorb21 .av { background-position: -65px -5px; }
            .jssorb21 .dn, .jssorb21 .dn:hover { background-position: -95px -5px; }
        </style>
        <!-- bullet navigator container -->
        <div u="navigator" class="jssorb21" style="bottom: 26px; right: 6px;">
            <!-- bullet navigator item prototype -->
            <div u="prototype"></div>
        </div>
        <!--#endregion Bullet Navigator Skin End -->
        
        <!--#region Arrow Navigator Skin Begin -->
        <!-- Help: http://www.jssor.com/development/slider-with-arrow-navigator-jquery.html -->
        <style>
            /* jssor slider arrow navigator skin 21 css */
            /*
            .jssora21l                  (normal)
            .jssora21r                  (normal)
            .jssora21l:hover            (normal mouseover)
            .jssora21r:hover            (normal mouseover)
            .jssora21l.jssora21ldn      (mousedown)
            .jssora21r.jssora21rdn      (mousedown)
            */
            .jssora21l, .jssora21r {
                display: block;
                position: absolute;
                /* size of arrow element */
                width: 55px;
                height: 55px;
                cursor: pointer;
                background: url(<?php echo base_url()?>assets/img/a21.png) center center no-repeat;
                overflow: hidden;
            }
            .jssora21l { background-position: -3px -33px; }
            .jssora21r { background-position: -63px -33px; }
            .jssora21l:hover { background-position: -123px -33px; }
            .jssora21r:hover { background-position: -183px -33px; }
            .jssora21l.jssora21ldn { background-position: -243px -33px; }
            .jssora21r.jssora21rdn { background-position: -303px -33px; }
        </style>
        <!-- Arrow Left -->
        <span u="arrowleft" class="jssora21l" style="top: 123px; left: 8px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora21r" style="top: 123px; right: 8px;">
        </span>
        <!--#endregion Arrow Navigator Skin End -->
        <a style="display: none" href="http://www.jssor.com">Bootstrap Slider</a>
    </div>
	<footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2015 FILKOM-UB developer. All Rights Reserved.
                </div>
                
            </div>
        </div>
    </footer><!--/#footer-->
	
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

    <!-- Jssor Slider End -->
</body>
</html>