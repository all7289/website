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
		<p ><h3><strong><center><u>BUN CHA</u></center></strong></h3></p>
<p>Bun cha is a dish with noodles, grilled pork pies on charcoal and a bowl of sweet and sour fish sauce. The dish originating from Northern Vietnam, is the most durable gift of Hanoi, so it can be considered as one of the typical specialties of Hanoi cuisine. Bun cha has a similarity to a vermicelli noodle dish in Central and South, but the mixed fish sauce has a lighter flavor.
</p>
<p><h3><strong>Origin</strong></h3></p>
<center><p><img src="buncha1.jpg" width="500" height="400" /></p></center>
<p>
Bun cha usually have two types of patties at the same time: Pork ball and patties, although depending on the food preferences, sometimes customers choose only one of them. Pork ball is made from lean minced pork shoulder, squeezed into balls, mixed with salt, pepper, fish sauce over 35 protein, sugar, finely chopped dry onions, vegetable oil or water fat. Depending on the freshness of the meat, after mixing spices, if the meat seems to be slightly dry, add a little oil so that the meat pieces easily stick together when kneading into a 2-finger sized piece and press to slightly flatten. If you prefer more sophisticated, horizontal wrap each piece is a banana leaf and then baked, the patties will not be browned and fragrant.

Using lean shoulder meat to make grilled meat is a traditional choice because lean shoulders are firm but do not have as much texture as thigh meat, not as soft as butt meat ... this makes the meat when minced. to straighten it out, make it a little bit stronger than to use other pieces of meat

Grilled chopped meat usually use underarm or bacon (thinly sliced), marinated in spices similar to patties and grilled on charcoal. Depending on the taste of each person, you can call all the pieces or rolls to eat with noodles. Piece of meat is usually filtered to remove the skin (skin) so that when it is baked, it will not be hard and burnt. If you use lean meat (butt meat, tenderloin) when grilled, it will not be delicious because it is dry and hard

Meat after being marinated is put on skewers or grates, grilled on charcoal. When the meat is cooked and fragrant, put in a bowl of fish sauce mixed with sweet and sour taste, together with or green papaya (or kohlrabi, carrots) mixed with vinegar. Bowl of fish sauce can be eaten while slurry, served with noodles and raw vegetables (including salads, coriander, basil Lang, coriander, marjoram, perilla, bean sprouts).

Today, bun cha is a bun cha But bun vermicelli (each squeezed into a small bun, just once picked) is the traditional material. The vermicelli patties with a little fish sauce and a hint of vermicelli leaves are part of the old Hanoi, praised by many writers such as Vu Bang and Thach Lam.

How to make bun cha is simple, but to make a delicious bun depends on the experience and secrets of the family, especially important is how to mix the sauce.
</p>
<p></p>
<p><h3><strong> presentation</strong></h3></p>
<p>Bun cha usually have two types of patties at the same time: Pork ball and patties, although depending on the food preferences, sometimes customers choose only one of them. Pork ball is made from lean minced pork shoulder, squeezed into balls, mixed with salt, pepper, fish sauce over 35 protein, sugar, finely chopped dry onions, vegetable oil or water fat. Depending on the freshness of the meat, after mixing spices, if the meat seems to be slightly dry, add a little oil so that the meat pieces easily stick together when kneading into a 2-finger sized piece and press to slightly flatten. If you prefer more sophisticated, horizontal wrap each piece is a banana leaf and then baked, the patties will not be browned and fragrant.

Using lean shoulder meat to make grilled meat is a traditional choice because lean shoulders are firm but do not have as much texture as thigh meat, not as soft as butt meat ... this makes the meat when minced. to straighten it out, make it a little bit stronger than to use other pieces of meat

Grilled chopped meat usually use underarm or bacon (thinly sliced), marinated in spices similar to patties and grilled on charcoal. Depending on the taste of each person, you can call all the pieces or rolls to eat with noodles. Piece of meat is usually filtered to remove the skin (skin) so that when it is baked, it will not be hard and burnt. If you use lean meat (butt meat, tenderloin) when grilled, it will not be delicious because it is dry and hard

Meat after being marinated is put on skewers or grates, grilled on charcoal. When the meat is cooked and fragrant, put in a bowl of fish sauce mixed with sweet and sour taste, together with or green papaya (or kohlrabi, carrots) mixed with vinegar. Bowl of fish sauce can be eaten while slurry, served with noodles and raw vegetables (including salads, coriander, basil Lang, coriander, marjoram, perilla, bean sprouts).

Today, bun cha is a bun cha But bun vermicelli (each squeezed into a small bun, just once picked) is the traditional material. The vermicelli patties with a little fish sauce and a hint of vermicelli leaves are part of the old Hanoi, praised by many writers such as Vu Bang and Thach Lam.

How to make bun cha is simple, but to make a delicious bun depends on the experience and secrets of the family, especially important is how to mix the sauce.</p>
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


