<?php
include("conexion.php");
?>


<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Highcharts Example</title>

		<style type="text/css">
#container {
	min-width: 310px;
	max-width: 800px;
	height: 400px;
	margin: 0 auto
}
		</style>
	</head>
	<body>
<script src="../../code/highcharts.js"></script>
<script src="../../code/modules/exporting.js"></script>

<div id="container"></div>



		<script type="text/javascript">

Highcharts.chart('container', {

    title: {
        text: 'LENIN MORENO VS RAFAEL CORREA'
    },

    subtitle: {
        text: 'Source: www.twitter.com'
    },

    xAxis: {
      //categories: ['Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto',]
       /categories: [ 
                <?php
               $sql= "SELECT * FROM likeslenin";
                $result= mysqli_query($conexion,$sql);
                while($rows=mysqli_fetch_array($result))
                {
                    ?>
                        <?php echo $rows["mes"] ?>,

                    <?php

                }
                ?>
                ]
    

    },


    yAxis: {
        title: {
            text: 'Number of Employees'
        }
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle'
    },

   /plotOptions: {
        series: {
            //pointStart: 2010
            categories: [ 
                <?php
                $sql= "SELECT * FROM suma_likeslenin";
                $result= mysqli_query($conexion,$sql);
                while($rowss=mysqli_fetch_array($result))
                {
                    ?>
                        <?php echo $rows["mes"] ?>,

                    <?php

                }
                ?>
                ]
        }
    },

    series: [{
        name: 'Lenin Moreno',
        //data: [43934, 52503, 57177, 69658, 97031, 119931, 137133, 154175]
        data: 
        [
          <?php
                $sql= "SELECT * FROM suma_likeslenin";
                $result= mysqli_query($conexion,$sql);
                while($registros=mysqli_fetch_array($result))
                    //echo "$registros[contador]"<br>;
                    //echo "$registros[mes]"<br>;

                {
                    ?>
                        <?php echo $registros["contador"] ?>,

                    <?php

                }
                ?>

        ]
    }, {
        name: 'Manufacturing',
        data: [24916, 24064, 29742, 29851, 32490, 30282, 38121, 40434]
    }]

});
		</script>
	</body>
</html>
