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
		<p ><h3><strong><center><u>QUA XOAI</u></center></strong></h3></p>
<p>Mangoes are a sweet fruit belonging to the genus Mango, including a lot of tropical fruits, grown primarily as edible fruit. The majority of species found in the wild are wild mangoes. All of them belong to the Anacardiaceae family. Mango is native to South Asia and Southeast Asia, from which it has been distributed worldwide to become one of the most grown fruits in the tropics. The highest densities of the genus Mango (Magifera) are in the west of Malesia (Sumatra, Java and Borneo) and in Myanmar and India. While other Mangifera species (eg horse mangoes, M. Foetida) are also grown on a more local basis, Mangifera indica - "ordinary mango" or "Indian mango" - is a mango that is usually only grown in many tropics and subtropics. It is native to India and Myanmar.It is the national fruit of India, Pakistan, the Philippines, and the national tree of Bangladesh. In some cultures, its fruits and leaves are used as suspects. Decoration ceremonies at weddings, celebrations, and religious ceremonies
</p>
<p><h3><strong>Origin</strong></h3></p>
<center><p><img src="xoai1.jpg" width="500" height="400" /></p></center>
<p></p>
<p><h3><strong> Description</strong></h3></p>
<center><p><img src="xoai2.jpg" width="500" height="400" /></p></center>
<p>Mangoes have been ranked as the "king of fruits" for hundreds of years in many Southeast Asian countries. Mangoes are native to South Asia and Southeast Asia, with the scientific name Mangiferaindical. Mango is one of the industrial crops for fruit. Mangoes when ripe will vary in color (yellow, orange, purple ...) and size.

From the Oriental Medicine point of view, ripe mangoes have a sweet, average taste. If mangoes eat a lot, they will be 'emit heat', children suffer from heat rash, diarrhea (due to being too sweet), but ripe mangoes if eaten in sufficient quantities will help with laxative. Particularly green mango fruit, sour, causing constipation. When eating mango when hungry, it will cause gastric juice to rise, facilitating the bowel clotting.

According to traditional medicine, all types of mangoes in Vietnam can be used as medicines. The effect of ripe mangoes in treating disease is to help stop bleeding, diuretic, used to treat coughing up blood, intestinal bleeding, toothache, menorrhagia, except helminths ...</p>
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


