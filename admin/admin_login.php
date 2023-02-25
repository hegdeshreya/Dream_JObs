<?php
 session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
      <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <title>Login page in HTML</title>
    <link rel="stylesheet" href="css/admin_login.css">
    <!-- <script src="js/admin_login.js"></script> -->
</head>
<body>
    
    <h1>Welcome! to Dream Jobs</h1>
    <h1>Admin login</h1>
    <form class="form-signin" id="admin_login" name="admin_login" method="post" action="admin_login.php">
       
        <!-- Headings for the form -->
        <div class="headingsContainer">
            <h3>Sign in</h3>
            <p>Sign in with your username and password</p>
        </div>

        <!-- Main container for all inputs -->
        
        <div class="mainContainer">
            <!-- Username -->
            <label for="username">Your username</label>
            <!-- Make sure to put "required" for both the input fields -->
            <input type="text" name="email" id="email" placeholder="Enter Username" name="username" required>

            <br><br>

            <!-- Password -->
            <label for="pswrd">Your password</label>
            <input type="password" name= "pass" id="pass" placeholder="Enter Password" name="pswrd" required>
            <br><br>
             <!-- sub container for the checkbox and forgot password link -->
             <div class="subcontainer">
                <label>
                    <!-- <input type="checkbox" checked="checked" name="remember"> Remember me</label> -->
                
                <!-- <p class="forgotpsd"> <a href="#">Forgot Password?</a></p> -->
            </div>

            <button type="submit" name="submit" id="submit">Login</button>

            <!-- Sign up link -->
            <!-- <p class="register">Not a member?  <a href="admin_signup.php">Sign up!</a></p> -->
  
        </div>


    </form>

</body>
</html>
<?php 
include ('connection/db.php');



if (isset($_POST['submit'])){
$email=$_POST['email'];
 $pass=$_POST['pass'];

$query=mysqli_query($conn,"select * from admin_login where admin_email='$email' and       admin_password='$pass' ");
  
   if($query) {

   if (mysqli_num_rows($query)>0) {
    $_SESSION['email']=$email;
    header('location:admin_dashboard.php');

   } else {
    echo "<script>alert('Email or password is incorrect please try again!')</script>";
}
}
}
?>
