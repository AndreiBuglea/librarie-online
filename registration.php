<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>EquiLibri :: Registration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link href="css/login.css" rel="stylesheet">
</head>
<body>
    <div class="center">
    <div class="mb-1 ">
    <center><img class="logo" src="img/logo-bigger.png" alt="" ></center>
    </div>
    <div class="wrapper-register">
        <h2>Registration</h2>
        <p>Fill out these fields to register:</p>
        <?php if(isset($_SESSION['err'])){ ?>
        <p><?php echo ($_SESSION['err']) ?></p>
        <?php } ?>
        <form action="register.php" method="post">

            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control">
                <span class="help-block"></span>
            </div>    
                <div class="form-group ">
                <label>First Name</label>
                <input type="text" name="first_name" class="form-control">
                <span class="help-block"></span>
            </div>    
            <div class="form-group ">
                <label>Last Name</label>
                <input type="text" name="last_name" class="form-control" >
                <span class="help-block"></span>
            </div>    
            <div class="form-group ">
                <label>City</label>
                <input type="text" name="city" class="form-control" >
                <span class="help-block"></span>
            </div>  
                <div class="form-group ">
                <label>Address</label>
                <input type="text" name="address" class="form-control" >
                <span class="help-block"></span>
            </div>
             <div class="form-group ">
                <label>Phone Number</label>
                <input type="text" name="phone_number" class="form-control" >
                <span class="help-block"></span>
            </div>  
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="cpassword" class="form-control">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Send">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
            <p>You don't have an account? <a href="login.php"> Sign in here </a>.</p>
        </form>
    </div>    
    </div>
</body>
</html>