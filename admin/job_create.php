<?php
include('connection/db.php');

include('include/header.php');
include('include/sidebar.php');
?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
     
     <nav aria-label="breadcrumb">
 <ol class="breadcrumb">
   <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>  
   <li class="breadcrumb-item"><a href="#">Jobs</a></li>
   
 </ol>
</nav>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
 <h1 class="h2">All Jobs</h1>
       <div class="btn-toolbar mb-2 mb-md-0">
         <div class="btn-group mr-2">
          
         </div>
        <a class="btn btn-primary" href="add_create_job.php">Create job</a>
       </div>
     </div>
     <table id="example" class="display" style="width:100%">
       <thead>
           <tr>
              <th>#Sl.No</th>          
               <th>Admin name</th>
               <th>Job title</th>
               <th>Description</th>
               <th>Country</th>
               <th>State</th>
               <th>City</th>
               <th>Action</th>
               
           </tr>
       </thead>
       <tbody>
   <?php
   include('connection/db.php');
     $query=mysqli_query($conn,"select * from all_jobs where customer_email='{$_SESSION['email']}'");
     while($row=mysqli_fetch_array($query)){
   
   ?>
           <tr>
               <td><?php echo $row['job_id']; ?></td>
               <td><?php echo $row['customer_email']; ?></td>
               <td><?php echo $row['job_title']; ?></td>
               <td><?php echo $row['des']; ?></td>
               <td><?php echo $row['country']; ?></td>
               <td><?php echo $row['state']; ?></td>
               <td><?php echo $row['city']; ?></td>
               
               <td>
                 <div class="row">
                   <div class="btn-group">
                     <a href="job_edit.php?edit=<?php echo $row['job_id']; ?>" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span>
                     </a>
                     <a href="job_delete.php?del=<?php echo  $row['job_id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>
                     </a>
                   </div>
                 </div>
               </td>
           </tr>
           <?php } ?>
       </tbody>
       <tfoot>
           <tr>
           <th>#Sl.No</th>          
               <th>Admin name</th>
               <th>Job title</th>
               <th>Description</th>
               <th>Country</th>
               <th>State</th>
               <th>City</th>
               <th>Action</th>
       </tfoot>
   </table>
   <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

<h2>Section title</h2>
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

