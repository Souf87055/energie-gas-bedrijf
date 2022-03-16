<?php

session_start();

if(!isset($_SESSION['id'])){
    header("Location: https://87055.ict-lab.nl/beroeps2/VSOFT2/login/login.html");
    exit();
}
else{
    $idString = $_SESSION['id'];
    $id = intval($idString);
}
