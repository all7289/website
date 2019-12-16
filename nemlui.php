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
		<p ><h3><strong><center><u>NEM LUI</u></center></strong></h3></p>
<p>Nem Lui is a rustic dish, popular in the Central region like Hue, Da Nang ... This dish is now also very popular in Hanoi. Grilled spring rolls,
 golden, aromatic. This dish can be wrapped on bamboo sticks or lemongrass heads, when grilled the aroma of lemongrass mingled with each fiber emitting 
 extremely attractive aroma.
</p>
<p><h3><strong></strong></h3></p>
<center><p><img src="nemlui1.jpg" width="500" height="400" /></p></center>
<p>
</p>
<p></p>
<p><h3><strong>ingredient</strong></h3></p>
<p>
6 servings,
400 g of raw rolls,
200 g of ground shoulder meat (remove the fat on the skin),
3 dried shallots, minced,
2 garlic cloves minced,
The soup, pasta, fish sauce, pepper are just enough,
2 tablespoons cooking oil,
Lettuce, herbs and herbs,
Cucumber, chilli, lemon make fish sauce and garnish,
Fresh vermicelli served with,
Ricepaper,
Dipping sauce,
15 g chili sauce,
15 g of roasted white sesame seeds,</p>
<p><h3><strong>presentation</strong></h3></p>
<center><p><img src="nemlui2.jpg" width="500" height="400" /></p></center>
<ul type="1">
<li>
For raw sausages, ground meat, onions, finely chopped garlic in an aluminum bowl; Because the raw sausages are already seasoned, you only need to add 1 teaspoon of fish sauce, half a teaspoon of seasoning seeds, a little pepper and 2 tablespoons of cooking oil. 60 'fridge ice for easy wrap. If you want to eat fatter, you can mix finely chopped pork into this mixture.</li>
<li>Lemongrass washed, cut into pieces about 12cm long. Can be saved by splitting along the roots to make 2-3 parts, the tops to 2 parts.</li>
<li>Dab the oil on your hands, scoop out the meat from the spoon with a spoon and press on the pieces of meat. Arrange the wrapped lemongrass lemons on a tray lined with baking paper.</li>
<li>Make turn until the meat is gone and put in the oven at a temperature of 180ºC for about 15 minutes. Then raise the temperature 220oC in 10’-15 'when you see a beautiful yellow rolls is ok. Sometimes, remember to spread some cooking oil on the surface of the meat so that it doesn't dry out. If you grill on charcoal the meat pieces will be more fragrant.</li>
<li>Or use the Air Fryer pot to grill 180oC-15 'then increase the temperature by 200oC 10-15' when you see golden is ok!</li>
<li>You can spread some cooking oil on a non-stick pan and fry 2 sides if you don't have an oven</li>
<li>Depending on the taste of each house, you make fish sauce accordingly. Hue people often grilled the liver, fry the meat and then mixed with fish sauce. You can mix sour and sweet fish sauce with polka dots. My house uses chili sauce mixed with lemon, sugar and sesame seeds! Roll with herbs and then roll spring rolls wrapped spring rolls, dipped with fish sauce has mixed very well. Eat with noodles.</li>
</ul>
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


