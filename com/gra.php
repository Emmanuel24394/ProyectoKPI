
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Highcharts Example</title>

		<style type="text/css">
        *{
     
     background-image: url("img/fondo.jpg");
} 

#container {
  max-width: 800px;
  height: 400px;
  margin: 1em auto;
    
    
   
} 


		</style>
	</head>
	<body>

<script src="code/highcharts.js"></script>
<script src="code/modules/histogram-bellcurve.js"></script>

<div id="container"></div> 



		<script type="text/javascript">
var data = [<?php include "formula.php" ?>];

Highcharts.chart('container', {

    title: {
        text: '<?php include "nom.php" ?>'
    },

    xAxis: [{
        title: {
            text: 'Numero De Datos'
        },
        alignTicks: false
    }, {
        title: {
            text: 'Media'
        },
        alignTicks: false,
        opposite: true
    }],

    yAxis: [{
        title: { text: 'Limite De Datos' }
    }, {
        title: { text: 'Desviacion Estandar' },
        opposite: true
    }],

    series: [{
        name: 'Desviacion Estandar',
        type: 'bellcurve',
        xAxis: 1,
        yAxis: 1,
        baseSeries: 1,
        zIndex: -1
    }, {
        name: 'Datos',
        type: 'bellcurve',
        type: 'scatter',
        data: data,
        marker: {
            radius: 1.5
        }
    }]
});
		</script>
	</body>
</html>
