<!Doctype html>

<html>
<?php
 include("config/db.php");
 session_start();
  ?>
<head>
<meta charset="UTF-8">
   <meta name="Author" content="Kasirajapandian">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
 <link rel="stylesheet" href="css/fontawesome.min.css" type="text/css">
 <link rel="stylesheet" href="css/admin.css" type="text/css">
<title> Login </title>
<body>
 <center> 
 
 <h1 style="font-weight: bold"> Admin <span style="color: tomato">  Login Panel </span> </h1>
 <br>
 <br>


<form method="post" enctype="multipart/form-data">



<center><h3>Register Form</h3></center>

<center>Username</center>
<center><input type="text" name="username" placeholder="type your username"  style="width:400px"/></center>

<center>Password</center></td>
<center><input type="password" name="password" placeholder="type your password"  style="width:400px"/></center>

<center><input type="submit" name="Register" value="Register"  /></center>


</form>
</div>
</body>
</html>
<?php
if(isset($_POST['Register'])){
	$username=$_POST['username'];
	$password=$_POST['password'];

	$query2="insert into admin (username,password) values('$username','$password')";
	$runquery2=mysqli_query($con,$query2);
	if($runquery2){
		echo'<script>alert("Account has been register")</script>';
		header('location:login.php');
		$_SESSION['username']=$username;
		
	}
}


?>