<?php
session_start();
if(!isset($_SESSION["firstname"])){
header("Location: amazone_login.php");
exit(); }
?>