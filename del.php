<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>DELETE FOOD</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>DELETE YOUR FOOD</h2>
  </div>
	
  <form method="post" action="add.php">
  	<div class="input-group">
  	  <label>NAME</label>
  	  <input type="text" name="foodname" >
  	</div>
  	
  	<div class="input-group">
  	  <button type="submit" class="btn" name="submit">DEL</button>
  	</div>
  	<p>
  		<?php
		if(isset($_POST['submit'])){
		$a=$_POST['foodname'];
$db = mysqli_connect('127.0.0.1', 'root', '', 'registration');
	$sql = "DELETE FROM registration.food WHERE name='$a'";
			$result = mysqli_query($db, $sql);

			
				header ('location: cataloge.php');
			}
		?>
  	</p>
  </form>
</body>
</html>