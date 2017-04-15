<html>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url()?>assets/js/highcharts.js"></script>
<script src="<?php echo base_url()?>assets/js/exporting.js"></script>

	<!-- BOOTSTRAP STYLES-->
    <link href="<?php echo base_url()?>assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="<?php echo base_url()?>assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->

        <!-- CUSTOM STYLES-->
    <link href="<?php echo base_url()?>assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='<?php echo base_url()?>http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
       <script src="<?php echo base_url()?>assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?php echo base_url()?>assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->

      <!-- CUSTOM SCRIPTS -->
	


<?php
 
mysql_connect("localhost","root","");
mysql_select_db("dash");
 
?>
 

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Grafik Pencapaian Aktivasi Jatim</title>
 
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
                text: '<b>Grafik Pencapaian Aktivasi Jatim</b>',
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
            $sql   = "SELECT * FROM daftarso";
            $query = mysql_query( $sql );
            while( $ret = mysql_fetch_array( $query ) ){
               $idSO= $ret['idSO'];
               $nama = $ret['jenisSO'];
                  $sql_   = "SELECT * FROM statuso WHERE idSO='$idSO'";
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
    </head>

<div id="page-wrapper" >
<div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>What's New</h2>   
                        <h5>Informasi Terbaru</h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row"> 
                    
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                             How's Today...
                        </div>

                        <div class="panel-body">
<div id="container" style="width: 800px; height: 400px; margin: 0 auto"></div>
<div align="right"><a href=""><button class="btn btn-primary"><i class="fa fa-edit"></i></button>
</div>

</div>
</div>

 
</html>
