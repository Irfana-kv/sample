<?php
session_start();
?>
<html>
<head>
<title>User Login</title>
</head>
<body>

<?php
if(isset($_SESSION["firstname"]) ){
    // header("location:amazone_login.php");
    ?>
    <h1>Welcome <?php echo $_SESSION["firstname"]; ?><br></h1>
    email <?php echo $_SESSION["email"]; ?><br>
    mobile number <?php echo $_SESSION["mobilenumber"]; ?><br>
    Click here to <a href="logout.php" title="Logout">Logout.
    <?php
 }else {
 header("location:amazone_login.php");
//  echo "<h1>Please login first .</h1>";
 }
?>
    <!-- <a href="amazone_login.php">login</a> -->
</body>
</html>