<?php
 session_start();

//ini_set('error_reporting', E_ALL);
//ini_set('display_errors', 1);

 require 'dbconfig.php';
 //include 'invoer-admin/sessie.php';

    $email = $_POST['email'];
    $wachtwoord = $_POST['wachtwoord'];

    $stmt = $con->prepare("select * from registratie where email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if($stmt_result->num_rows > 0){
      if($email == "admin@gmail.com" && $wachtwoord == "Admin"){
        header("Location: ../invoer-admin/invoer.html");
      }

    
        $data = $stmt_result->fetch_assoc();
        if($data['wachtwoord'] === $wachtwoord){
            $id = $data["id"];
            $_SESSION['id'] = $id;
        } else {
          header("Location: https://87055.ict-lab.nl/beroeps2/VSOFT2/login/login.html");
          exit();
        }
    }
   
 ?>

<html>
   
   <head>
    <title>Welcome </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
    <title>Energie Verbruik & Besparing</title>
   </head>
   
   <body>
    
      
      <header>
     <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <img id="logo" src="logo.png" alt="">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../index.html">Home</a>
              </li>
             
              <li class="nav-item">
                <a class="nav-link" href="../grafiek/grafiek.php">Grafiek</a>
              </li>
            <li class="nav-item">
              <a class="nav-link" id="logoutLink" href="logout.php">Log uit</a>
            </li>
          </ul>
          </div>
        </div>
      </nav>
    </header>

    <div class="infobackground"> <p>Waarom mijn gas en energie bekijken en vergelijken?
      Betaal minder voor je energierekening
      Als je altijd bij dezelfde energieleverancier blijft zitten, loop je ieder jaar weer honderden euro’s mis. Stap vandaag via onze energievergelijker over en bespaar op je energierekening.</p></div>
      <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>