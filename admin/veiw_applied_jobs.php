<?php
include('connection/db.php');

error_reporting(0);
include('include/header.php');
include('include/sidebar.php');
?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
     
     <nav aria-label="breadcrumb">
 <ol class="breadcrumb">
   <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>  
   <li class="breadcrumb-item"><a href="#">Applied Jobs</a></li>
   
 </ol>
</nav>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
 <h1 class="h2">Applied Jobs</h1>
       <div class="btn-toolbar mb-2 mb-md-0">
         <div class="btn-group mr-2">
          
         </div>
      
       </div>
     </div>
     <!--  -->
     <form action="" method="post" style="border: 1px solid gray; width: 80%; margin-left: 10% ;padding: 10px;">
       <?php
include('connection/db.php');
$id=$_GET['id'];
$sql ="select * from job_apply LEFT JOIN all_jobs ON job_apply.id_job = all_jobs.job_id where id='$id'";

$query= mysqli_query($conn, $sql);
// var_dump($sql);
while($row= mysqli_fetch_array($query)){
?>
 <h1><?php echo strtoupper($row['first_name']); ?> <?php echo strtoupper($row['last_name']); ?></h1>

<div class="form-group">
<label for="">Job Title :</label>
<td><?php echo $row['job_title']; ?></td>
</div>
<div class="form-group">
<label for="">Job Description :</label>
<td><?php echo $row['des']; ?></td>
</div>
<div class="form-group">
<label for="">Job Seeker Name :</label>
<td><?php echo $row['first_name']; ?> <?php echo $row ['last_name']; ?></td>
</div>
<div class="form-group">
<label for="">Job Seeker Email :</label>
<td><?php echo $row['job_seeker']; ?></td>
</div>
<div class="form-group">
<label for="">Job Seeker phno :</label>
<td><?php echo $row['mobile_number']; ?></td>
</div>

  <div class="form-group">
<label for="">Job Seeker File :</label>
<td><a href="http://localhost/job_portal/files/<?php echo $row['file']; ?>">Download File </a></td>
</div>     
<div class="form-group">
<label for="">Job Seeker photo :</label>
<td><a href="http://localhost/job_portal/files/<?php echo $row['filea']; ?>">Download File </a></td>
</div>   
<div class="form-group">
<label for="">Job Seeker id :</label>
<td><a href="http://localhost/job_portal/files/<?php echo $row['fileb']; ?>">Download File </a></td>
</div>   

<?php  } ?>
<!-- <input type="submit" name="submit"  href="acc.php"  class="btn btn-success" value="Accept" > -->
<!-- <a href="acc.php"  class="btn btn-success">Accept</a>
<a href="rej.php" class="btn btn-danger">Reject</a> -->
<input type="hidden" name="id" value="123">
    <button type="submit" name="status" class="btn btn-success"  value="Accepted">Accept</button>
    <button type="submit" name="status" class="btn btn-danger" value="Rejected">Reject</button>
    <br>

<?php


include('connection/db.php');

 if(isset($_POST['status'])){
$id=$_GET['id'];
$status = $_POST['status'];

// Update the record in the database with the new status
// $sql = "UPDATE  job_apply SET status='$status' WHERE id=$id";
$query=mysqli_query($conn,"update job_apply Set status='$status' where id='$id'  ");  

if($query){
  echo"<script>alert('Status has been updated!!!');</script>";
 
}
else{
  echo"<script>alert('error try again!!!');</script>";
}

  }

?>
     </form>  
   <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>


<div class="table-responsive">
</div>
</main>
</div>
</div>

   <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
     <script>window.jQuery || document.write('<script src="/docs/4.6/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

     
       <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script>
       <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
       <script src="dashboard.js"></script>
       <!-- datatables plugin -->
       <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
       <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
      <script>
       $(document).ready(function () {
   $('#example').DataTable();
});
      </script>
 </body>
</html>


