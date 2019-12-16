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
		<p ><h3><strong><center><u>QUA MANG CUT</u></center></strong></h3></p>
<p>Rambutan (two-part nomenclature: Nephelium lappaceum) is a species of tropical plants in Southeast Asia, belonging to the Sapindaceae family. The name rambutan (or rambutan) symbolizes the hairy state of the fruit of this tree. The coat is also a basic feature of the Chinese name: pink buttercup, or Malay: rambutan (furry fruit). Western countries borrow Malay's voice to call rambutan trees / fruits: English, German called rambutan, French called ramboutan ...
</p>
<p><h3><strong>Origin</strong></h3></p>
<center><p><img src="chomchom1.jpg" width="500" height="400" /></p></center>
<p>Rambutan tree is a plant originating in Southeast Asia. Today it is grown in latitudes from 15 ° south to 15 ° north including Africa, Oceania, Central America and especially increasing in Australia and the Hawaiian Islands. Rambutan trees are suitable for areas that are not flooded. Therefore, in Vietnam, rambutan is grown mainly in the provinces of the basin of Dong Nai, South Central, and DB. Mekong River.
</p>
<p><h3><strong> Usefullness </strong></h3></p>
<center><p><img src="chomchom2.jpeg" width="500" height="400" /></p></center>
<p>Rambutan is a fruit tree either eaten fresh, or canned in various forms, for storage or export. Rambutan seeds have a high oil content so they are also used to make cooking oil or soap. Rambutan plants and roots can also be used for the manufacture of pharmaceuticals and coloring. In Vietnam, rambutan gardeners have a relatively high income compared to other crops.
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


