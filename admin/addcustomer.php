<?php
include('include/header.php');
include('include/sidebar.php');
?>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
     
      <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="customer.php">customer</a></li>
    <li class="breadcrumb-item"><a href="#">Add Customer</a></li>
  </ol>
</nav>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Add Customers</h1>
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
                <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email">
            </div>

            <div class="form-group">
                <label for="username">Enter Customer Username</label>
                <input type="text" name="username" id="username" class="form-control" placeholder="Enter Username">
            </div>

            <div class="form-group">
                <label for="Password">Enter Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Password ">
            </div>
            <div class="form-group">
                <label for="First name">Enter first name</label>
                <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First name">
            </div>
            <div class="form-group">
                <label for="Last name">Enter last name</label>
                <input type="text" name="last_name" id="last_name"  class="form-control" placeholder="Last name">
            </div>
            <div class=form-group>
                <label for="admintype">Admin Type</label>
                <select name="admin_type" name="admin_type" class="form-control" id="admin_type" >
                    <option value="1">Super Admin</optin>
                    <option value="2">Customer Admin</optin>
                </select>
            
                </div>
            <div class="form-group">
              
                <input type="submit" class="btn btn-block btn-success"  placeholder="save" name="submit" id="submit">
           
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
       <script>
        $(document).ready(function(){
         $("#submit").click(function(){
             var email=$("#email").val();
             var username=$("#username").val();
             var password=$("#password").val();
             var first_name=$("#first_name").val();
             var last_name=$("#last_name").val();
             var admin_type=$("#admin_type").val();
             var data=$("#customer_form").serialize();

             $.ajax({
              type:"POST",
              url:"customer_add.php",
              data:data,
              success:function(data){
             $("#msg").html(data);
              }
           });
            //alert(admin_type);
         }); //here using # we target id and using . targetting class
        });last_name

       </script>
  </body>
</html>
password
