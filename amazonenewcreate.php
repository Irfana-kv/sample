<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
    .error{
        color : #FF0000;
    }
</style>
</head>

<body>
<?php
include_once'database.php';
$fnameErr="";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["firstname"])){
        $fnameErr="first name is required";
    }else{
        $firstname=checkdata($_POST["firstname"]);
        if(!preg_match("/^[a-zA-Z-' ]*$/",$firstname)){
            $fnameErr="only letters and space is allowed";
        }
        
    }
    $lastname=checkdata($_POST['lastname']);
    $mobilenumber=$_POST['mobilenumber'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $dateofbirth=$_POST['dateofbirth'];
    $address=$_POST['address'];
    
    $sql="INSERT INTO users(firstname,lastname,mobilenumber,email,password,dateofbirth,address)
    VALUES('$firstname','$lastname','$mobilenumber','$email','$password','$dateofbirth','$address')";
    if(mysqli_query($conn,$sql)){
        
        header("Location: amazone_create.php");
    }else{
         echo"error".mysqli_error($conn);
    }

}
function checkdata(){
    $data=trim($data);
    $data=stripcslashes($data);
    $data=htmlspecialchars($data);
    return $data;
    
}
?>
    

    <div class="d-flex justify-content-center">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <div class="container border mt-5" style="width: 550px;">
                <div class="row">
                    <div class="col-md-12">
                        <center><img src="download.png" height="150" width="100"></center>
                        <h2>Create Account</h2>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Enter first name</label>
                                    <span class="error">*<?php echo $fnameErr;?></span>
                                    <input type="text" name="firstname"class="form-control input-group-lg reg_name">
                                   
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Enter last name</label>
                                    <input type="text" name="lastname" class="form-control input-group-lg reg_name">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Mobile number</label>
                                    <input type="number" name="mobilenumber" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="email"class="form-control" >
                                </div>
                            </div>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Date of Birth</label>
                                <input type="date" name="dateofbirth" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <textarea name="address" id="" cols="30" rows="5" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block"name="submit">submit</button>
                            </div>



                        </div>
                    </div>
        </form>
    </div>

</body>
</html>