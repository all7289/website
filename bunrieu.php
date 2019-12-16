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
		<p ><h3><strong><center><u>BUN RIEU</u></center></strong></h3></p>
<p>Crab vermicelli is one of the attractive dishes from vermicelli, which is loved by many people. With the characteristic richnes
s of the crab, the greasy little of the broth, the mild sourness of vinegar suddenly blends together to bring you a delicious, round
 noodle soup. + Scallions, tomatoes washed.
</p>
<p><h3><strong>Origin</strong></h3></p>
<center><p><img src="bunrieu1.jpg" width="500" height="400" /></p></center>
<p>
</p>
<p></p>
<p><h3><strong> presentation</strong></h3></p>
<ul >
<li >Put dried ground shrimp in a large bowl + ground minced meat + 2 teaspoons of mushroom powder + 2 teaspoons of sugar + 1 teaspoon of salt + 1 teaspoon of pepper. Mix.
 </li>
<li>
Add in a box of crab paste oil with oil (crab paste with oil). Mix.
</li>
<li>
Put 5 liters of water in a boiling pot. Add 3-4 tablespoons of Quoc Viet vermicelli noodles soup. Pour the shrimp and egg mixture into a pot of boiling water (if you want to make small balls, use the spoon to slowly drop the mixture into the pot).
 </li>
<li>
Wait until the shrimp meat egg mixture emerges on the surface of the pot, add 2 teaspoons of seasoning powder + 2 teaspoons of sugar + 1 teaspoon of salt + 2 tablespoons of fish sauce + 1 tablespoon fish sauce (without dilution) + 2-3 tbsp cashew nut oil (if you like having a nice red color).
 </li>
<li>
Wait for the pot of boiling water to return to the pot, add the green onion + 2 teaspoons of fried onion. Turn off the heat.
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


