<?php
 require 'dbconfig.php';
 include 'session.php';

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);




if(isset($_POST['submit'])){
    if(!empty($_POST['klant1Grafiek']) && !empty($_POST['klant2Grafiek'])) {
        $selectedString = $_POST['klant1Grafiek'];
        $selected= intval( $selectedString  );
        $klantid = 2;
        $stmt = $con->prepare("SELECT id, klantNummer, gasVerbruik, energieVerbruik, jaar, maand FROM data where klantNummer = ? AND jaar = ?");
        $stmt->bind_param("ii", $id,  $selected);
        $stmt->execute();
        $result = $stmt->get_result();
    


        $gasverbruik = "[";
        $energieverbruik = "[";
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                //var_dump($row);
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
        
         echo "<script>gasdata = " .$gasverbruik. "</script>";
         echo "<script>energiedata = " .$energieverbruik. "</script>";


        echo "<script>gasdata2 = " .$gasverbruik. "</script>";
         echo "<script>energiedata2 = " .$energieverbruik. "</script>";


         echo "<script>gasdata3 = " .$gasverbruik. "</script>";
         echo "<script>energiedata3 = " .$energieverbruik. "</script>";
    
    //////////

        $selectedString = $_POST['klant2Grafiek'];
        $selected= intval( $selectedString  );
        $klantid = 1;
        $stmt = $con->prepare("SELECT id, klantNummer, gasVerbruik, energieVerbruik, jaar, maand FROM data where klantNummer = ? AND jaar = ?");
        $stmt->bind_param("ii", $klantid,  $selected);
        $stmt->execute();
        $result = $stmt->get_result();

     
      
      
        $gasverbruik2 = "[";
        $energieverbruik2 = "[";
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                //var_dump($row);
                $gasverbruik2 .= $row["gasVerbruik"] . ",";
                $energieverbruik2 .= $row["energieVerbruik"] . ",";
              }
        } else {
            echo "0 resultaten";
        }
        
        
        $con->close();
    
        $gasverbruik2 = rtrim($gasverbruik2 , ",");
        $gasverbruik2 .= "]";
        
        $energieverbruik2 = rtrim($energieverbruik2 , ",");
        $energieverbruik2 .= "]";
        
        echo "<script>gasdata = " .$gasverbruik. "</script>";
        echo "<script>energiedata = " .$energieverbruik. "</script>";
    
    
       echo "<script>gasdata2 = " .$gasverbruik2. "</script>";
       echo "<script>energiedata2 = " .$energieverbruik2. "</script>";
    
    
       echo "<script>gasdata3 = " .$gasverbruik2. "</script>";
       echo "<script>energiedata3 = " .$energieverbruik2. "</script>";
     
    } else {
        echo 'Niet het jaar geselecteerd nog';
    }
}
    
    



?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <link rel="stylesheet" href="grafiek.css">
    <script src="grafiek.js" defer></script>
    <script src="vergelijk.js" defer></script>
    <title>Grafiek Vergelijking </title>
</head>
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
              <a class="nav-link" id="logoutLink" href="../login/logout.php">Log uit</a>
            </li>
          </ul>
          </div>
        </div>
      </nav>
    </header>
<body>
    <form action="" method="POST">
        <label for="klant2Grafiek">Klant 2, Kies het jaar dat je wilt zien uit jouw grafiek:</label>

        <select name="klant2Grafiek">
            <?php
            for ($j = 2019; $j <= 2021; $j++){
                if ($j == intval($_POST['klant2Grafiek'])){
                    echo "<option value='$j' selected>$j</option>";
                }
            else {
                    echo "<option value='$j'>$j</option>";
                }
            }
            ?>
        
        </select>
  

        <label for="klant1Grafiek">Klant 2, Kies het jaar dat je wilt zien uit Klant 1 zijn grafiek:</label>
        <select name="klant1Grafiek">
            <?php
            for ($k = 2019; $k <= 2021; $k++){
                if ($k == intval($_POST['klant1Grafiek'])){
                    echo "<option value='$k' selected>$k</option>";
                }
            else {
                    echo "<option value='$k'>$k</option>";
                }
            }
            ?>
        
        </select>
        <input type="submit" name="submit">
    </form>

    <canvas id="myChart" style="width:100%;max-width:600px"></canvas>

    <canvas id="myChart2" style="width:100%;max-width:600px"></canvas>


</body>
</html>