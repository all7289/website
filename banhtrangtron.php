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
		<p ><h3><strong><center><u>BANH TRANG TRON</u></center></strong></h3></p>
<p>Mix rice paper is a snack that has made the young people crazy. The toughness of the rice paper, the sourness 
of the mango, the bold taste of dried beef, the roasted and fragrant shrimp of onions, laksa leaves ... all combine to
 create a delicious dish that is hard to resist. So how to make rice paper mix is simple?
With just a few manipulations with easy-to-find ingredients, you can make delicious rice paper mix.
</p>
<p><h3><strong></strong></h3></p>
<center><p><img src="banhtrangtron1.jpg" width="500" height="400" /></p></center>
<p>
</p>
<p></p>
<p><h3><strong> presentation</strong></h3></p>
<ul>
<li><strong>Step 1: preparation</strong>
<ul>
	<li>1 package of rice paper. You buy at supermarkets or agents, dried goods stores are sold.</li>
	<li>Mango: 1 fruit</li>
	<li>Scallions, dry onions: 2-3 bulbs</li>
	<li>A bunch of laksa leaves</li>
	<li>Peanuts: 50g</li>
	<li>Dried beef: 50g</li>
	<li>Roasted shrimp</li>
	<li>3-4 quail eggs</li>
	<li>Spices: Soy sauce, satay, chili salt (can be easily found in supermarkets)</li>
</ul>
</li>
<li><strong>Step 2: Process materials</strong>
<ul>
	<li>Peanuts you bring roasted then rub the skin and split the seeds.</li>
	<li>Shredded beef jerky</li>
	<li>Rice paper cut into small pieces to taste.</li>
	<li>Laksa leaves you wash the roots and then chopped</li>
	<li>Green mangoes you peeled and then sliced or you grated.</li>
	<li>Quail eggs boiled then peeled to separate eggs.</li>
	<li>Onions dry, peel, rinse and slice into thin slices.</li>
	<li>Wash your shrimp and then dry roasted.</li>
</ul>
</li>

<li><strong>Step 3 : Cook</strong>

<p>First, put the pan on the stove and add some cooking oil to boil. Then add the green onions until
 fragrant until the scallions get up and the yellow onions are picked out into the bowl.

Next, you prepare a large bowl for rice paper. You continue to add mango, dry onions,
 onion fat, roasted shrimp, dried beef quail eggs in the same. Add 1 kumquat juice, 1 teaspoon 
 soy sauce, 1 teaspoon salt and chili mix well to make the rice paper soaked in the seasoning.
</p>
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


