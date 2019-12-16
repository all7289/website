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
		<p ><h3><strong><center><u>NHAN</u></center></strong></h3></p>
<p>Longan (two-part nomenclature: Dimocarpus longan) is a perennial subtropical plant belonging to the Sapindaceae family, native to southern China. Longan is grown widely in Vietnam, southern China, Thailand, India, and Indonesia.
</p>
<p><h3><strong>Origin</strong></h3></p>
<center><p><img src="nhan1.jpg" width="500" height="400" /></p></center>
<p>Longan is grown widely in Vietnam, southern China, Thailand, India, and Indonesia.
<p></p>
<p><h3><strong> Description</strong></h3></p>
<center><p><img src="nhan2.jpg" width="500" height="400" /></p></center>
<p>Trees 5–10 m high. Bark is rough, gray. Stems many branches, luxuriant leaves green all year round. Leaves are double-feathered, alternate, consisting of 5 to 9 narrow leaflets, 7–20 cm long, 2.5–5 cm wide. In the spring of February, March, April, flowering is light yellow, grows in clusters at the top of branches or leaves, radio 5-6 teeth, 5-6 colon, stamens 6-10, elected 2-3 cells. The round fruit has a yellowish, almost smooth outer shell. The seeds are black and have white seed coat. Fruit season is around July-August. Longan trees are relatively cold compared to their relatives like litchi, and are less picky.</p>
	<p><h3><strong> Usefullness</strong></h3></p>
	<p>Dried longan or longan (Arillus longanae) is soft, brown or dark brown, is used as a food and is a medicine commonly used in Eastern medicine to treat forgetful diseases, poor nerves, and depression. , or panic, trouble sleeping. Longan seed is used to treat impetigo, shampoo, cut hands, feet.

According to Oriental Medicine, long-sightedness is warm, those who have a hot body in it should not use humiliating eyes too often.

In addition, longan longan is also used in processing some tea.</p>
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


