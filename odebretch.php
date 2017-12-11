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
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Paises','Odebretch', 'Corrupcion', 'Millones'],
          //['Ecuador', 1000, 400, 200],
          /*['Brasil', 1170, 460, 250],
          ['Venezuela', 660, 1120, 300],
          ['Argentina', 1030, 540, 350]*/

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
          chart: {
            title: 'Frecuencias por país del caso Odebretch en el año 2017',
            subtitle: 'Odebretch, Corrupcion y millones: Paises de la región ultimos meses',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>
  <body>
    <div id="columnchart_material" style="width: 800px; height: 500px;"></div>
  </body>
</html>