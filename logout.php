<?php
session_start();

unset($_SESSION["firstname"]);
header("Location:amazone_login.php");
?>