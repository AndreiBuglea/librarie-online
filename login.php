<?php
session_start();
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  header("location: index.php");
  exit;
}
require_once "config.php" ;
$email = $password = "";
$email_err = $password_err = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    
    if(empty(trim($_POST["email"]))){
        $email_err = "Email is missing.";
    } else{
        $email = trim($_POST["email"]);
    }
    
    
    if(empty(trim($_POST["password"]))){
        $password_err = "Password is missing.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    
    if(empty($email_err) && empty($password_err)){
        
        $sql = "SELECT id, email, password FROM users WHERE email = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            
            
            $param_email = $email;
            
            
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                   
                    mysqli_stmt_bind_result($stmt, $id, $email, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            
                            session_start();
                            
                            
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["email"] = $email;                            
                            
                            
                            header("location: index.php");
                        } else{
                            
                            $password_err = "The password is invalid.";
                        }
                    }
                } else{
                    
                    $email_err = "There are no accounts matching this email.";
                }
            } else{
                echo "Oops! Something didn't work. Please try later.";
            }

            mysqli_stmt_close($stmt);
        }
    }
    mysqli_close($link);
   //header("location: index.php");
    setcookie("name", $id , time() + 3600 ) ;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="plugin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
</head>
<body>
    <div class="center">
    <div class="mb-1 ">
    <center><img class="logo" src="img/logo-bigger.png" alt="" ></center>
    </div>
        <div class="wrapper">
        <h2>Login</h2>
        <p>Enter credentials for login:</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                <label>Email</label>
                <input type="text" name="email" class="form-control" value="<?php echo $email; ?>">
                <span class="help-block"><?php echo $email_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            <p>You don't have an account?<a href="registration.php"> Register now!</a>.</p>
        </form>
    </div>
        </div>
</body>
</html>