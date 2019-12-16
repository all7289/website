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
		<p ><h3><strong><center><u>XOI NGU SAC</u></center></strong></h3></p>
<p>Five-colored sticky rice is an indispensable dish in the tray of the Tay, Thai, ... is a specialty of the Northwest people. Glutinous sticky glutinous rice with five kinds of fresh colors represent the five elements, making the lushness of Thien-Diaper. According to the concept, eating five-colored sticky rice on Tet holidays will bring good luck and good for the whole year. Moreover, five-color sticky rice is a way to show the courage and skill of the Northwest woman. The simple five-color sticky rice recipe with easy-to-find and nutritious natural ingredients will make your home tray more decent.
</p>
<p><h3><strong>Origin</strong></h3></p>
<center><p><img src="xoingusac1.jpg" width="500" height="400" /></p></center>
<p>The Tay in our country are widely distributed throughout the country and live in most of the high mountains. They have a long tradition of culture, their own writing and more developed economic conditions than other ethnic groups. The unique features of the Tay people are expressed not only in the village associations, folk songs and songs but also in the rich culinary culture. And five colored sticky rice is one of their outstanding products.
Called five colored sticky rice because this dish is made up of 5 different colors: white, red, blue, purple, yellow, symbolizing the five elements of metal, wood, water, fire, earth. The Tày people often make five-colored sticky rice on anniversaries, weddings, new homes and on the fifth and fifth of May, the full moon in July every year ... with the expectation that the family will have good luck and the owner will prosper.

The ingredients for making five-color sticky rice include: glutinous glutinous rice, which are scrambled and mixed well with the leaves of the forest to dye. Depending on the type of leaves and how to prepare to create 5 different colors, creating sticky dishes not only unique in appearance but also delicious and attractive flavor.
</p>
<p></p>
<p><h3><strong> Meaning of xoi ngu sac</strong></h3></p>
<center><p><img src="xoingusac2.jpg" width="500" height="400" /></p></center>
<p>In the past, the five colors of sticky rice symbolized the five elements: white is the color of needles, blue is the color of wood, black is the color of water, red is the color of fire, yellow is the color of earth. It is thought that the existence of the five elements makes the lushness of Thien - Diaper - People. With the Tay, the habit of eating five-colored sticky rice during holidays, Tet will help them meet many good and lucky things. healed.

Besides, five colored sticky rice is the pride of the Tay women because it shows their ingenuity and courage. The five-color sticky rice is made from natural ingredients so it is delicious and nutritious.</p>
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


