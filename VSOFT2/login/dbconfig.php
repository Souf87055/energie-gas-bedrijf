<?php
    $email = $_POST['email'];
    $wachtwoord = $_POST['wachtwoord'];

    //database connectie
  $hostName = "localhost";
  $userName = "87055";
  $password = "J1Souf010";
  $dbName = "beroepscollective";

  //database connectie
$con = mysqli_connect($hostName, $userName, $password, $dbName);

if(mysqli_connect_errno()){
    echo "Failed to connect";
    exit();
}

?>