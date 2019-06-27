<?php
 include("config/db.php");

?>
<html>
<head>
<title> Admin Panel </title>
<meta charset="UTF-8">
   <meta name="Author" content="Kasirajapandian">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
 <link rel="stylesheet" href="css/fontawesome.min.css" type="text/css">
 <link rel="stylesheet" href="css/admin.css" type="text/css">
<body>
 <div class="row">
  <div class=col-md-3>
  <div class="heading">
   <h3 style="text-align: center; font-weight: bold; color: white; line-height: 60px;"> Admin Panel </h3>
   </div>
      <div class="pro">
  <center> <img src="img/avatar.png" class="img img-circle"> </center>
   </div>
   <div class="menu">
    <ul>
	<li> <a href="dashboard.php">Dashboard </a> </li>
	
	<li> <a href="view.php"> Insert/View</a> </li>
	<li> <a href="analytics.php"> Analytics </a> </li>
	<li  class="active"> <a href="profile.php"> Profile</a> </li>
	</ul>
   </div>
   </div>
   <div class=col-md-9 style="background: #f5f5f5;">
   <div class="container-fluid">
   <form action="logout.php">
   <button class="btn btn-danger" style="float: right; margin-right: 20px"> 
   Logout
   </button>
   </form>
   </div>
   <div class="container" style="background: white ; border:0px solid; position: absolute; width: 650px ;height:500px;">
   
   <h2 style="font-weight: bold"> View </h2>
   <h3> Change password </h3>
   <hr>
   <form action="profile.php" method="post">
   <label for=name> Write a Old Password </label>
   <input required type="password" name="name3" id=name class="form-control">
   <label for=name> Write a New Password </label>
   <input required type="password" name="name1" id=name class="form-control">
   <label for=name> Confirm Password </label>
   <input required type="password" name="name2" id=name class="form-control">
   
   
   <br>
   
   <br>
   <button name="submit" class="btn btn-success" style="float: right"> Update </button>
   </form>
   <?php
 if(isset($_POST['submit']))
 {
	 $old=$_POST['name3'];
	 $new=$_POST['name1'];
	 $again=$_POST['name2'];
 
	$select="select * from admin";
	$rim=mysqli_query($con,$select);
	while($row=mysqli_fetch_array($rim))
	{
		$user=$row['name'];
		$pass=$row['pass'];
		
		
	}
  if($pass==$old)
  {
	 if($new==$again)
	 {
		 $update="update admin set pass='$again'";
		 $adm=mysqli_query($con,$update);
		 if($adm)
		 {
			echo "<center> <h6> Your password is updated </h6> </center>";
		 }
		 else{
			 echo  "<center> <h6> Your  password updated failed </h6> </center>";
		 }
	 }	
 else
 {
	  echo "<center> <h6> Your confirm password is wrong </h6> </center>";
 }	 
  }
  else 
  {
	  echo "<center> <h6> Your old password is wrong </h6> </center>";
  }
 }

?>   
   
   <br>
   <br>
	
	
	
   </div>
  
   
   </div>
</head> 
</html>