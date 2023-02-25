<?php
include('connection/db.php');
include('include/header.php');
include('include/sidebar.php');
error_reporting(0);
$id=$_GET['edit'];
$query=mysqli_query($conn,"select * from company where company_id='$id'");
while($row=mysqli_fetch_array($query)){
    $company_name=$row['company'];
    $des=$row['des'];
    $admin=$_POST['admin'];
    
}

?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
     
      <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="create_company.php">Company</a></li>
    <li class="breadcrumb-item"><a href="#">Update Company</a></li>
  </ol>
</nav>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Update Company</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
           
          </div>
         <!-- <a class="btn btn-primary" href="addcustomer.php">Add Customers</a> -->
        </div>
      </div>
    <div style="width: 60%; margin-left:20%; background-color: #BEB4BE;" >
    <div id="msg"></div>
      <form action=""  method="post" style="margin:3%; padding: 3%;" name="customer_form" id="customer_form">

            <div class="form-group">
                <label for="Email">Enter Company name</label>
                <input type="text" name="company" id="company" value="<?php echo  $company_name; ?>" class="form-control" placeholder="Enter company name">
            </div>

            <div class="form-group">
                <label for="username">Enter Description</label>
                <textarea name="des" id="des" class="form-control" cols="30" rows="10" ><?php echo  $des; ?> </textarea>
            </div>


            <div class="form-group">
                <label for="username">Select CompanyAdmin</label>
              <select name="admin" class="form-control" id="admin">
                <?php
                  include('connection/db.php');
                $sql=mysqli_query($conn,"select * from admin_login where admin_type='2' ");
                while($row=mysqli_fetch_array($sql)) { ?>
                  <option value="<?php echo $row['admin_email']; ?>"><?php echo $row['admin_email']; ?></option>
                <?php } ?>
              
              </select>
            </div>
            
            <input type="hidden" name="id" id="id" value="<?php echo $_GET['edit']; ?>" >
            <div class="form-group">
              
                <input type="submit" class="btn btn-block btn-success"  placeholder="update" name="submit" id="submit">
           
            </div>
        </form>
    </div>
    </div>
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

<?php
include('connection/db.php');
if(isset($_POST['submit'])){
$id=$_POST['id'];
$company=$_POST['company'];
$des=$_POST['des'];
$admin=$_POST['admin'];



$query1=mysqli_query($conn,"update company set company='$company',des='$des',admin='$admin' where company_id='$id'");

if($query1){
    echo"<script>alert('Record has been successfully updated!!!');</script>";
   
}
else{
    echo"<script>alert('error try again!!!');</script>";
}

}
?>