<?php 
session_start();
?>
<body>
        <header>
            <!-- NAVIGATION STARTS HERE-->
                <h2 class="logo">Welcome</h2>
                <nav class="navigation">
                    <button class="btnLogin-popup">Login</button>
                </nav>
            <!--NAVIGATION ENDS HERE-->
        </header>

       
        <!--Popup message(register)-->
        <?php if(isset($_SESSION['message'])) 
                {?>
                    <div class="message" style="background-color: #ffc107; color: #000; padding: 10px; border: 1px solid #ffc107; border-radius: 4px; margin-bottom: 10px;">
                    <?= $_SESSION['message']; ?>.<strong>Kindly Refresh To Go Back</strong>
                    </div>
               <?php
                unset($_SESSION['message']);
                }
               ?>

  
                
        <div class="wrapper">
            <!--Login And SignUp-->
           <span class="icon-close"><ion-icon name="close-circle-sharp"></ion-icon></span>
            <div class="form-box login">
                <h2>Login</h2>
                <form action="functions/authcode.php" method="POST">
                    <div class="input-box">
                        <span class="icon"><ion-icon name="mail-sharp"></ion-icon></span>
                        <input type="email" name="email" required="">
                        <label>Email</label>
                    </div>

                    <div class="input-box">
                        <span class="icon"><ion-icon name="lock-closed-sharp"></ion-icon></span>
                        <input type="password" name="password" required="">
                        <label>Password</label>
                    </div>

                    <div class="remember-forgot">
                        <label><input type="checkbox">Remember me</label>
                        <a href="#">Forgot Password?</a>
                    </div>
                    <button type="submit" name="login-btn" class="btn">Login</button>
                    <div class="login-register">
                        <p>Don't Have An Account?<a href="#" class="register-link"> Register</a></p>
                    </div>

                </form>
            </div>

            <!---- Register ------>
         
            <div class="form-box register">
                <h2>Registration</h2>
                <form action="functions/authcode.php" method="POST">
                    <div class="input-box">
                        <span class="icon"><ion-icon name="people-circle-sharp"></ion-icon></span>
                        <input type="text" name="username" required="">
                        <label> Username </label>
                    </div>


                    <div class="input-box">
                        <span class="icon"><ion-icon name="mail-sharp"></ion-icon></span>
                        <input type="email" name="email" required="" >
                        <label> Email </label>
                    </div>

                    <div class="input-box">
                        <span class="icon"><ion-icon name="lock-closed-sharp"></ion-icon></span>
                        <input type="password" name="password" required="">
                        <label> Password </label>
                    </div>

                    <div class="input-box">
                        <span class="icon"><ion-icon name="lock-closed-sharp"></ion-icon></span>
                        <input type="password" name="cpassword" required="">
                        <label> Confirm Password</label>
                    </div>


                    <div class="remember-forgot">
                        <label><input type="checkbox" required> I agree to the terms & conditions</label>
                    </div>

                    <button type="submit" name="register-btn" class="btn">Register</button>

                    <div class="login-register">
                        <p>Already Have An Account?<a href="#" class="login-link"> Login </a></p>
                    </div>


                   
                    
                </form>
            </div>
        </div>
        <script src="script.js"></script>
        <script type="module">
    </script>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
</html>