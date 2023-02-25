<?php
include('connection/db.php');
$del=$_GET['del'];//here del is id


$query=mysqli_query($conn,"delete from all_jobs where job_id='$del'"); // need to take row name as in database of tabel here we have job_id in customer_delete we have id

if($query){
   
    echo"<script>alert('Record has been Deleted!!!');</script>";
    header('location:job_create.php');
}
else{
    echo"<script>alert('Record has been Deleted!!!');</script>";
}


?>