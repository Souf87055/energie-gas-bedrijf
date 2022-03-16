<?php
    require 'dbconfig.php';


    $klantNummer = $_POST['klantNummer'];
    echo($klantNummer);
    $jaar = $_POST['jaar'];
    echo($jaar);
    $maand = $_POST['maand'];
    echo($maand);
    $gasVerbruik = $_POST['gasVerbruik'];
    echo($gasVerbruik);
    $energieVerbruik = $_POST['energieVerbruik'];
    echo($energieVerbruik);
    
    
    if (empty($id)) {
      echo "Name is empty";
    } else {
      echo $id;
    }
    
    $sql = "INSERT INTO `data`(`klantNummer`, `jaar`, `maand`, `gasVerbruik`, `energieVerbruik`) 
    VALUES ('$klantNummer', '$jaar', '$maand', '$gasVerbruik','$energieVerbruik')";

if ($con->query($sql) === TRUE) {
  echo "New record created successfully";
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
?>