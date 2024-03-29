<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" action="sign_up.php" method="post">
      <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Please sign up</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
      <label for="inputEmail" class="sr-only">First Name</label>
      <input type="first_name" id="first_name" name="first_name" class="form-control" placeholder=" Enter your first name" required autofocus>
      <label for="inputEmail" class="sr-only">Last Name</label>
      <input type="last_name" id="last_name" name="last_name" class="form-control" placeholder=" Enter your last name" required autofocus>
      <label for="inputEmail" class="sr-only">Phone No</label>
      <input type="Number" id="mobile_number" name="mobile_number" class="form-control" placeholder=" Enter your Phone Number" required autofocus>
      <label for="inputEmail" class="sr-only">Date of Birth</label>
      <input type="date" id="dob" name="dob" class="form-control" placeholder=" Enter your Date of Birth" required autofocus>


      
      <input type="submit" name="submit" class="btn btn-lg btn-primary btn-block" value="sign up">
      <a href="job-post.php">Already a member</a>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
  </body>
</html>

<?php
include('connection/db.php');
if(isset($_POST['submit'])){
       $email=$_POST['email'];
       $password=$_POST['password'];
       $first_name=$_POST['first_name'];
       $last_name=$_POST['last_name'];
       $dob=$_POST['dob'];
       $mobile_number=$_POST['mobile_number'];
       
      $query=mysqli_query($conn,"insert into  jobseeker(email,password,first_name,last_name,dob,mobile_number)values('$email',' $password','$first_name',' $last_name','$dob','$mobile_number')");
    
      if($query){
        echo "<script>alert('Now you can login')</scriprt>";
        header('location:new-post.php');
      }else{
        echo "<script>alert('some error try again')</scriprt>";
      }
}

?>