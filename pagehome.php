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
<link rel="stylesheet" type="text/css" href="pagestyle.css">
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
<div class="content">
	<div id="article">
		<p><h3><strong><center><u>DISCOVER THE FEATURES OF VIETNAMESE FOOD</u></center></strong></h3></p>
<p>		Vietnamese cuisine is increasingly diverse and plentiful when it has both absorbed the quintessence of the world and inherited and promoted the outstanding characteristics of the nation. It is also thanks to this, that our country's cuisine has increasingly asserted its position in the cuisine of the world, when continuously there are high-ranking dishes in prestigious list of votes.

The characteristics of Vietnamese cuisine are not only reflected in the unique way of cooking, the combination of ingredients or seasoning. But the essence of Vietnamese cuisine is also expressed through the way of eating, enjoying the Vietnamese people and the unique culture of the North, Central and South. Here, let's CET learn more about these features offline!</p>
<p><h3><strong>Unique features in the way of processing</strong></h3></p>
<center><p><img src="1.jpg" width="500" height="400" /></p></center>
<p>		Because, as the cradle of a long-standing rice civilization, from daily meals to festivals and parties, Vietnamese menus cannot afford to be absent of rice or dishes made from rice. , sticky. Besides, Vietnamese food is characterized by its low fat content because it is mainly made from vegetables, tubers, fruits and does not use much meat. Moreover, the methods of processing dishes are also varied from steaming, boiling, stewing, stocking, baking or re-eating to preserve the natural flavor of the ingredients.
 
If you notice, Vietnamese people have many different sauces corresponding to different dishes. The dipping sauce is made with a special recipe, making the dish bold. Not only that, the seasonings or ingredients are used in a harmonious way, in accordance with the principle of "Yin and Yang development and the five elements of mutual birth". Therefore, the dish not only stops at the "full stomach" but it is also effective remedies.</p>
<p><h3><strong>Essence in the way of eating</strong></h3></p>
<center><p><img src="2.jpg" width="500" height="400" /></p></center>
<p>		Vietnamese people enjoy food not only by taste but also by the five senses. First, eat with your eyes, which means the dish must be presented beautifully, retaining the characteristic colors of the ingredients. Next, eating with the nose, the aroma of the dish must rise and spread into the air. Then, eat with your ears, the crisp "chrome" sound of braised steamed rice or the "sop, xeo" sound of the xeo cake will create a bit of poetry during enjoyment. And finally, it is the tongue to feel the taste of the dish.
Unlike other countries, Vietnamese people like the atmosphere and warmth of the whole family, so they usually serve all dishes and share them with anyone who likes to eat. However, there are some "unwritten rules" while eating rice that everyone should know, such as "eat pot, sit looking" or "eat chew, say to think" ... Not only encapsulated in the family, Vietnamese cuisine also shows a very clear sense of community. You will easily see the image of people sharing the same cup of sauce or the same bowl of soup.</p>
 
<p><h3><strong>Excellent taste 3 regions</strong></h3></p>
<center><p><img src="3.jpg" width="500" height="400" /></p></center>
<p>      Northern cuisine has a moderate taste, not too rich or spicy, sweet and fat but mainly uses diluted fish sauce and shrimp sauce. Referring to Northern cuisine, Hanoi must be mentioned with famous dishes such as bun cha, vermicelli, bean vermicelli, Thanh Tri spring roll ...
Different from Northern cuisine, the taste of Southern food tends to be sweet and spicy. Due to the influence of Chinese, Cambodian and Thai cuisine, southern cuisine is very rich and popular. It can be mentioned as: Snakehead grilled fish trui, braised fish, sour fish snakehead soup, pancakes, banh khot, cho ca fish sauce, three-dimensional sauce, beef mussel sauce ... And "pho" is considered a moist dish Vietnamese food in the eyes of foreign tourists
The characteristic of Central cuisine is a rich flavor with many spicy and salty dishes. Central dishes are often very picky in processing and always have vibrant colors. Especially Hue cuisine, due to the influence of royal cuisine, the dishes often require very meticulous and ingenious as well as the presentation of the number of dishes.</p>
<p><h3><strong>summary</strong></h3></p>
<p>		Through the article above, hope that you have better understand the essence of our culinary culture of Vietnam. If given the chance, do not forget to enjoy all these delicious dishes!
Today's cuisine not only aims to nourish people but it also acts as a cultural bridge to bring the nations of the world together.</p>

	</div>
</div>
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


