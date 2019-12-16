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
		<p ><h3><strong><center><u>TAO PHO</u></center></strong></h3></p>
<p>
Soybean curd (also known as pho, pho, tofu / tofu with sugar water, pea flowers and beans) is made from soybeans. Cao Tao is ivory-white and fleshy. Fine jelly jelly like jelly jelly (not packed into jelly) is one of the favorite snacks in many Asian countries. In China, there are places where eating rice is a mess.
</p>
<p><h3><strong>Origin</strong></h3></p>
<center><p><img src="taopho1.jpg" width="500" height="400" /></p></center>
<p>Cao pho in Hanoi is often peddled; the image of the seller carrying one end is a bucket of pho, the other is a small cupboard wandering around the streets, mouth "Ai ... euphoria here" becomes familiar in this city. However, recently the load has often been replaced by a bicycle with a "custom" design to carry all the supplies.

Noodles are often caught in the summer, as this is a "cool, cool" food. One end hung a small cupboard containing five bowls of bowls, with a pitcher of sugar and a small bucket of water. At the other end is a bucket of pho. Bucket containers are usually made of strapping lumber. Cao Cao in containers is still hot for hours. The seller skimmed the slices into the bowl with a small piece of corrugated iron, the usual old-fashioned tool was a big piece of oyster shell, bright and iridescent with nacre, sugar water mixed with the mouth, marinated fresh jasmine. continue to the container). Sugar water is full of bowls. People can take a sip, can also use a slightly pickled spoon and then exposed to eat. In the summer, crushed ice can be added to the bowl to cool. After the type of wooden crates, the bulky skimmers are also replaced by metal, but the bulks are still preferred. The street vendor may be men with a strong and resounding cry.
</p>
<p></p>
<p><h3><strong> presentation</strong></h3></p>
<ul >
<li >Soybeans soaked in water for 4-6 hours, treat the skin clean.
 </li>

<li>If there is a soy milk maker, just put the shelled beans in the machine with 800ml of water to get 800ml of soy milk.

Machine filters are often not very thorough, so need to filter again to make sure the water is not mixed with residue.

If you do not have a machine, you can use a blender or a blender to make puree beans and put them into the cloth thoroughly squeezed so that 800ml of soy milk is obtained.
 </li>
 <li>
Boil the freshly obtained soy milk over low heat for about 10 minutes.
 </li>
 <li>
The freezing mechanism of grape sugar requires high temperatures, so it is advisable to use the rice cooker's bowels to hold the rice. Dissolve grape sugar with enough water to scoop the pot, this step you only do when soy milk has boiled because the grape sugar is very sour.
 </li>
<li>
Cover the lid of the rice cooker slightly, avoiding standing water to flow to the surface of the bowl. Keep the pot still for about 30 minutes as there is a dish of pho.
 </li>
<li>
Prepare sugar water to dissolve sugar with water. Let the sugar water cool, then refrigerate. Can be used with pineapple leaf water or with grapefruit perfume, marinated jasmine. If you use grapefruit or jasmine perfume, add them when the sugar water has cooled
 </li>
 <li>
When eating, use special tools to skim the thin layer of pho into the bowl. If you don't have a scraping utensil, you can use a thin spoon and skim gently. Pour the cooled sugar water into a bowl of pho to eat.
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


