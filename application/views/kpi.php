<html>
<script type="text/javascript" src="jquery.min.js"></script>
<script src="highcharts.js"></script>
<script src="exporting.js"></script>
<?php
 
mysql_connect("localhost","root","");
mysql_select_db("dash");
 
?>
 

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Grafik KPI Management</title>
 
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
                text: '<b>Grafik KPI Management</b>',
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
                    text: 'Persentase KPI'
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
                x: 18,
                y: 100,
                borderWidth: 0
            },
            series:             
            [
            <?php //query tiap negara lbih dulu, baru tiap negara diambil datanya, dijadikan data berjajar berdasar koma
            $sql   = "SELECT * FROM statuskpi";
            $query = mysql_query( $sql );
            while( $ret = mysql_fetch_array( $query ) ){
               $idKPI= $ret['idKPI'];
               $nama = $ret['jenisKPI'];
                  $sql_   = "SELECT * FROM datakpi WHERE idKPI='$idKPI'";
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
 
    <body>
 
<div id="container" style="width: 800px; height: 400px; margin: 0 auto "></div>
 
    </body>
</html>
