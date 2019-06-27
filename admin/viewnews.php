<?php
 include("config/db.php");
 @$get=$_GET['id'];

?>
<head>
  <meta charset="UTF-8">
   <meta name="Author" content="Kasirajapandian">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
 <link rel="stylesheet" href="css/fontawesome.min.css" type="text/css">
 <link rel="stylesheet" href="css/style.css" type="text/css">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

</head>
<body class="main">
<div class="container"  style="background:white"> 
<header class="navbar navbar-inverse navbar-fixed-top" style="background-color:black">
  <div class="container">
        <a class="navbar-brand  navbar-fixed-left" href="#" style="cursor: pointer"> Infiniti Software Solutions </a>
		<ul class="nav navbar-header">
      <li class="active">  <a href="index.php">&nbsp Home </a> </li>
          <li><a href="about.php">&nbsp About</a></li>
     <li><a href="contacts.php ">&nbsp Contacts </a></li>
    </ul>
	</div>
    </header>
    <div class="row">
	 <div class="col-md-8">
	 <h2 class="heading"> Infiniti <span class="active"> Marketting  Team </span> </h2>
	 
	 </div>
	 </div>
	 <br>
	 <div class="container"  style="background:white"> 
<nav class="navbar navbar-inverse " style="background-color:black">
  <div class="container-fluid">
       	<ul class="nav navbar-header  ">
     <li class="active"><a href="index.php">&nbsp Home </a></li>
          <li><a href="about.php">&nbsp About
</a></li>
     <li><a href="contacts.php "> &nbsp Contacts </a></li>
     <li><a href="dashboard.php "> &nbsp Admin </a></li>
    </ul>
	</div>
	</nav>
	</div>
	
		<div class="post">
		 
			<?php
			if($get)
			{	
				
				$select="select * from news where id='$get'";
			}
			
			
			$select_run=mysqli_query($con,$select);
			$count=mysqli_num_rows($select_run);
			if($count>0)
			{
			 while($row=mysqli_fetch_array($select_run))
				 
				 {
					
					$id=$row['id'];
					$name=$row['Name'];
					$text=$row['Text'];
					$date=$row['Date'];
					$img=$row['img'];
					
					 
			?>
			
			<div class="row">
	<div class="col-md-8" style="border:0px solid">  
			<h3 style="font-weight: bold;
			color:black;
				text-align:center;
			"><?php echo $name;?></h3>
			
				<img src="img/<?php echo $img;?>" class="img img-thumbnail" />
			
			
			<h6 style="float:right;">Date : <?php echo $date;?></h6>
			<br/><br/><br/><br/>
			<p style="text-align:justify;">
			<?php echo $text;?>
			</p>
			
<a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a> &nbsp;
<a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a>&nbsp;
<a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a>&nbsp;
<a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a>&nbsp;
			</div>
			</div>
			
			<?php
			}}
			
			
			else{
				echo "<h3><center>NO post available</center></h3>";
			}
			?>
		<br/>
		<br/>
		</div>
			</div>	
	 <br>
	  <br>
	
			<div class="footer">
  <p>Copyright @ 2019 Kasirajapandian</p>
</div>
</div>
</div>
</body>
</html>