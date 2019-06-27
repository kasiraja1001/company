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
   <h3> Insert News <span class="badge" style=" background:#f5f5f5"> 4 </span> </h3>
   <hr>
   <form action="insertnews.php" method="post" enctype="multipart/form-data">
   <label for=name> News Name </label>
   <input required type="text" name="name" id=name class="form-control">
   
   <br>
    <label for=img> News Image </label>
   <input required type="file" name="img" id=a class="form-control">
   <br>
   <label for=cat> Select Category </label>
   <select name=select required id=cat class="form-control">
	<option> Travel </option>
	<?php
	$select="select * from cat order by id DESC";
	$run=mysqli_query($con,$select);
	while($row=mysqli_fetch_array($run))
	{  
		$id=$row['id'];
		$name=$row['name'];

	?>
	<option value=<?php echo "$id"; ?>> <?php echo "$name"; ?> </option>
	<?php } ?>
	</select>
   <br>
   
   <label for=text> News Text </label>
   <textarea required class="form-control" id=text name=text height: 150px" > </textarea>
   <br>
   <button name="submit" class="btn btn-success" style="float: right"> Submit </button>
   <button name="drafts" class="btn btn-info" style="float: left"> Drafts </button>
      </form>
   
   <?php
   if(isset($_POST['submit']))
   {
	   $name=$_POST['name'];
	  $img=$_FILES['img']['name'];
	  $img1=$_FILES['img']['tmp_name'];
	  $select=$_POST['select'];
	    $text=$_POST['text'];
	   	$insert="insert into news (Name,img,Cat,Text) values ('$name','$img','$select','$text')";
	   $run=mysqli_query($con,$insert);
	   if($run)
	   {
		      move_uploaded_file($img1,'img/$img');
		   echo "<script>alert('your Status updated')</script>";
	   }
   else
   {
	  echo "<script>alert('your Status updated failed')</script>";   
   }
	   
   }
      
   ?>
   
   
   
	
	
	
   </div>
  
   
   </div>
</head> 
</html>