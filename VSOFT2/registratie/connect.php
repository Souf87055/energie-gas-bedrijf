<?php

require 'dbconfig.php';

  $voorNaam = $_POST['voorNaam'];
  $achterNaam = $_POST['achterNaam'];
  $geslacht = $_POST['geslacht'];
  $email = $_POST['email'];
  $wachtwoord = $_POST['wachtwoord'];

 
  
//data in de tabel voegen
$sql ="INSERT INTO `registratie`(voorNaam, achterNaam, geslacht, email, wachtwoord)
VALUES('{$voorNaam}', '{$achterNaam}', '{$geslacht}', '{$email}', '{$wachtwoord}')";

if($con->query($sql) === TRUE) {
  header("Location: https://87055.ict-lab.nl/beroeps2/VSOFT2/index.html");
  exit();
}
else{
    echo "Error:".$sql."<br>".$conn->error;
}


 


?>