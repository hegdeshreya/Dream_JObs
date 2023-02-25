<?php
include('connection/db.php');
$del=$_GET['del'];//here del is id


$query=mysqli_query($conn,"delete from company where company_id='$del'");

if($query){
   
    echo"<script>alert('Record has been Deleted!!!');</script>";
    header('location:create_company.php.');
}
else{
    echo"<script>alert('Record has been Deleted!!!');</script>";
}


?>