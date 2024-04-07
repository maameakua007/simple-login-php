<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
include('../config/dbcon.php');

   if(isset($_POST['register-btn']))
   {
       $username = mysqli_real_escape_string($con,$_POST['username']);
       $email = mysqli_real_escape_string($con,$_POST['email']);
       $password = mysqli_real_escape_string($con,$_POST['password']);
       $cpassword = mysqli_real_escape_string($con,$_POST['cpassword']);

       // Check if email is already registered
       $check_email_query = "SELECT email FROM admins WHERE email='$email'";
       $check_email_query_run = mysqli_query($con, $check_email_query);

       if(mysqli_num_rows($check_email_query_run) > 0)
       {
         $_SESSION['message'] = "Email already registered";
         header('Location:  ../admin-register.php');
       }
       else
       {
         if($password == $cpassword)
         {
             // insert data
             $insert_query = "INSERT INTO admins(username,email,password) VALUES('$username','$email','$password')";
  
             $insert_query_run = mysqli_query($con, $insert_query);
  
             if($insert_query_run)
             {
                $_SESSION['message'] = "Registered Successfully";
                header('Location: ../admin-register-login.php');
             }
             else
             {
                $_SESSION['message'] = "Failed To Register, Something Went Wrong";
                header('Location: ../admin-register-login.php');
             }
         }
         else
         {
            $_SESSION['message'] = "Passwords do not match";
            header('Location:  ../admin-register-login.php');
         }
      
       }

   


   }
   else if(isset($_POST['login-btn']))
   {
      $email = mysqli_real_escape_string($con,$_POST['email']);
      $password = mysqli_real_escape_string($con,$_POST['password']);

      $login_query = "SELECT * FROM admins WHERE email='$email' AND password='$password' ";
      $login_query_run = mysqli_query($con, $login_query);

      if(mysqli_num_rows($login_query_run) > 0)
      { 
         $_SESSION['auth'] = true;

         $admindata = mysqli_fetch_array($login_query_run);
         $adminname = $admindata['username'];
         $adminemail = $admindata['email'];
         $role_as = $admindata['role_as'];


         $_SESSION['auth_admin'] = [
            'username' => $adminname,
            'email' => $adminemail

         ];

         $_SESSION['role_as'] = $role_as;

         if($role_as == 1)
         {
            $_SESSION['message'] = "Logged In As Sales Manager";
            header('Location: ../admin.php');
         }
         else
         {
            $_SESSION['message'] = "Logged In As Sales Person";
            header('Location: ../admin.php');
         }

      }
      else
      {
         $_SESSION['message'] = "Invalid Credentials";
         header('Location: ../admin-register-login.php');
      }


   }
?>