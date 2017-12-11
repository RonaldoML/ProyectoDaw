<?php
$connect= mysqli_connect("localhost", "root", "kevfalva777", "lenindb");
$query= "SELECT * FROM leninaspectos";

$result= mysqli_query($connect, $query);





          while($row= mysqli_fetch_array($result))
          {
              echo "['".$row["aspectos"]."',".$row["cantidad"]."],";
          }

          ?>