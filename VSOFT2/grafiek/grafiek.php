<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
include 'session.php';
require 'dbconfig.php';

//   $klantNummer = $_POST['klantNummer'];
//   $gasVerbruik = $_POST['gasVerbruik'];
//   $energieVerbruik = $_POST['energieVerbruik'];
//   $jaar = $_POST['jaar'];
//   $maand = $_POST['maand'];

$stmt = $con->prepare("SELECT id, klantNummer, gasVerbruik, energieVerbruik, jaar, maand FROM data where klantNummer = ? AND jaar = 2021");
$stmt->bind_param("s", $id);
$stmt->execute();
$result = $stmt->get_result();


$gasverbruik = "[";
$energieverbruik = "[";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
        $gasverbruik .= $row["gasVerbruik"] . ",";
        $energieverbruik .= $row["energieVerbruik"] . ",";
      }
} else {
    echo "0 resultaten";
}



$gasverbruik = rtrim($gasverbruik , ",");
$gasverbruik .= "]";

$energieverbruik = rtrim($energieverbruik , ",");
$energieverbruik .= "]";

echo "<script>gasdata3 = " .$gasverbruik. "</script>";
echo "<script>energiedata3 = " .$energieverbruik. "</script>";

 

  $stmt = $con->prepare("SELECT id, klantNummer, gasVerbruik, energieVerbruik, jaar, maand FROM data where klantNummer = ? AND jaar = 2020");
  $stmt->bind_param("s", $id);
  $stmt->execute();
  $result = $stmt->get_result();

  $gasverbruik = "[";
  $energieverbruik = "[";
  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
          
          $gasverbruik .= $row["gasVerbruik"] . ",";
          $energieverbruik .= $row["energieVerbruik"] . ",";
        }
  } else {
      echo "0 resultaten";
  }
  
  

  $gasverbruik = rtrim($gasverbruik , ",");
  $gasverbruik .= "]";

  $energieverbruik = rtrim($energieverbruik , ",");
  $energieverbruik .= "]";
 
echo "<script>gasdata2 = " .$gasverbruik. "</script>";
echo "<script>energiedata2 = " .$energieverbruik. "</script>";


$stmt = $con->prepare("SELECT id, klantNummer, gasVerbruik, energieVerbruik, jaar, maand FROM data where klantNummer = ? AND jaar = 2019");
$stmt->bind_param("s", $id);
$stmt->execute();
$result = $stmt->get_result();

$gasverbruik = "[";
$energieverbruik = "[";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
        $gasverbruik .= $row["gasVerbruik"] . ",";
        $energieverbruik .= $row["energieVerbruik"] . ",";
      }
} else {
    echo "0 resultaten";
}

$con->close();

$gasverbruik = rtrim($gasverbruik , ",");
$gasverbruik .= "]";

$energieverbruik = rtrim($energieverbruik , ",");
$energieverbruik .= "]";

echo "<script>gasdata = " .$gasverbruik. "</script>";
echo "<script>energiedata = " .$energieverbruik. "</script>";




?>

<html>
   
   <head>
    <title>Welcome </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <link rel="stylesheet" href="grafiek.css">
    <script rel="stylesheet" src="grafiek.js" defer></script>
    <title>Energie Verbruik & Besparing</title>
   </head>
   
   <body>
    
      
      <header>
     <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <img id="logo" src="../images/logo.png" alt="">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../login/login.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="vergelijk.php">Grafiek Statistiek</a>
              </li>
            <li class="nav-item">
              <a class="nav-link" id="logoutLink" href="../login/logout.php">Log uit</a>
            </li>
          </ul>
          </div>
        </div>
      </nav>
    </header>
 
 
    <p>Groen = energie verbruik</p>
    <p>Rood = gas verbruik</p>
    <p>Jaar: 2019</p>
    <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
    <p>Jaar: 2020</p>
    <canvas id="myChart2" style="width:100%;max-width:600px"></canvas>
    <p>Jaar: 2021</p>
    <canvas id="myChart3" style="width:100%;max-width:600px"></canvas>
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
     
   </body>
   
</html>