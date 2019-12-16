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
		<p ><h3><strong><center><u>MIT</u></center></strong></h3></p>
<p>Jackfruit (two-part nomenclature: Artocarpus heterophyllus) is a species of fruit tree, common in Southeast Asia and Brazil. Jackfruit belongs to the mulberry family (Moraceae) and is believed to have originated from India. Jackfruit is the national fruit of Bangladesh.
</p>
<p><h3><strong>Origin</strong></h3></p>
<center><p><img src="mit1.jpg" width="500" height="400" /></p></center>
<p>Jackfruit trees are popularly grown in rural areas. Jackfruit has many types such as jackfruit, wet jackfruit, long jackfruit, jackfruit female (specialty of the South), etc., in addition to the nutritional value in cuisine as mentioned above, many parts of the jackfruit plant is also medicinal.

Jackfruit leaves have special status to use to worship Buddha. Jackfruit leaves are also used to pack traditional tobacco. Jackfruit wood is also the favorite wood for statues of worship in temples because the grain is smooth, easy to carve but heavy and strong.
<p></p>
<p><h3><strong> Description</strong></h3></p>
<center><p><img src="mit2.jpg" width="500" height="400" /></p></center>
<p></p>
<p>
Jackfruit tree belongs to the type of missed trees from 8 to 15 m high. Jackfruit tree fruit after three years of age and its fruits are complex fruits, edible. Jackfruit is considered to be the largest ripe fruit tree among the herbs. Jackfruit has commercial value. Each fruit is quite large oval size 30–60 cm x 20–30 cm. Crust jackfruit bark, with small spines. Jackfruit fruit in the middle of spring and ripe in late summer (May 7-8).

It is a tropical sweet fruit. In temperate regions, jackfruit is often sold in canned form with syrup but later in the US and Europe also imported fresh jackfruit.

Apart from canned jackfruit, jackfruit is also processed by drying or cutting into thin slices and deep-fried.
</p>
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


