		<?php
	include("config/db.php");
?>	

	
	
	<div class="col-md-4"> 
	 <div class="line">
	  <div class="right">
	   <span>  Latest Post  </span>
	  </div>
	  </div>
<br>
	  	  <div class="row">
	
	<div class=col-md-4> <img class="rounded" src="img/travel2.jpg" style="width: 100px;
	height: 80px padding: 5px;" > 
	</div>
	<div class=col-md-8> <br> <span class="side_post"><a href="index.php"> Latest News </a> </span> </div>
	</div>
	<br>

 	  <div class="row">
	
	<div class=col-md-4> <img class="rounded" src="img/travel2.jpg" style="width: 100px;
	height: 80px padding: 5px;" > 
	</div>
	<div class=col-md-8> <br> <span class="side_post"><a href="index.php"> Coming up</a> </span> </div>
	</div>
 <br>
 	 <div class="line">
	  <div class="right">
	   <span> Categories </span>
	  </div>
	  </div>
	  <div class="cat">
	  <?php
	  $cat="select * from cat order by id Desc";
	  $run_cat=mysqli_query($con,$cat);
	  $count_cat=mysqli_num_rows($run_cat);
	  if($count_cat>0)
	  {
		  while($row_cat=mysqli_fetch_array($run_cat))
		  {
			$id_cat=$row_cat['id'];			
			$name_cat=$row_cat['name'];			
		 
		  ?>
		  <a href="index.php"id=<?php echo $id_cat ?>"><?php echo $name_cat ?>  </a>
	  <?php }}
	  
	  else
	  {
		  echo "<center> <h5> Sorry No categories available </h5> </center>";
	  }
	  ?>
	  
	
	 	 </div> 
	</div>
</div>