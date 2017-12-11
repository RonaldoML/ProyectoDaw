<?php
$connect= mysqli_connect("localhost", "root", "kevfalva777", "odebretch");
$query= "SELECT * FROM FrecuenciasEcuador";
$query2="SELECT * FROM FrecuenciasBrasil";
$query3= "SELECT * FROM FrecuenciasVenezuela";
$query4= "SELECT * FROM FrecuenciasArgentina";
$result= mysqli_query($connect, $query);
$result2= mysqli_query($connect, $query2);
$result3= mysqli_query($connect, $query3);
$result4= mysqli_query($connect, $query4);
?>


<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Paises', 'Odebretch', 'Corrupcion' , 'Millones'],
          /*['Ecuador',  1000,      400, 200],
          ['Brasil',  1170,      460, 300],
          ['Venezuela',  660,       1120, 1800],
          ['Argentina',  1030,      540, 890]*/

          <?php
          while($row= mysqli_fetch_array($result))
          {
              echo "['Ecuador',".$row["Odebretch"]." , ".$row["Corrupcion"]." , ".$row["Millones"]."],";
          }
           while($row= mysqli_fetch_array($result2))
          {
              echo "['Brasil',".$row["Odebretch"]." , ".$row["Corrupcion"]." , ".$row["Millones"]."],";
          }

          while($row= mysqli_fetch_array($result3))
          {
              echo "['Venezuela',".$row["Odebretch"]." , ".$row["Corrupcion"]." , ".$row["Millones"]."],";
          }

          while($row= mysqli_fetch_array($result4))
          {
              echo "['Argentina',".$row["Odebretch"]." , ".$row["Corrupcion"]." , ".$row["Millones"]."],";
          }

          ?>
        ]);

        var options = {
          title: 'ANALISIS DE AREAS',
          hAxis: {title: 'Paises',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="chart_div" style="width: 100%; height: 500px;"></div>
  </body>
</html>