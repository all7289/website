<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>ADD FOOD</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>ADD YOUR FOOD</h2>
  </div>
	
  <form method="post" action="add.php">
  	<div class="input-group">
  	  <label>NAME</label>
  	  <input type="text" name="foodname" >
  	</div>
  	<div class="input-group">
  	  <label>FILE ANH</label>
  	  <input type="file" name="image" >
  	</div>
  	<div class="input-group">
  	  <label>DOCUMENT</label>
  	  <input type="file" name="doc">
  	</div>
  	<div class="input-group">
  	  <label>TYPE</label>
  	  <input type="text" name="type">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="submit">ADD</button>
  	</div>
  	<p>
  		<?php
		if(isset($_POST['submit'])){
		$a=$_POST['foodname'];
		$b=$_POST['image'];
		$c=$_POST['doc'];
		$d=$_POST['type'];
$db = mysqli_connect('127.0.0.1', 'root', '', 'registration');
	$sql = "INSERT INTO registration.food (name,anh,link,loai) VALUES ('$a', '$b', '$c','$d')";
			$result = mysqli_query($db, $sql);

			
				header ('location: cataloge.php');
			}
		?>
  	</p>
  </form>
</body>
</html>