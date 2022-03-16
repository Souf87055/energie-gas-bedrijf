<?php 
session_start();

session_unset();
if(session_destroy()) {
    echo '<a href="../index.html">Home page</a>';
   }

