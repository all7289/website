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
		<p ><h3><strong><center><u>DUA</u></center></strong></h3></p>
<p>Coconuts, or coconut palms, (the two-part nomenclature: Cocos nucifera), is a species of the Cau (Arecaceae) family. It is also the only member of the Cocos genus and is a large, single-stemmed tree (sometimes called the coconut palm group) that can grow up to 30 meters tall, with single leaf lice feathers, petioles and stems. main tendon 4–6 m long lobes with level 2 tendon may be 60–90 cm long; attached leaves often turned into net sheaths to embrace the trunks; Old leaves when shed leaving scars on the body.
</p>
<p><h3><strong>Origin</strong></h3></p>
<center><p><img src="dua2.jpg" width="500" height="400" /></p></center>
<p>
The origin of this plant is a controversial topic, in which some scholars argue that it originated in Southeast Asia while others claim that it originated in northwestern South America. . Fossils found in New Zealand indicate that small plants similar to coconut trees have grown in the area about 15 million years ago. Even earlier fossils have been discovered in Rajasthan and Maharashtra, India. Regardless of its origin, coconut is popular throughout the tropics, probably thanks to the help of seafarers in many cases. Its fruit is light and floats on the surface of the water and may have been widely distributed by ocean currents: fruits even collected at sea as far as Norway are capable of sprouting (under appropriate conditions). ). In the Hawaiian archipelago, it is thought that coconut was brought in from Polynesia, for the first time brought by Polynesian seafarers from their homeland in the southern Pacific region.
</p>
<p></p>
<p><h3><strong> How to use </strong></h3></p>
<center><p><img src="dua1.jpg" width="500" height="400" /></p></center>
<p>
All parts of the coconut and the coconut tree can be used. Coconut is also a relatively large fruit tree (up to 75 fruits per year); so it has considerable economic value. The name of the coconut in Sanskrit is kalpa vriksha, which can be translated into "the tree that gives everything necessary for life". In Malay, coconut is called pokok seribu guna, which means "tree with thousands of uses". In the Philippines, coconut is generally called the "Tree of Life".


Coconut tree viewed from below
Uses of different parts of coconut include:

The pulp (rice) of white coconut is edible and is used in fresh or dried form in some dishes. Desiccated coconut is the raw material of coconut oil production.
Coconut water is located in the inner compartment of the coconut and contains substances such as sugar, protein, antioxidants, vitamins and minerals, which provide and create good isotonic electrolyte balance as well as a food supplement. Nursing. Coconut water is used as a beverage in many tropical regions. Coconut water is sterile when the coconut is not added, and can be used as a vein for infusion (see PMID 10674546). It is also used to make a thick dessert called nata de coco. Sometimes dried coconut water is also concentrated into a dark brown substance called coconut water, which is used as a food coloring instead of sugar made from sugar (glucose).
Ornamental plants: Strange coconut trees (due to mutations) are grown as ornamental plants, mainly in the Philippines, where it is called macapuno.
Coconut milk, also known as coconut milk, (about 17% fat) is made from grated coconut, mixed with hot water or hot milk. Coconut milk is a staple of Southeast Asian and Vietnamese cuisines. The residues of copra meal from the production of coconut milk are used as animal feed.
Coconut candy is a popular sweets in Vietnam, the main material is concentrated coconut milk mixed with pineapple leaf, Durian or Chocolate.
Coconut jam is made from shredded coconut and slug with granulated sugar to dry on Tet holiday in Vietnam.
Coconut cream is the layer that emerges when coconut milk is cooled.
Coconut resin is obtained from slitting coconut flower clusters that are fermented to produce coconut wine (called tuba in the Philippines).
Coconut shells are sometimes used as part of some musical instruments such as Chinese lakes and lakes or Vietnamese shells, which are smashed into each other to create a horse-like sound effect. Coconut shells are also used to scoop water and to make materials for handicrafts.

Coconut Siamese fire
Coconut fiber is used to make ropes, ropes, carpets, brushes, boat mosaic as well as compaction material; It is also widely used in horticulture as a filler in fertilizers.
Coconut husks and coir can be a good fuel source for charcoal production. A rare type of coconut in the South has fresh coir that gives water quite sweet when chewing, while other species give a bitter taste.
Leaves are a source of roofing materials, some types of baskets and coconut brooms
The midribs of the leaves (leaks) have a hardness that is suitable for making skewers (for example, for meat roasting) in cooking.
The young shoots on the top of the coconut tree are edible and are sometimes collected for edible vegetables (although this practice will kill the coconut tree).
The inside of the growing young leaves can also be harvested as a coconut heart and it is considered a specialty. This type of harvesting also kills coconut trees. Coconut heart is often eaten in salads; Such salads are sometimes called "millionaire salad".
Coconut wood can be used as a handicraft or as a material for some special constructions (the most famous is the Coconut Palace in Manila). Hawaiians also hollow the coconut tree trunks to make drums, containers or small boats. It is also possible to make a trough
Coconut roots can be used as dyes, antiseptics to gargle or cure dysentery. It is also used to brush teeth.
The jar of coconut is the core of the coconut trunk, sometimes also used as a dish.
Old coconut root made sticky rice
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



