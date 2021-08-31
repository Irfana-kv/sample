<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title><!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<?php
session_start();
 $message="";
if(count($_POST)>0) {
    include_once'database.php';
    $result = mysqli_query($conn,"SELECT * FROM users WHERE firstname='" . $_POST["firstname"] . "'");
   $password=$_POST["password"];
    // $row  = mysqli_fetch_array($result);
    // if(is_array($row)) {
    //     // $_SESSION["id"] = $row['id'];
    //     $_SESSION["firstname"] = $row['firstname'];
    //     } else {
    //      $message = "Invalid Username or Password!";
    //     }
    // }
    // if(isset($_SESSION["firstname"])) {
    //     header("Location:home.php");
    //     }
    if(mysqli_num_rows($result)>0){
        $row= mysqli_fetch_array($result);
        if(password_verify($password,$row['password'])){
           $_SESSION["firstname"] =$row['firstname'];
           $_SESSION["email"] =$row['email'];
           $_SESSION["mobilenumber"] =$row['mobilenumber'];

         } else {
            $message = "Invalid Username or Password!";
               }
    }

     if(isset($_SESSION["firstname"])) {
              header("Location:home.php");
           }
        }  
    ?>

    <div class=" d-flex justify-content-center">
        <form method="post" name="amazone_login">
            <div class="container border mt-5" style="width: 350px;">
                <div class="row">
                    <div class="col-md-12">
                       <center><img src="download.png" height="150" width="100"></center>
                        <h2>Sign in</h2><br>
                        <div class="form-group"><?php if($message!="") { echo $message; } ?>
                            <label for="firstname">firstname</label><br>
                            <input type="text"  class="form-control"name="firstname">
                        </div>
                        <div class="form-group">
                            <label for="password">password</label><br>
                            <input type="password" name="password" class="form-control">
                        </div>
                         <div class="mb-3">
                        <a  class="btn btn-secondary" href="amazone_create.php">create new account</a>

                        <button type="submit"class="btn btn-secondary ml-5"name="submit">submit</button> 
                         </div>
                    </div>
                </div>
            </div>

        </form>
    </div>
    
</body>
</html>