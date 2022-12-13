<?php
// Include config file
session_start();
require_once "config.php";
 
// Define variables and initialize with empty values
$email = $password = $cpassword = "";
$email_err = $password_err = $cpassword_err = "";
$first_name= $_POST["first_name"];
$last_name= $_POST["last_name"];
$city= $_POST["city"];
$phone_number= $_POST["phone_number"];
$address= $_POST["address"];
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter a email.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE email = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            
            // Set parameters
            $param_email = trim($_POST["email"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $email_err = "This email is already taken.";
                } else{
                    $email = trim($_POST["email"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["cpassword"]))){
        $cpassword_err = "Please confirm password.";     
    } else{
        $cpassword = trim($_POST["cpassword"]);
        if(empty($password_err) && ($password != $cpassword)){
            $cpassword_err = "password did not match.";
        }
    }
    
    if(empty($email_err)){
        if(empty($password_err)){
            if(empty($cpassword_err)){
                $param_email = $email;
                $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash

        $sql = "INSERT INTO users (email, first_name, last_name, city, address, phone_number, password) VALUES ('$param_email', '$first_name', '$last_name', '$city', '$address', '$phone_number', '$param_password')";
         
        if($stmt = mysqli_prepare($link, $sql)){
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
            }else{
                $_SESSION['err'] = $cpassword_err;
                header("location: registration.php");
            }
            
        }else{
            $_SESSION['err'] = $password_err;
            header("location: registration.php");
        }
    }else{
        $_SESSION['err'] = $email_err;
        header("location: registration.php");
    }
    mysqli_close($link);
}
?>