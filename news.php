<table class="table table-bordered">
<tr>
<th>Id</th>
<th>Title</th>
<th>Description</th>
<th>Date</th>
<th>Category</th>
<th>Thumbnail</th>
<th>Admin</th>
<th>Edit</th>
<th>Delete</th>
</tr>
<?php
include('db/connection.php');
$page=$_GET['page'];
if($page=="" || Spage==1){
$page1=0;
}
else{
Spage1-($page 3)-3;
}
$query=mysqli_query($conn,"select * from news limit Spage1,3");
while ($row-mysqli_fetch_array($query)) {
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['title']; ?></td>
<td><?php echo substr($row['description'],0,100); ?></td>
<td><?php echo date("F js ,y", strtotime($row [ date ])); ?></td>
<td><?php echo $row['category']; ?></td>
<td><img class="img img thumbnail" src="images/<?php echo $row['thumbnail']; ?>" alt="" width="150" height="150" ></td
>
<td><?php echo $row['admin']; ?></td>
<td><a class="btn btn-info btn-sm" href="news edit.php?edit-<?php echo $row['id']; ?>">edit</a></td>
<td><a class="btn btn danger btn-sm" href="news_delete.php?del=<?php echo $row[ id ]; ?>">delete</a></td>
</tr>