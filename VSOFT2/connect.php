<?php

require '/registratie/dbconfig.php';

  $voorNaam = $_POST['voorNaam'];
  $achterNaam = $_POST['achterNaam'];
  $geslacht = $_POST['geslacht'];
  $email = $_POST['email'];
  $wachtwoord = $_POST['wachtwoord'];

 
  
//data in de tabel voegen
$sql ="INSERT INTO `registratie`(voorNaam, achterNaam, geslacht, email, wachtwoord)
VALUES('{$voorNaam}', '{$achterNaam}', '{$geslacht}', '{$email}', '{$wachtwoord}')";

if($con->query($sql) === TRUE) {
    echo "Data ingevoegd";
}
else{
    echo "Error:".$sql."<br>".$conn->error;
}


 


?>