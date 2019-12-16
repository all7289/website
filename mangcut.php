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
		<p ><h3><strong><center><u>QUA MANG CUT</u></center></strong></h3></p>
<p>Mangosteen (two-part nomenclature: Garcinia mangostana), is a species of the Busiaceae
 family (Clusiaceae). It is also a tropical fruit tree, familiar in Southeast Asia. Trees
 from 7 to 25 m high. Ripe fruit with thick outer skin, deep purple-red color. Ivory inside 
 and divided into many citrus sweet and sour bar and has an attractive aroma.
</p>
<p><h3><strong>Origin</strong></h3></p>
<center><p><img src="mangcut2.jpg" width="500" height="400" /></p></center>
<p>Mangosteen trees originating from Malaysia, Indonesia, from Malacca through
 Moluku, are now found throughout Southeast Asia, India, Myanmar as well as in Sri
 Lanka, Philippines, were brought by the Catholic missionaries to the South. Vietnam, 
 and then more in Tay Ninh, Gia Dinh and Thu Dau Mot provinces of Vietnam. Because the 
 climate is hot and warm, the trees are easy to grow. Therefore, the trees cannot go to the
 colder northern areas, the furthest reaches only Hue.
<p></p>
<p><h3><strong> Description</strong></h3></p>
<center><p><img src="mangcut1.jpg" width="500" height="400" /></p></center>
<p>Mangosteen is a large tree, which can reach 20–25 m tall. Leaves thick, tough, dark green, oblong. South flowers cluster 3-9 flowers with bracts. The hermaphrodite flowers have stalks with stings. The sphere is spherical, about the size of an average orange, hard red-purple outer shell, clear as wine-red, thickly porous, has long leaves underneath, has a pistil top. There are 6 to 18 seeds in the fruit, around which there are white seeds, sweet and delicious food. Like other fruits, mangosteen is sweet because it has many sugars: sucrose, fructose, glucose and possibly maltose. It is aromatic thanks to a large number of volatile substances. The liquid chromatography spectrum of essential oil extract detected about 50 organic chemicals, of which more than 30 were identified. At most in percent is hexenol, relatively less than octane, before hexyl acetate, a-copaene, acetone, furfural, hexanol, methyl butenone, toluene. Other substances are below 2% but contribute to the above components that make up the flavor of mangosteen. In addition to the special hexyl acetate and hexenyl acetate of mangosteen, the fruit odor is caused by the substances hexenal, hexanol, a-bisabolen, in addition to the smell of mango with a-copaen, the smell of jasmine with furfuryl methylceton, the smell of lilac with phenyl acetaldehyde, grass smell with hexenol, hexanal, wilt grass smell with pyridine, smell of wet leaves with xylene, dry flower smell with benzaldehyde, pecan pecans with d-cadinene. Acetone, ethyl cyclohexane contribute to sweetness while toluene, a-terpinol give the smell of sugar, methyl butenol, guaien oil smell, valencen especially orange jam. It is worth noting that if furfurl methylceton offers a pleasant aroma, furfural gives off a faint smell.</p>
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



