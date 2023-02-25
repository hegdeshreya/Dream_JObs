<?php
include('connection/db.php');
include('include/header.php');
include('include/sidebar.php');

$id=$_GET['edit'];
$query=mysqli_query($conn,"select * from admin_login where id='$id'");
while($row=mysqli_fetch_array($query)){
    $email=$row['admin_email'];
    $username=$row['admin_username'];
    $password=$row['admin_password'];
    $first_name=$row['first_name'];
    $last_name=$row['last_name'];
    $admin_type=$row['admin_type'];

}

?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
     
      <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="customer.php">customer</a></li>
    <li class="breadcrumb-item"><a href="#">Update Customer</a></li>
  </ol>
</nav>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Update Customers</h1>
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
                <label for="Email">Enter Customer Email</label>
                <input type="email" name="email" id="email" value="<?php echo  $email; ?>" class="form-control" placeholder="Enter Email">
            </div>

            <div class="form-group">
                <label for="username">Enter Customer Username</label>
                <input type="text" name="username" id="username" value="<?php echo  $username; ?>" class="form-control" placeholder="Enter Username">
            </div>

            <div class="form-group">
                <label for="Password">Enter Password</label>
                <input type="password" name="password" id="password" value="<?php echo  $password; ?>" class="form-control" placeholder="Password ">
            </div>
            <div class="form-group">
                <label for="First name">Enter first name</label>
                <input type="text" name="first_name" id="first_name" value="<?php echo  $first_name; ?>" class="form-control" placeholder="First name">
            </div>
            <div class="form-group">
                <label for="Last name">Enter last name</label>
                <input type="text" name="last_name" id="last_name" value="<?php echo  $last_name; ?>" class="form-control" placeholder="Last name">
            </div>
            <div class=form-group>
                <label for="admintype">Admin Type</label>
                <select name="admin_type" name="admin_type" value="<?php echo  $admin_type; ?>" class="form-control" id="admin_type" >
                    <option value="1">Super Admin</optin>
                    <option value="2">Customer Admin</optin>
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
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$admin_type=$_POST['admin_type'];

$query1=mysqli_query($conn,"update admin_login set admin_email='$email',admin_username='$username',admin_password ='$password',first_name='$first_name',last_name='$last_name', admin_type='$admin_type' where id='$id'");

if($query1){
    echo"<script>alert('Record has been successfully updated!!!');</script>";
   
}
else{
    echo"<script>alert('error try again!!!');</script>";
}

}
?>