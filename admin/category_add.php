<?php
  include('connection/db.php');

     $category=$_POST['category'];
     $Description=$_POST['Description'];
     

    $query=mysqli_query($conn,"insert into job_category(category,des)values('$category',' $Description')");
     //var_dump($query);
     
    if ($query) {
        echo "Data successefully inserted";
    }else{
        echo "some error please try again";
    }
   
?>
