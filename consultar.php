<?php

function getSQLResultSet($Commando){

$connect= mysqli_connect("localhost", "root", "kevfalva777", "lenindb");

if ($connect->connect_errno) {
    printf("Connect failed: %sn", $connect->connect_error);
    exit();
}
if ( $connect->multi_query($Commando)) {
    return $connect->store_result();}

}

$asp=$_GET["aspectos"];
if ($resultset= getSQLResultSet("SELECT aspectos,cantidad  FROM `leninaspectos` where aspectos= '$asp'")) {
	while ($row = $resultset->fetch_array(MYSQLI_NUM)) {
		echo json_encode($row);
        }
    }
 ?>