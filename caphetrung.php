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
		<p ><h3><strong><center><u>CAPHE TRUNG</u></center></strong></h3></p>
<p>
</p>
<p><h3><strong>Origin</strong></h3></p>
<center><p><img src="caphetrung1.jpg" width="500" height="400" /></p></center>
<p>Egg coffee is a Vietnamese-based beverage made from coffee (Robusta coffee) with chicken eggs (with added honey) and sweetened condensed milk. "Giang Coffee" is Hanoi's oldest and most famous coffee shop serving this drink. According to the current owner of the cafe, egg coffee was born in the 1950s in Hanoi, due to the scarcity of fresh milk at that time, so his father, the first owner of the shop used the yolk. Chicken eggs as an alternative, later, this is a specialty of Hanoi.
</p>
<p></p>
<p><h3><strong> presentation</strong></h3></p>

<p>Ingredients to make egg coffee include fresh chicken eggs, sugar, milk and coffee. Egg yolk is beaten by hand with milk, granulated sugar, then poured boiling coffee. Coffee cup bobbing in a fragrant brown. Egg coffee is made from whipped egg and blended with coffee, blended very well, to just pour hot coffee into the beaten egg, will create a beautiful and fragrant foam layer. Diners always have a small spoon to enjoy the ice cream foam on top like an appetizer before drinking coffee below.

Egg coffee with yellowish color in a small cup. To keep the drink hot, the waiter places the coffee cup in a bowl of warm water. After being poured through the creamy whipped cream from the egg, the strong coffee taste lingers on the bottom of the cup, giving it a richer flavor. Previously only beat eggs by hand, so it takes a lot of time and the floss of the egg can not be equal to using the machine so only egg coffee is hot. Today, when the egg is very finely beaten, fluffy, smooth with a machine, there is an additional coffee of ice egg, cocoa cocoa, egg green bean, matcha (tea powder) egg ... all serve either hot or ice, depending on follow each person's taste.</p>
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


