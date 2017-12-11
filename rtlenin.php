<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Análisis gráfico estadístico de ambos personajes políticos</title>

    <!-- Bootstrap core CSS -->
    <link href="../../../../dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">
  <script type="text/javascript" src="http://gc.kis.v2.scr.kaspersky-labs.com/0B5EE703-22B1-334F-B44C-E2D19CBB303E/main.js" charset="UTF-8"></script></head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#"> <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#"></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>



    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">

      <div class="container">

        <h1 class="display-3">Lenin vs Correa</h1>
        <p>Resultado del análisis en relacion al apoyo que reciben en redes sociales.</p>
        <br /><br />

        
        <img class="" src="img/leninvscorrea.jpg" image" style="position: absolute; top: 70px; left:880px; width: 300px;height: 180px; " style="width: 50px;height: 10px;">
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <?php
      $connect= mysqli_connect("localhost", "root", "kevfalva777", "politicadb");
      $query= "SELECT * FROM rt_lenin";
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

          
          
          <div id="piechart"  style="position: absolute; top: 2px; left:210px; width: 900px; height: 550px;"></div>
          <p><a class="btn btn-warning" href="likeslenin.php" style="position: absolute; top: 180px; left:0px; width: 170px; height: 50px; "role="button">LENIN GRAFICA &raquo;</a></p>
          <p><a class="btn btn-secondary" href="likescorrea.php" style="position: absolute; top: 300px; left:0px; width: 170px;height: 50px; "role="button">CORREA GRAFICA &raquo;</a></p>

          <a href="panorama.html"><img src="img/atras.png" style="position: absolute; top: 440px; left:40px; width: 90px; height: 50px;"></a>
        </div><!-- /.col-lg-4 -->
   
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>
      

      <footer>
        <p style="position: absolute; top: 870px; left:80px;">&copy; Twitter Encuesta 2017</p>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery.min.js"><\/script>')</script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>