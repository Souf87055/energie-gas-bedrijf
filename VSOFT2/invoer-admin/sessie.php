    <?php
    session_start();

    require 'dbconfig.php';
    
    $_SESSION['id'] = 7; // admin nmmr

    if(isset($_SESSION['id']) == 7){// lab
        header("location: invoer-admin/invoer.html");
        exit();

     }

     else{
        echo  "niet gelukt";
        }
  ?>