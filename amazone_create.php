<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
<style>
    .error{
        color:#ff0000;
    }
</style>
</head>

<body>
    

    <div class="d-flex justify-content-center">
        <form action="insert.php" method="post">
            <div class="container border mt-5" style="width: 550px;">
                <div class="row">
                    <div class="col-md-12">
                        <center><img src="download.png" height="150" width="100"></center>
                        <h2>Create Account</h2>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Enter first name</label>
                                    <input type="text" name="firstname"class="form-control input-group-lg reg_name" required>
                                    
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Enter last name</label>
                                    <input type="text" name="lastname" class="form-control input-group-lg reg_name" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Mobile number</label>
                                    <input type="number" name="mobilenumber" class="form-control" required >
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="email"class="form-control" required>
                                </div>
                            </div>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control"required>
                            </div>
                            <div class="form-group">
                                <label>Date of Birth</label>
                                <input type="date" name="dateofbirth" class="form-control"required>
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <textarea name="address" id="" cols="30" rows="5" class="form-control" required></textarea>
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