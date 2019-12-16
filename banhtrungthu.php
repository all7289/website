<?php
     session_start();
	 if (!isset($_SESSION['username'])) {
			header('location: login.php');
		}
	 if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href=".\pagestyle.css">
</head>
<body>
<div class="header">
	<div class="title"><h1>VIETNAMESE FOOD</h1>
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
<div class="row">	
<div class="info">
	dsfadfdszfasdfa
</div>
<?php/*-----------------------------------------content-----------------------------------------------------------*/?>
<div class="content">
	<div id="article">
		<p ><h3><strong><center><u>BANH TRUNG THU</u></center></strong></h3></p>
<p>
</p>
<p><h3><strong>Origin and history</strong></h3></p>
<center><p><img src="banhtrungthu1.jpg" width="500" height="400" /></p></center>
<p>
A mooncake is a Chinese bakery product traditionally eaten during the Mid-Autumn Festival. The festival
 is about lunar appreciation and Moon watching, and mooncakes are regarded as an indispensable delicacy.
 Mooncakes are offered between friends or on family gatherings while celebrating the festival. 
 The Mid-Autumn Festival is one of the four most important Chinese festivals.
Typical mooncakes are round pastries, measuring about 10 cm (4 inches) in diameter and 3–4 cm 
(thick, and are commonly eaten in the Southern and Northern Chinese regions. A rich thick filling usually
 made from red bean or lotus seed paste is surrounded by a thin, 2–3 mm (approximately 1 / 8th of an inch), crust and may contain yolks from salted duck eggs. Mooncakes are usually eaten in small wedges informed by tea. present them to their clients or relatives as presents, helping to fuel a demand for high-end mooncakes.
Due to China's influence, mooncakes and Mid-Autumn Festival are also enjoyed and celebrated in other parts
 of Asia. Mooncakes have also appeared in western countries as a form of delicacy
</p>
<p></p>
<p><h3><strong> presentation</strong></h3></p>
<center><p><img src="banhtrungthu2.jpg" width="335" height="500" /></p></center>
<ul>
<li>To make mooncake filling</li>
<li>To make mooncake dough</li>
<li>To assemble mooncakes</li>
<li>To cook mooncakes</li>

</ul>
<iframe width="560" height="315" src="https://www.youtube.com/embed/Mo3e0DVy71E" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</div>
</div>
<?php/*-----------------------------------------content-----------------------------------------------------------*/?>
<div class="ad">
<p>WELCOME TO VIETNAM!!!</P>
<div>
<iframe width="400" height="225" src="https://www.youtube.com/embed/FGq49BN5GiU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
<div class="guide">
	<p><img src="vietnam_guide.jpg" width="250" height="160" /></p>
	<p><a href="http://www.vietnam-guide.com/food.htm">This web can impove your kwolege</a></p>
</div>
<div class="guide">
	<p><img src="vietnam_trip.jpg" width="250" height="160" /></p>
	<p><a href="https://vietnam.travel">A trip to vietnam</a></p>
</div>
<div class="guide">
	<p><img src="vietnam_lux.jpg" width="250" height="160" /></p>
	<p><a href="">A trip to vietnam</a></p>
</div>
	
</div>
</div>
<div class="footer">
	<p>contact</p>
</div>
</body>
</html>


