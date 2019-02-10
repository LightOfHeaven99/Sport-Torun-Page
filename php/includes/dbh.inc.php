<?php

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "sport-torun-page";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if(!$conn){
  die("Connection failed: ".mysqli_connect_error());
}

 ?>
