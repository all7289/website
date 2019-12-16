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
		<p ><h3><strong><center><u>SAU RIENG</u></center></strong></h3></p>
<p>
</p>
<p><h3><strong>usefullness</strong></h3></p>
<center><p><img src="saurieng1.jpg" width="500" height="400" /></p></center>
<p>According to a study by University of Tsukuba, when eating durian, you should not drink alcohol because the high ratio of sulfur in durian limits the activity of aldehyde dehydrogenase, reducing the body's ability to filter toxins from alcohol by 70%.</p>
<p><h3><strong> Description</strong></h3></p>
<center><p><img src="saurieng2.jpg" width="500" height="400" /></p></center>
<p>Durian genus (scientific name: Durio) is a genus of the genus Camemaceae (Malvaceae), (although some taxonomists place Durio into a separate family, Durionaceae), which is widely known in Southeast Asia.

Durian fruit is considered by many people in Southeast Asia to be the "king of fruits". It is characterized by its large size, strong smell, and numerous sharp spines surrounding the shell. The fruit can reach 30 centimeters (12 in) in length and 15 centimeters (6 in) in diameter, usually weighing one to three kilograms (2 to 7 lb). Depending on the species, the fruit is oblong to round, the skin color is green to brown, the flesh color is light yellow to red.

The flesh is edible, and emits a characteristic odor, heavy and intense, even when the skin is intact. Some people find durian has a pleasant sweet aroma, but others are unbearable and uncomfortable with the smell. The scent of durian produces reactions from delirium to intense disgust, and is described as the smell of rotten onion, turpentine or sewage. Because the smell of durian is so long-lasting, it is banned from being used in some public transport hotels and hotels in Southeast Asia.

Durian originated in Southeast Asia and has been known to the Western world for about 600 years. In the nineteenth century, English naturalist Alfred Russel Wallace described its meat as "an almond flavored custard." Fruit meats can be eaten at different ripenesses, and are used to flavor a variety of sweet and savory dishes in Southeast Asian cuisine. Durian seeds can also be eaten after cooking.

30 species of Durio have been identified, at least 9 of which have edible fruits. Durio zibethinus is the only species available on the international market: other species are sold in their local areas. There are hundreds of durian varieties; Many customers prefer only certain varieties to be sold at high prices in the market.</p>
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


