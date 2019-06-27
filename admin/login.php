
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
<center><h3>Login Form</h3></center></td>


<input type="text" name="username" placeholder="type your username" style="width:400px"/>
<br>
<center>Password</center>
<input type="password" name="password" placeholder="type your password" style="width:400px"/>

<center><input type="submit" name="SignIn" value="Login" /></center>

<center><a href="register.php"><input type="button" name="Register" value="Register" /></a></center>

</table>
</form>
	</body>
</html>
<?php
if(isset($_POST['SignIn'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	$query1= "select * from admin where username='$username' AND password='$password'";
	$runquery1=mysqli_query($con,$query1);
	if(mysqli_num_rows($runquery1)>0){
		header('location:dashboard.php');
		$_SESSION['username']=$username;
		
	}
	else{
		echo'<script>alert("Invalid username and password")</script>';
	}
}

?>