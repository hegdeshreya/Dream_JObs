<?php
include('connection/db.php');
$del=$_GET['del'];//here del is id


$query=mysqli_query($conn,"delete from job_category where id='$del'");

if($query){
   
    echo"<script>alert('Record has been Deleted!!!');</script>";
    header('location:category.php');
}
else{
    echo"<script>alert('Record has been Deleted!!!');</script>";
}


?>