<?php
include('connection/db.php');
$del=$_GET['del'];//here del is id


$query=mysqli_query($conn,"delete from admin_login where id='$del'");

if($query){
   
    echo"<script>alert('Record has been Deleted!!!');</script>";
    header('location:customer.php');
}
else{
    echo"<script>alert('Record has been Deleted!!!');</script>";
}


?>