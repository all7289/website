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
		<p ><h3><strong><center><u>THANH LONG</u></center></strong></h3></p>
<p>Dragon fruit is a species of tree grown primarily for fruit collection and is also the name
 of several genera of cacti. Dragon fruit is a native plant in Mexico, Central America and South
 America. Currently, these species are also grown in countries in Southeast Asia such as Vietnam,
 Malaysia, Thailand, Philippines, Indonesia (especially in western Java island); southern China, 
 Taiwan and some other regions.
</p>
<p><h3><strong>Origin</strong></h3></p>
<center><p><img src="thanhlong1.jpg" width="500" height="400" /></p></center>
<p>Red or white-skinned guts are widely grown in provinces such as Binh Thuan, Long An, Tien Giang, etc. Red-fleshed red-fleshed intestines have been researched and bred by Southern Fruit Tree Institute SOFRI (Dong hamlet, Long Dinh commune, Chau Thanh district, Tien Giang province). In Binh Thuan, Tien Giang, Long An, ... Besides now the purple flesh dragon fruit has been researched and bred by the Southern Fruit Tree Institute has also been put into mass cultivation.
<p></p>
<p><h3><strong> Usefullness</strong></h3></p>
<center><p><img src="thanhlong2.jpg" width="500" height="400" /></p></center>
<p>Dragon fruit has anti-aging effect
Antioxidants are essential in making your skin full and firm. This substance helps fight free radicals in the body - the cause of diseases like cancer. This fruit is a good source of antioxidants because it contains a lot of vitamin C. You can even apply a natural mask from dragon fruit with honey instead of anti-aging masks.
Dragon fruit helps prevent cancer
In addition to vitamin C, dragon fruit also contains carotene - a substance that can fight cancer-producing cells including reducing cancerous tumors. Moreover, lycopene - the red pigment for this fruit has been shown to slow down the risk of prostate cancer.
Promote cardiovascular health
This food has the ability to reduce the amount of cholesterol that is harmful to the body while increasing the healthy fats, thus helping the heart to function better. A study published in Pharmacognosy Research in 2010 found that eating a lot of dragon fruits will help reduce the risk of cardiovascular diseases and prevent hypertension. This magic fruit is a rich source of monounsaturated fats, good for heart health.
Dragon fruit contains lots of iron to help with blood
This may sound strange, but iron - the material needed for the body to produce hemoglobin - is abundant in dragon fruit. Hemoglobin, also known as hemoglobin, is a complex protein containing iron ions in red blood cells and makes up 33% of the red blood cell weight. This protein is responsible for transporting oxygen from the lungs to organs and transporting CO2 from organs to the lungs. Therefore, eating lots of dragon fruits will provide more iron for the body, increasing blood circulation.

 Prevent diabetes
The high fiber content of dragon fruit is extremely good for people with diabetes because fiber can help stabilize blood sugar levels by eliminating excess sugar. However, you need to consult your doctor if you have any dietary changes to make sure that this fruit is really right for you.
 Dragon fruit helps improve the digestive system
As you know, dragon fruit contains a lot of fiber which helps to improve the activity of the intestinal tract because the fiber can be easily absorbed through the digestive tract. Eating plenty of these foods will help you reduce your risk of symptoms like constipation and irritable bowel syndrome (IBS).

Dragon fruit will soothe sunburned skin
You can create your own skin-soothing complexions by mixing dragon fruit, cucumber and honey together. Because this fruit is rich in vitamin B3, applying this mixture will help moisturize and cool the tanned skin. In addition, each fruit contains a lot of water, 100g of fruit contains 80−90g of water, so eating will help replenish water for the body.</p>
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


