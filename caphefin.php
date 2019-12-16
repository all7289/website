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
		<p ><h3><strong><center><u>CAPHE FIN</u></center></strong></h3></p>
<p>Travelers coming to Vietnam are always craving for the strong taste of the famous Vietnamese coffee, like visiting Japan to experience tea culture. In Vietnam, coffee is more than a beverage; it’s a way of life. The people here know how to drink, to appreciate and take the coffee culture as an integral part in their daily life. Here in Asia, we do not see many countries like that.
</p>
<p><h3><strong>Coffee production in Vietnam</strong></h3></p>
<center><p><img src="caphefin1.jpg" width="500" height="400" /></p></center>
<p>Since the start of the 20th century, coffee production has contributed a significant amount of income for the economy. By the late 1990s, Vietnam had ranked second in coffee production, surpassed only by Brazil. However, production was mainly concentrated on Robusta beans with rather poor quality. In recent years, more focus has been putting on improving the quality of coffee with the widespread planting of Arabica beans, and especially, the infamous “weasel coffee” (ca phe chon in Vietnamese). This specialty refers to the seeds of coffee berries when they’ve been eaten and defecated by Asia palm civet! That being said, weasel coffee has a distinctive fragrant flavor that is favored by many Vietnamese as well as coffee lovers worldwide.

In Vietnam, the heartbeat of coffee production is found in the vast Central Highland. There are numerous large producers here, most notably Trung Nguyen, Vinacafe and Highlands Coffee, the first private company to be registered by an Overseas Vietnamese (a Vietnamese American named David Thai). Besides, several international players including Nestle, who has been involving in the industry following economic liberalization in the 1990s.
</p>
<p><h3><strong> How Vietnamese drinks coffee</strong></h3></p>

<p>The way that coffee is roasted, brewed and enjoyed in Vietnam is different from the rest of the
 world. Here, coffee is slowly roasted for 15 minutes with low heat while around the world, machine
 is often used for the roasting process. While machines are also commonly used to make a cup of coffee
 worldwide, in Vietnam, they load coffee into a filter. It is then left to drip for a much more
 intense flavor than an electric brewer. This is also how traditional “ca phe phin” is made.
 Before, during and after work, Vietnamese people often take a cup of nau (coffee with condensed milk) or den (black coffee). In the Northern Vietnam, when winter comes, people often use nau nong or den nong (nong means hot). But overall, den da (iced black coffee) and especially nau da (iced coffee with condensed milk) are the more regular choices. When French colonists first introduced coffee into Vietnam in the late 19th century, there were limitations on fresh milk’s availability. As a result, the French and the Vietnamese people began to use sweetened condensed milk to go with dark roasted coffee. Gradually, this becomes a tradition for coffee drinking in Vietnam.  
 </p>
 <iframe width="560" height="315" src="https://www.youtube.com/embed/SijXazsElZQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	<p><h3><strong>How to experience Vietnamese coffee</strong></h3></p>
<center><p><img src="caphefin2.jpg" width="500" height="400" /></p></center>
<p>
If you’ve never tried Vietnamese coffee before, your first time will be surely memorable due to the strong, liquor-like flavor. Only the brave should try the den (black coffee), the other should stick with the nau (coffee with condensed milk) for a smooth and fragrant taste. There’re also some quite different ways to enjoy coffee in Vietnam such as egg yolk coffee or yogurt coffee, which I assure you taste better than they may sound. Be sure to try some of them in your next Vietnam tours. With the arrival of several international coffee powerhouse, including Starbucks, some people are afraid that the future generations in Vietnam will put their national coffee into oblivious. Let’s hope that will never happen and traditional Vietnamese coffee remains an important part of the cultural experience in any Vietnam culinary tours.
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


