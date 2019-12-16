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
		<p ><h3><strong><center><u>BANH XEO</u></center></strong></h3></p>
<p>Pancakes are a popular type of dough in Asia, the pancakes version of Japan and North
 Korea have dough on the outside, filled with shrimp, meat, bean sprouts; kimchi, potatoes,
 shallots, seafood (Korean pancakes); shrimp, meat, Chinese cabbage (Japanese) are fried yellow,
 cast into a circle or folded into a semicircle. Depending on the locality in Vietnam, the cake is
 enjoyed with its own characteristics. There are usually 2 styles: pouring crispy pancakes and chewy 
 pancakes.
</p>
<p><h3><strong>Origin</strong></h3></p>
<center><p><img src="banhxeo1.jpg" width="500" height="400" /></p></center>
<p>In Hue, this dish is often called banh chung and is often served with grilled meat, the sauce is a broth of soy sauce,
 liver and peanuts. In the South of Vietnam, cakes have added eggs and people eat pancakes dipped in sweet and sour sauce.
 In Northern Vietnam, the pancakes fillets in addition to ingredients like elsewhere also add thinly sliced ​​jicama or shredded taro.

The types of vegetables served with pancakes are very diverse, including lettuce, broccoli, lettuce, perilla, basil, basil 
leaves and young cold rice leaves ... In Can Tho, there are more extracted leaves, more in Dong Thap. Lagerstroemia leaves,
 in Vinh Long, there are more young mango leaves, in Bac Lieu, there are more leaves. The most sophisticated in the central
 regions of Vietnam, in addition to raw vegetables, also add acrid fruit, starfruit star fruit .. Therefore, gourmets feel 
 suspicious as if this dish really originated in Hue.

Phan Thiet pancake differs from pancakes in other places as small cakes just by the heart of the cup and not rolled with lettuce 
but drop into a bowl of ripe fish sauce (the sauce is pounded with garlic and chili). On Tuyen Quang street, there are many delicious
 pancake shops, so it is also called "banh xeo street".

The lotus is in the middle of an idyllic place but still shows purity and nobility. From that meaning, "lotus pancake" in Saigon
 is a new dish that artist Muoi Xiem has cared for a lot of creativity. Combining traditional ingredients with lotus seeds, lotus
 root, lotus root as the cake makes the charming country cake. Besides, A Phu pancakes, Dinh Cong Trang pancakes still retain their
 own taste and style over the past twenty years.
</p>
<p></p>
<p><h3><strong> presentation</strong></h3></p>
<ul >
<li >Rice is soaked in water to bloom. Done with fresh turmeric (bread will taste better than using dry turmeric) or turmeric powder
 (if it is turmeric then grind the rice and then mix with a mixture of pureed rice), blend the soaked rice flour mix with freshly
 chopped technology (most of them use a grinder to grind rice because it is fast, saving time and effort, but in the past, using stone
 mortars to grind, now some families still keep this type of mill and use it. ). Currently there are a number of brands of ready-made 
 pancake dough, widely sold, when bought, just mix water in a given ratio to bring it right away. In addition to turmeric to make the
 cake yellow, many places also use coconut water to make the color of the cake, which is usually brownish yellow instead of yellow like
 turmeric. In particular, the pancake has almost only rice, no other ingredients to color and often no bread.
 </li>
<li>
Next, add the dried coconut milk (grated coconut into warm water, squeeze and squeeze the juice) into the mixture
 with finished flour, leave for about 30 minutes. Before pouring the cake, add chopped scallions (about 5 mm) into 
 the flour mixture, mix well. Many regions do not use coconut milk in cake dough.
</li>
<li>The part of the cake includes bacon, when boiled, put a little salt in the pot, thinly slice the shrimp and then fry it and add a
 little salt with monosodium glutamate, green peas and boiled shells, lightly boiled. In many regions, the filling is pre-cooked,
 pre-cooked without being cooked before pouring.
 </li>
<li>Use a large pan to fry the pancakes, before pouring the dough in, use a little oil for the pan of hot oil, then use a spoon 
to scoop the flour into the pan, then tilt the pan so that the dough is evenly coated into a circle, Cover the lid until the dough
 is slightly cooked, add the filling in the middle, cover the lid again and wait a few seconds for the bread to be crispy. In the
 central region, pancakes are poured in round and flat bottom zones, of moderate size.
 </li>
<li>Fish sauce for dipping with pancakes must use delicious fish sauce mixed with water, lemon juice (so delicious should not use vinegar),
 granulated sugar, a little MSG, finely chopped carrots, little chili pepper if eaten spicy.
 </li>
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


