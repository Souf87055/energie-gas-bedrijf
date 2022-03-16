<?php


   session_start();
   
   if(session_destroy()) {
    echo '<a href="login.html">Login</a>';
   }
?>