<?php

session_start();

include('connection/db.php');

$login= $_SESSION['email'];

     // $customer_email=$_POST['customer_email']; 
     $job_title=$_POST['job_title']; 
     $Description=$_POST['Description'];
      $country=$_POST['country'];
      $state=$_POST['state'];
        $city=$_POST['city'];
        $category=$_POST['category'];
        $keyword=$_POST['keyword'];
     

    $query=mysqli_query($conn,"insert into all_jobs(customer_email,job_title,des,country,state,city,category,keyword)values('$login','$job_title',' $Description','$country','$state',' $city','$category','$keyword')");
    //var_dump($query);
     
    if ($query) {
        echo "Data successefully inserted";
     }else{
       echo "some error please try again";
     }
   
?>
