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
		<p ><h3><strong><center><u>TRA SUA</u></center></strong></h3></p>
<p>Bubble milk tea or Taiwan milk tea is a drink made from green or black tea, which has been developed by the beverage shops in Taichung, Taiwan since the 1980s. shake, a thin layer of water bubbles are formed on the surface. Because of this feature, bubble tea is used to order any tea that is shaken during preparation
Bubble milk tea is generally divided into two categories: fruit-flavored milk tea or milk tea. Milk tea can use creams from milk or not from milk. Originating from Taiwan, bubble tea is particularly popular in some Asian countries like China, Hong Kong, Thailand, Malaysia, Philippines, Vietnam and Singapore. This drink is also popular in Europe, Canada and the United States. Bubble milk tea can also refer to Cantonese hot milk tea mixed with tapioca grains.
</p>
<p><h3><strong>Origin</strong></h3></p>
<center><p><img src="trasua1.jpg" width="500" height="400" /></p></center>
<p>Pearl milk tea originated in Taichung, Taiwan in the early 1980s. Nancy Yang, a Taiwanese tea shop owner, tried adding fruit, syrup, sweetened sweet potato, and pearls to milk tea. Although this drink was not popular at first, some Japanese TV stations caught the attention of business people. In the 1990s, bubble tea became popular in most Southeast Asian countries.

In the late 1990s, bubble tea was popular in most North American cities with many Asians. This trend started in SanGabriel, California and quickly spread throughout Southern California. This drink has received much attention from the media, both on the national radio (National Public Radia show Morning Edition) and the Los Angeles Times newspaper. Bubble milk tea has spread internationally through the Chinatowns and overseas Asian communities. In the US, tea brands such as Quickly and Lollicup have grown in suburbs, especially in regions with large Asian populations. Bubble tea also appears in most European cities like London or Paris.</p>
<p><h3><strong> Description</strong></h3></p>
<center><p><img src="trasua2.jpg" width="500" height="400" /></p></center>
<p>Taiwanese milk tea was introduced to Vietnam in the early 2000s but it took a few years later for this drink to be popular among young people. Roadside stalls and strollers rarely missed students while holding a cup of milk tea while chatting happily. But after some time, the trend of milk tea gradually cooled down. Many stores have to be liquidated or closed, others still struggle to survive. This is all because the tea information does not originate, and the pearls made of polymer resurfaced around the end of 2009.

By 2012, Taiwanese brands landed in Vietnam, which was still a day-old milk tea but served in a completely new style: milk tea with topping, developing a chain-shape, space-setting design. no less methodical than any famous coffee shop. And the glory of Taiwan's milk tea gradually returns, especially around the end of 2016 - early 2017.

According to a survey by Lozi, in 2017, Vietnam's milk tea market witnessed an explosion with 100 big and small brands co-existing and over 1,500 selling points, including big brands from Taiwan such as Ding. Tea, Gong Cha, BoBaPop, Tien Huong ... This survey also shows that milk tea is becoming a popular beverage in Vietnam when 53% of people are confirmed to drink milk tea at least once a week.

In terms of consumers, milk tea is characterized by a sweet, greasy taste, suitable for many types of customers, not only students, but also children and office workers. Besides, milk tea continuously "transforms" to meet all the needs of customers, from cream cheese tea lines, fruit tea to low-fat tea. Another plus point that makes milk tea popular is the service style. Instead of small shops, trolleys like in the past, milk tea is designed into a spacious space, with fixed seats, air conditioning ...</p>
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


