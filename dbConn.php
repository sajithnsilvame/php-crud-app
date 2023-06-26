<?php 
$serverName = "localhost";
$dbUsername = "root";
$dbPassword = null;
$dbName = "phpAssignment";

  $con = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);
  if(!$con){
    die("Connection not success " .mysqli_connect_error());
  }
  else{
    //echo "Connection established";
  }


?>