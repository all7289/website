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
		<p ><h3><strong><center><u>CHUNG CAKE</u></center></strong></h3></p>
<p>	Banh chung is a traditional Vietnamese rice cake which is made from glutinous rice,
 mung beans, pork and other ingredients. Its origin is told by the legend of Lang Lieu,
 a prince of the last king of the Sixth Hung Dynasty, who became the successor thanks to
 his creation of banh chung and banh giay, which symbolized, respectively, the earth and 
 the sky. Considered an essential element of the family altar on the occasion of Tet, the
 making and eating of banh chung during this time is a well-preserved tradition of Vietnamese 
 people. Beside the Tet holiday, banh chung is also eaten all year round as Vietnamese cuisine.</p>
<p><h3><strong>Origin and symbol</strong></h3></p>
<center><p><img src="banhchung1.jpg" width="500" height="400" /></p></center>
<p>	According to the book (Extraordinary stories of Linh Nam) published in 1695, the creation
 of banh chung was credited to Lang Lieu, a prince of the last Sixth Hung Dynasty of the Hung 
 dynasty (c. 1712 - 1632 BC). It was said that in choosing a successor among his sons, the monarch
 decided to carry out a competition in which each prince brought a delicacy representing the sincerity
 for the ancestors on the occasion of the Tet, whoever could introduce the most delicious dish for the
 altar would become the next ruler of the country. While other princes tried to find the rare and delicious
 foods from forest and sea, the eighteenth prince, Lang Lieu, who was the poorest son of the Hung king, 
 could not afford such luxurious dishes and had to be content with everyday ingredients, such as rice and pork.
 Finally, he created one cake in the square form of earth called banh chung and one in the round form of sky 
 called bánh giầy from these simple ingredients. In tasting the dishes offered by his son, the Hung king found
 banh chung and bánh giầy not only delicious but also a fine representation of the respect for ancestors.
 Therefore, he decided to cede the throne to Lang Lieu and banh chung, bánh giầy became traditional foods
 during the Tet. Lang Lieu founded the Seventh Hung dynasty (c. 1631 - 1432 BC).
Considered an indispensable dish of the Tet, banh chung is placed in the family altars in
 order to honor the ancestors and pray them to support the family in the new year. Wrapped in a green
 square package, banh chung symbolizes the earth, the variant ingredients of banh chung which comes from 
 all the products of nature also emphasize the meaning of banh chung with Vietnamese people.
</p>
<p><h3><strong>Ingredients and presentation</strong></h3></p>
<center><p><img src="banhchung2.jpg" width="500" height="400" /></p></center>
<p>The required ingredients of banh chung are glutinous rice, mung bean, fatty pork and black pepper,
 salt, sometimes green onion, and nước mắm for spices. In the wrapping stage, one needs la dong, strings
 split from giang, one type of bamboo which has long node, and sometimes a square mold in wood so that banh
 chung can be wrapped in a better shape, la dong, which is popular only in the Southern Asia, can be substituted
 by banana leaves or even la bàng. La dong and giang strings have to be washed carefully in order to preserve the
 taste of the cake, giang strings may be soaked in salt water or steamed so that they can become flexible enough 
 for wrapping. People often choose high quality rice and bean for making banh chung, they are soaked in water for 2
 hours in case of mung bean and 12 to 14 hours in case of glutinous rice. The fat and lean pork is preferred for banh 
 chung because its fatty flavour well associates with the glutinous rice and mung bean. After being sliced in big parts,
 pork is mixed with pepper, onion and salt or nước mắm. People in Bắc Ninh once added sugar in this mixture of spices.
 The cake is wrapped in the following order. Firstly the giang strings and two la dong leaves are placed as the square
 base for the banh chung. After that, glutinous rice is stuffed in la dong, followed by mung bean, pork and finally
 another layer of rice so that bean and pork can be respectively in the center of the cake. All placed ingredients are 
 carefully wrapped in la dong and bound by giang strings in the square form. In order to get a near perfect square-shaped
 cake, the maker can use a mold of square form as the base for the wrapping. To keep the cake from mold or being spoiled,
 banh chung should be carefully wrapped as tight as possible.
The prepared cakes are tightly arranged in large pot, the pot is filled with fresh water and boiled for hours until
 they are done from the inside stuffing to outside. After cooling and unwrapping, the rice skin of banh chung turns 
 green because rice has absorbed the colour of la dong. One banh chung is often divided in 8 parts, usually by using 
 the very giang string which bound the wrap of the cake. As a cake formed from several ingredients, the taste of banh
 chung varies from part to part with different flavours of glutinous rice, pork, bean and even the wrapping la dong.
 Banh chung is often served with pickled onions or vegetables, chả lụa and nước mắm. After unwrapping, banh chung can 
 stay good for several days while a wrapped one can be kept for two weeks. Banh chung has the water activity value of
 about 0.95 and its pH is approximately
	</p>


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


