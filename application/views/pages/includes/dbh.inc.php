<?php

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "tlstoru1_tls-torun";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if(!$conn){
  die("Connection failed: ".mysqli_connect_error());
}
$conn->query('SET NAMES utf8');

 ?>
