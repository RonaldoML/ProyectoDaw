<?php
$connect= mysqli_connect("localhost", "root", "kevfalva777", "politicadb");
$query= "SELECT * FROM suma_likeslenin";
$result= mysqli_query($connect, $query);
?>

<html>
  <head>
  <title>ANALISIS DE LENIN Y CORREA</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['mes', 'contador'],
         /* ['Work',     11],
          ['Eat',      2],
          ['Commute',  2],
          ['Watch TV', 2],
          ['Sleep',    7]*/
          <?php
          while($row= mysqli_fetch_array($result))
          {
              echo "['".$row["mes"]."' , ".$row["contador"]."],";
          }
          ?>


        ]);

        var options = {
          title: 'COMPARACION DE APOYO EN TWITTER'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>

  <div class="col-lg-4">

          
          
          <div id="piechart"  style="position: absolute; top: 100px; left:300px; width: 900px; height: 550px;""></div>
          <p><a class="btn btn-warning" href="grafico1.php" style="position: absolute; top: 250px; left:80px; width: 170px; height: 50px; "role="button">LENIN GRAFICA &raquo;</a></p>
          <p><a class="btn btn-secondary" href="grafico.php" style="position: absolute; top: 370px; left:80px; width: 170px;height: 50px; "role="button">CORREA GRAFICA &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
   
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>