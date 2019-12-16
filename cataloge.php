<?php
     session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href=".\pagestyle.css">
</head>
<body>
<div class="header">
	<div class="title"><h1>CATALOGE</h1>
	<p style="color:white">created by mon</p>
	</div>
	<div class="qwerty">
	<p>WElCOME, <?php echo $_SESSION['username']; ?>  !!!</P>
	<p>ID : <?php $db = mysqli_connect('127.0.0.1', 'root', '', 'registration');
		 $nameuser=$_SESSION['username'];
			$sql = "SELECT id FROM registration.users WHERE username='$nameuser'";
			$result = mysqli_query($db, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo  $row["id"];
    }
} else {
    echo "";
}
	mysqli_close($db);
	?></p>
	 <a href="pagehome.php?logout='1'" >logout</a>
	</div>
</div>
<div class="nav">
<div id="menu">
<ul>
<li><a href="pagehome.php">Home</a></li>
<li>
<a href="">Menu</a>
<ul class="sub_menu"> 
	<li><a href="news.php">news</a></li>
	<li><a href="street.php">street food</a></li>
	<li><a href="trad.php">traditional food</a></li>
	<li><a href="drink.php">drinks</a></li>
</ul>
</li>
<li>
<a href="cataloge.php">Cataloge</a>

</li>
</ul>
</div>
<div id="search">
<form action="search.php" method="post">
<input type="text" name="search" placeholder="search">
<input type="submit" name="submit" value="Search">
</form>
</div>
</div>
<div class="cataloge">	

<?php
$db = mysqli_connect('127.0.0.1', 'root', '', 'registration');
	$sql = "SELECT * FROM registration.food ";
			$result = mysqli_query($db, $sql);
	if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
		?>
	<div class="pic">
	<a href="<?php echo $row["link"]; ?>"><center><p><img src="<?php echo $row["anh"]; ?>" width="300" height="200" /></p>
	<p><?php echo $row["name"]; ?></p></center>
	</a>
</div>

	<?php
    }
} else {
    echo "";
}
?>

<?php
	$db = mysqli_connect('127.0.0.1', 'root', '', 'registration');
	$adname=$_SESSION['username'];
$query = "SELECT * FROM admin WHERE admin_name='$adname' ";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  ?>
  	<div class="pic">
	<a href="add.php"><center><p><img src="cong.jpg" width="300" height="200" /></p>
	<p>Add more...</p></center>
	</a>
</div>
<div class="pic">
	<a href="del.php"><center><p><img src="tru.png" width="300" height="200" /></p>
	<p>Delete...</p></center>
	</a>
</div>
 <?php }
?>
	
</div>
<div class="footer">
	<p>contact</p>
</div>
</body>
</html>




