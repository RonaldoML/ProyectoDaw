

<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
  $ar=fopen("correaarchivo.csv","r") or
    die("No se pudo abrir el archivo");
  while (!feof($ar))
  {
    $linea=fgets($ar);
    $lineasalto=nl2br($linea);
    echo $lineasalto;
  }
  fclose($ar);
  ?>
</body>
</html>