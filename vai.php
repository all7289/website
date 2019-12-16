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
		<p ><h3><strong><center><u>QUA VAI</u></center></strong></h3></p>
<p>Litchi is a tropical woody fruit tree, native to southern China; distributed south to Indonesia and east to the Philippines (here it is called alupag).

Litchi is a medium-sized evergreen tree, which can reach 15–20 m tall, with alternate staggered feather leaves, each leaf is 15–25 cm long, with 2-8 leaflets on the 5–10 cm long side and no leaflets at the top. Newly grown young leaves have a bright copper red color, which then gradually turns green when the maximum size is reached. Flowers are small white to greenish or yellowish white, growing in panicles up to 30 cm long.

The fruits are nuts, globular or slightly oblong, 3–4 cm long and 3 cm diameter. The red outer shell, with a rough texture, is not edible but is easy to peel off. Inside is a translucent white flesh, sweet and rich in vitamin C, has a texture similar to that of grapes. In the middle of the fruit is a brown seed, 2 cm long and 1-1.5 cm diameter. Nuts - similar to horse chestnut seeds - are slightly toxic and should not be eaten. The fruit ripens between June (in equatorial areas) and October (in remote equatorial regions), about 100 days after flowering.
</p>
<p><h3><strong>Origin</strong></h3></p>
<center><p><img src="vai1.jpg" width="500" height="400" /></p></center>
<p>The most popular lychee variety in Vietnam is the lychee grown in Thanh Ha district, Hai Duong province. [Citation needed] However, lychee is most grown in Luc Ngan district, Bac Giang province. Thanh Ha (Hai Duong) usually has a better aroma and sweeter taste than litchi grown in other regions (although it is also taken from here). [Citation needed] Another litchi variety ripens earlier, called the people The time is "tu tu tu lieu", with bigger seeds and a sour taste than lychee. The reason for such a name is probably related to the return of a migratory bird called a howling.

Litchi blooms in March of the calendar year and matures in June. The time of full ripening usually starts from mid-June to mid-July. The litchi harvest period is usually short, about 2 weeks. Therefore, in large quantities, it is usually processed by drying, which is then called dry fabric.

In Vietnamese history, the fabric is associated with two Vietnamese historical figures, Mai Thuc Loan and Nguyen Trai. Mai Thuc Loan was originally a portrayer of tribute to the Tang Dynasty of China. He led the people to revolt and later ascended the throne to become Mai Hac De. Litchi is also known in Vietnam through the case of Le Chi Vien (The case of litchi garden) involving Nguyen Trai.
<p></p>
<p><h3><strong> Description</strong></h3></p>
<center><p><img src="vai2.jpg" width="500" height="400" /></p></center>
<p>Litchi is grown widely in southern China as well as in Southeast Asia, India, southern Japan and more recently in Florida and Hawaii (United States) as well as wet areas in eastern Australia. Fabrics require a hot tropical and subtropical climate with no frost or only mild cold winters with temperatures not below -4 ° C and with hot summers, lots of rain and high humidity. It grows well on well drained, slightly acidic soils and is rich in organic matter (humus). There are many varieties of plants, with early ripening varieties suitable for hotter climates and late ripening varieties suitable for cooler climates. In some places people also plant litchi for bonsai. Litchi is generally sold for fresh consumption at regional markets (in recent years it has also been widely sold in Western supermarkets). The red skin turns dark brown when the fruit is transported by frozen means, but the taste is almost unaffected. In canned form it is sold year-round.

The first official source of Chinese historical reference to litchi / tree dates back to the Tang Dynasty, when it was the favorite fruit of Yang Guifei, the concubine of Emperor Tang Xuanzong (Tang Huang).
 Eating too much cloth dries out lips and can cause nosebleeds in some people, as well as can cause boils or mouth ulcers. In contrast, the fruit from a relative relative to longan is considered to have nourishing properties.</p>
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


