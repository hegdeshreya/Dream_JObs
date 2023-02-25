<?php
include('include/header.php');
include('include/sidebar.php');
?>
<?php
include('connection/db.php');
echo $edit=$_GET['edit'];
$query=mysqli_query($conn, "select * from all_jobs where job_id='$edit'");
while($row=mysqli_fetch_array($query)){
    $title=$row['job_title'];
    $Description=$row['des'];
    $country=$row['country'];
    $state=$row['state'];
    $city=$row['city'];

}




?>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
     
      <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="job_create.php">All job lists</a></li>
    <li class="breadcrumb-item"><a href="#">Edit Job</a></li>
  </ol>
</nav>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Edit Jobs</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
           
          </div>
         <!-- <a class="btn btn-primary" href="addcustomer.php">Add Customers</a> -->
        </div>
      </div>
    <div style="width: 60%; margin-left:20%; background-color: #BEB4BE;" >
    <div id="msg"></div>
      <form action=""  method="post" style="margin:3%; padding: 3%;" name="job_form" id="job_form">

            <div class="form-group">
                <label for="Email">Job Title</label>
                <input type="text" value="<?php echo  $title; ?>" name="job_title" id="job_title" class="form-control" placeholder="Enter Job Title">
            </div>

            <div class="form-group">
                <label for="username">Description</label>
                <textarea name="Description" id="Description" cols="30" rows="10" class="form-control"><?php echo  $Description; ?></textarea>
            </div>
            <input type="hidden" name="id" id="is" value="<?php echo $_GET['edit']; ?>">
            <div class="form-group">
                <label for="">Country</label>
                <select name="country" class="countries form-control" value="<?php echo  $country; ?>" id="countryId">
                 <option value="">Select Country</option>
      </select>
                
            </div>
            <div class="form-group">
                <label for="">State</label>
                <select name="state" class="states form-control" id="stateId"  value="<?php echo  $state; ?>">
    <option value="">Select State</option>
</select>

              </div>
             <div class="form-group">
                <label for="">City</label>
                <select name="city" class="cities form-control" id="cityId"  value="<?php echo  $city; ?>">
    <option value="">Select City</option>
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
             var job_title=$("#job_title").val();
             var Description=$("#Description").val();
             var countryId=$("#countryId").val();
             var stateId=$("#stateId").val();
             var cityId=$("#cityId").val();
             if(job_title==''){
                alert("Please Enter the Job title!!");
                return false;
             }
             if(Description==''){
                alert("Please Enter the description!!");
                return false;
             }
             if(countryId==''){
                alert("Please Enter the C*ountry!!");
                return false;
             }
             if(stateId==''){
                alert("Please Enter the state!!");
                return false;
             }
             if(cityId==''){
                alert("Please Enter the city!!");
                return false;
             }
             
             var data=$("#job_form").serialize();

            
            //alert(admin_type);
         }); //here using # we target id and using . targetting class
        });

       </script>
  </body>
</html>

<?php
include('connection/db.php');

if(isset($_POST['submit'])){
$id=$_POST['id'];
$job_title=$_POST['job_title'];
$Description=$_POST['Description']; // name of div is used
$country=$_POST['country'];
$state=$_POST['state'];
$city=$_POST['city'];

$query1=mysqli_query($conn,"update all_jobs set job_title='$job_title',des ='$Description',country='$country',state='$state', city='$city' where job_id='$id'"); //id from mysqli $id from name of div where input type is hidden

if($query1){
    echo"<script>alert('Record has been successfully updated!!!');</script>";
   
}
else{
    echo"<script>alert('error try again!!!');</script>";
}

}
?>
 