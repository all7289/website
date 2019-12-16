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
		<p ><h3><strong><center><u>NEM</u></center></strong></h3></p>
<p>Spring rolls or spring rolls, spring rolls is the name of a famous dish of Vietnamese and other countries in the world. In the Central region, this dish is often called ram (particularly in Thanh Hoa, called cha cha), and in the South, it is called spring rolls. Nem wrapped in Southern style is called Saigon spring rolls; Originating in China in dimsum dishes and made from easy-to-find ingredients, simple implementation.
</p>
<p><h3><strong>Origin</strong></h3></p>
<center><p><img src="nem1.jpg" width="500" height="400" /></p></center>
<p>
On the day of spring, people use wonton wrapper to wrap lettuce and make cakes in spring or spring rolls. People eat food and pray for good health. It is called "spring roll" and literally becomes everyday food. Spring rolls are filled with dry and fried dough and fried. It evolved from the custom of eating spring dishes on spring days. In the Tang Dynasty, the recipe for spring rolls was developed and changed.

In the Yuan Dynasty, Anonymous Anthropology compiled a complete work on the interior, recording the composition of a spring rolls: "Delicious spring rolls with walnuts, pine nuts, peaches, nuts. lotus, dried lotus meat, dried persimmons, cooked clams, cooked chestnuts, and Ren berries, on all chopped chestnuts, with honey, cream and mashed mutton, ginger, salt, onions fried and fried, wrapped in wonton wrapper or thinly coated wheat flour, using golden fried oil. "This is the spring roll method. There are similar records in the Ming formula.

Spring rolls are most commonly eaten in China although over time, these delicious appetizers have begun to be enjoyed around the world. Spring rolls are a refreshing change from the usual egg roll; They are also great for people who are on a strict diet but still desire something delicious and interesting.

Spring rolls have a long history in China. It is said that flour coating dates back to the Dong Jin era, when people would make thin cakes of flour and eat them with vegetables on the start of spring. The cakes are called spring dishes at that time. Later, the spring dish evolved into spring cake. During the Ming and Qing dynasties, there was a custom of biting in the spring, which meant catching the spring by eating spring cakes. The practice is said to avoid disaster and evil. Along with improving cooking skills, spring cake grows into spring rolls, which are smaller in size. Spring rolls are included in the court's snacks.

Traditional spring rolls often have main ingredients are pork, shrimp, chopped crabs, water-drained beanstalks, mushrooms, vermicelli and some common spices of Vietnamese cuisine such as scallions, pepper, fish sauce, etc. Roll with rice paper and deep fry.

Spring rolls are often served with mixed fish sauce, pickles and salads, herbs such as basil, basil, lettuce, ...

In the North, there are also fried spring rolls wrapped in squares instead of cylinders (like Hai Phong square spring rolls). Spring rolls are also often served with Hanoi bun cha.

In the South, sometimes spring rolls are served with leafy vegetables and are easily found in the garden such as toads, clones, basil, blood bone (or chancre), etc. called wild vegetables. Spring rolls can also be eaten with noodles. Bun bo nam bo is similar to bun bo nam bo, but instead of barbecue with spring rolls.




</p>
<p></p>
<p><h3><strong> presentation</strong></h3></p>
<ul >
<li >Nem: Cut meat and mince or mince. Chopped vegetables, cut just rolled rolls. Vermicelli (soaked in water), wood ear, mushrooms soaked in water (if fresh mushrooms do not need to soak), washed and chopped. Chopped onion. All mix well with eggs and spices (salt should be added very little because the rice paper is already salty).
 </li>
<li>
Nem package: Soft spring rolls, cut hard edges, then cut to fit the desired length of spring rolls, usually about 3 burning (slang) hands; Fill the ball into a ball (take care not to tighten the hand). And if using wonton shells just remove each wonton shells and pack as wrapping rolls.
</li>
<li>Frying spring rolls: Put in hot oil pan (oil medium face spring rolls, do not give too much, spring rolls will be exploded and sprung edge), to reduce heat, return to hands until spring brown evenly, take out hot to eat together with a mixture of fish sauce including lemons (remove the seeds to prevent the sauce from being bitter, garlic, chili (remove the seeds, minced meat), the amount of sugar to dissolve in the water and fish sauce until the chili and garlic float to the top. surface) and herbs: cilantro, perilla, cinnamon, laksa leaves, lettuce, basil, especially marjoram and basil (dog basil), lettuce. Can be eaten with small noodles. Or if you eat Chinese style, just dip soy sauce or black sauce, ketchup or mayonnaise, depending on the taste.
 </li>

</ul>
<iframe width="560" height="315" src="https://www.youtube.com/embed/9fi6-ujC5W8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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


