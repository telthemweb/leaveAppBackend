<?php  

session_start();

unset($_SESSION['ec_number']);
session_destroy();

 header('Location: ../index.html');