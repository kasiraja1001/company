<?php
 include("config/db.php");
$get=$_GET['id'];
$dele="delete from news where id='$get'";
$run=mysqli_query($con,$dele);
if($run)
{
	echo "<script>window.open('view.php?msg=Deleted Successful','_self')</script>";
}
else
{
	echo "<script>window.open('view.php?msg=Deleted Unsuccessful','_self')</script>"; 
}


?> 