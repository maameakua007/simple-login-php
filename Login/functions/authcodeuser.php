<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
include('../config/dbcon.php');

if(isset($_POST['user-register-btn']))
{
   $username = mysqli_real_escape_string($con, $_POST['username']);
   $email = mysqli_real_escape_string($con, $_POST['email']);
   $password = mysqli_real_escape_string($con, $_POST['password']);
   $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);

   // Check if emaail is registered
   $check_email_query = "SELECT email FROM users WHERE email='$email'";
   $check_email_query_run = mysqli_query($con, $check_email_query);

   if(mysqli_num_rows($check_email_query_run) > 0)
   {
     $_SESSION['message'] = "Email already registered";
      header('Location:  ../index.php');
   }
   else
   {
     if($password == $cpassword)
     {
       // insert data 
        $insert_query = "INSERT INTO users(username,email,password) VALUES('$username','$email','$password')";
 
        $insert_query_run = mysqli_query($con, $insert_query);
 
        if($insert_query_run)
        {
          $_SESSION['message'] = "Registered Sucessfully";
          header('Location: ../index.php');
        }
        else
        {
          $_SESSION['message'] = "Failed To Register";
          header('Location: ../index.php');
        }
      }
      else
      {
          $_SESSION['message'] = "Passwords do not match";
          header('Location:  ../index.php');
      }
    
   }





}
else if(isset($_POST['user-login-btn']))
{
  $email = mysqli_real_escape_string($con,$_POST['email']);
  $password = mysqli_real_escape_string($con,$_POST['password']);

  $login_query = "SELECT * FROM users WHERE email='$email' AND password='$password' ";
  $login_query_run = mysqli_query($con, $login_query);

  if(mysqli_num_rows($login_query_run) > 0)
  {
    $_SESSION['auth_2'] = true;

    $userdata = mysqli_fetch_array($login_query_run);
    $username = $userdata['username'];
    $useremail = $userdata['email'];

    $_SESSION['auth_2_user'] = [
      'username' => $username,
      'email' => $useremail


    ];

    $_SESSION['message'] = "Welcome! Feel Free To Go Through Our Categories";
    header('Location: ../index.php');
  }
  else
  {
     
    $_SESSION['message'] = "Why Don't You Try Again We Don't Want To Lose You";
    header('Location: ../index.php');
  }
}
?>