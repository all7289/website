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
<<div id="search">
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
		<p ><h3><strong><center><u>BANH MY KEP</u></center></strong></h3></p>
<p>Sandwiches (transcribed in English: sandwiches), are foods that usually have at least two slices of bread and sandwiches
, especially meat, seafood, or cheese along with vegetables or salads. Can bread be used, or can sweep butter, oil, mustard
 or other spices</p>
<p><h3><strong>Origin</strong></h3></p>
<center><p><img src="banhmykep1.jpg" width="500" height="400" /></p></center>
<p>The first form of burger is believed to have been attributed to the ancient Jewish sage Hillel, who is said to have sandwiched
 lamb and bitter herbs (maror) into a matzo (or unleavened flat bread) to celebrate the Passover. . The sandwich between the two 
 matzo pads reminds the Jews of the need to build Egyptian buildings. Therefore, the ancient Romans called this dish cibus Hilleli,
 or small meals of Hillel.
In the Middle Ages, large pieces of old bread called trenchers were used as plates. After the meal, this piece of dirty bread is
 given to the dog or beggar to eat, or is eaten by the first person. Trenchers lead to open-face sandwiches.
In many European languages, sandwiches have the same names as sandwiches (English) or sándwich (Spanish). In the Near East, 
the Mediterranean region, and other parts of Europe, meat, fruit, cheese, and condiments are sandwiched between sandwiches or
 pastries before the name appears long. This name first appeared in Edward Gibbon's diary, the author called "cold cuts of meat"
 a sandwich. It was named after John Montagu, 4th Earl of Sandwich, an English aristocrat in the 18th century, but he was not 
 the creator of this food or the one who made it popular. Mr. Sandwich is thought to like this food because it allows him to 
 continue playing cards, especially cribbage, when eating, while not having to dirty the cards because he eats meat with his bare hands.
In the 18th century, sandwiches were made popular by Montagu and remained largely Spanish food. Although it was initially considered
 to be for men to eat while gambling and drinking at night, sandwiches slowly began to appear in polite cases as a late-night meal of
 the rich. Sandwiches became very popular food in Spain and England in the 19th century, when there was heavy industry and the working 
 class needed fast, cheap, and easy-to-carry meals.
At this time, burgers began to be eaten outside of Europe. In the United States, sandwiches were originally advertised as a complex evening.
 In the 20th century, when bread became the foundation of American food, sandwiches became fast, cheap, and popular meals as they were in the Mediterranean.
</p>
<p></p>
<p><h3><strong> Presentation</strong></h3></p>

<iframe width="560" height="315" src="https://www.youtube.com/embed/dZg_wHmhozE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

<p></p>


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


