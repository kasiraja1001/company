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
	<li class="active"> <a href="index.php">Dashboard </a> </li>
	
	<li> <a href="view.php"> Insert/View</a> </li>
	<li> <a href="analytics.php"> Analytics </a> </li>
	<li> <a href="profile.php"> Profile</a> </li>
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
   
   <h4> Admin Dashboard </h4>
   <h6 style="font-weight: bold"> Welcome : Kasirajapandian</h6>
   <div class="row">
    <div class="col-md-4">
	<div class="cc">
	 <center>
	<img src="img/navbar.png" class="img img-circle" style="height:50px" >
	
	<?php
	$pc="select * from news";
	$run_p=mysqli_query($con,$pc);
	$count_pc=mysqli_num_rows($run_p);
	?>
	
	<h4> Total Post </h3>
	<span class="badge" style=" background:white">
 <?php echo "$count_pc"; ?>
	</span>
	 </center>
</div>

	</div>
    <div class="col-md-4">
<div class="cc">
	 <center>
	<img src="img/call.png" class="img img-circle" style="height:50px" >
	
		<?php
	$pc1="select * from cat";
	$run_p1=mysqli_query($con,$pc1);
	$count_pc1=mysqli_num_rows($run_p1);
	?>
	<h4> Contact </h3>
	<span class="badge" style=" background:white"> 
	 <?php echo "$count_pc1"; ?>
	</span>
	 </center>	 
	 </div>
	 </div>
    <div class="col-md-4"> 
	<div class="cc">
	 <center>
	<img src="img/pen.png" class="img img-circle" style="height:50px" >
			<?php
	$pc2="select * from contact";
	$run_p2=mysqli_query($con,$pc2);
	$count_pc2=mysqli_num_rows($run_p2);
	?>
	<h4> Categories </h3>
	<span class="badge" style=" background:white">
	<?php echo "$count_pc2"; ?>
	 </span>
	</center>
</div>
	</div>
   </div>
   <br>
   <br>
   <br>
    <h3> Contact us </h3>
	<tr>
	<table class="table table-hover table-striped table-bordered"> 
	<tr>
	<th> S.no </th>
	<th> Name </th>
	<th> Email </th>
	<th> Msg </th>
	</tr>
	<?php
	$pc3="select * from contact";
	$run_p3=mysqli_query($con,$pc3);
	while($row=mysqli_fetch_array($run_p3))
	{
		$name=$row['name'];
		$email=$row['email'];
		$msg=$row['msg'];
			
		?>
	<tr>
	
	<th> 1 </th>
	<th><?php echo "$name"; ?></th>
	<th> <?php echo "$email"; ?> </th>
	<th> <?php echo "$msg"; ?> </th>
	
	</tr>
	
	<?php
	}
	
	?>
   </div>
  
   
   </div>
</head> 
</html>
