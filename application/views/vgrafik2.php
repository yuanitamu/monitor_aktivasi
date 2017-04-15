		<script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
		<style type="text/css"> ${demo.css}	</style>
		<script type="text/javascript">
$(function () {

    $('#container').highcharts({

        chart: {
            type: 'gauge',
            plotBackgroundColor: null,
            plotBackgroundImage: null,
            plotBorderWidth: 0,
            plotShadow: false
        },

        title: {
            text: 'Speedometer'
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
                from: 85,
                to: 100,
                color: '#00DD00' // green
            /*}, {
                from: 50,
                to: 85,
                color: '#DDDF0D' // yellow*/
            }, {
                from: 0,
                to: 85,
                color: '#EE0000' // red
            }]
        },

        series: [
		<?php
			mysqli_connect("localhost","root","")or die("Could not connect: " . mysql_error());
			mysql_select_db("dash");
			$sql="SELECT persenPlj FROM plj ORDER BY MONTH(tglPlj) DESC LIMIT 1";
			$rs=mysql_query($sql);
			$data=array();
			if($rs){
				while ($row = mysql_fetch_array($rs)) {
					$data=$row['persenPlj'];
				}
			}
		?>
			{
            name: 'REALISASI PENYELESAIAN SO',
            data: [<?php echo $data; ?>],
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
<script src="<?php echo base_url()?>assets/js/highcharts.js"></script>
<script src="<?php echo base_url()?>assets/js/highcharts-more.js"></script>
<script src="<?php echo base_url()?>assets/js/modules/exporting.js"></script>
<div id="container" style="min-width: 250px; max-width: 260px; height: 300px; margin: 0 auto"></div>