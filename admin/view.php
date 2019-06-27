<?php
 include("config/db.php");
 @$get=$_GET['msg'];

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
	
	<li  class="active"> <a href="view.php"> Insert/View</a> </li>
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
   
   <h2 style="font-weight: bold"> View </h2>
    <?php
   $select="select * from news order by id Desc";
   $run=mysqli_query($con,$select);
   $count=mysqli_num_rows($run);
   ?>
   <h3> Total News <span class="badge" style=" background:#f5f5f5"> <?php echo "$count"; ?> </span> </h3>
  
   <br>
   <br>
   <br>
   
   <center> <h3> <?php echo "$get"; ?> </h3> </center>
   
   
   
	<a href="insertnews.php" class="btn btn-warning"style= "float:right"> Insert News </a>
	<table class="table table-hover table-striped table-bordered"> 
	<tr>
	<th> S.no </th>
	<th> Name </th>
	<th> Action </th>
	</tr>
	<?php
	$no=1;
	while ($row=mysqli_fetch_array($run))
	{
		$id=$row['id'];
		$name=$row['Name'];
		
?>
	<tr>
	<th><?php echo $no++; ?>  </th>
	<th>
	<?php echo "$name"; ?> </th>
	
	<th> <a href="insertnews.php?id=<?php echo "$id"; ?>" class="btn btn-success"> Edit </a> &nbsp; <a href="delete.php?id=<?php echo "$id"; ?> " class="btn btn-danger">Delete </a>
	&nbsp;
	</tr>
	<?php
	}
	?>
	
	
   </div>
  
   
   </div>
</head> 
</html>