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
		<p ><h3><strong><center><u>PHO BO</u></center></strong></h3></p>
<p>Pho is a traditional dish of Vietnam, can also be considered as one of the typical dishes for Vietnamese cuisine. The main ingredients of pho are pho noodles and broth (or broth as the Southern name) with thinly sliced ​​beef or chicken. There are also spices such as soy sauce, pepper, lemon, fish sauce, chili ... These spices are added depending on the taste of each user. Pho is often used as a breakfast or at night, but in big cities this dish is enjoyed throughout the day. Provinces in southern Vietnam and some other regions of pho are presented with plates of herbs such as onions, bean sprouts and coriander leaves, basil, of which coriander leaves are typical leaves of pho; However, in Hanoi, there is no plate of this raw vegetable. Pho is usually beef or chicken noodle soup, but sometimes there are other variations such as pork noodle, shrimp noodle, frog noodle, though not very successful.

Pho soup water is usually used for boiling water from beef bones (if the housewife does not have much experience to deodorize beef bones, it can be replaced with pork bones), with many spices including cinnamon, star anise, ginger. Roast, cardamom, cloves, coriander seeds, dry roasted onions. The meat used for pho is beef (with all kinds of beef, dull, dandruff is re-cooked or fully cooked) or chicken (old chicken boiled, tear meat for sweet sweetness). "Pho" is traditionally made from rice flour, coated into thin sheets and cut into fibers. Pho is always enjoyed when it is hot. To get a good bowl of pho depends very much on the experience and traditional secrets of the processor, which is especially important for the pot of broth.
</p>
<p><h3><strong>Origin</strong></h3></p>
<center><p><img src="phobo1.jpg" width="500" height="400" /></p></center>
<p>Pho is often said to have been born and shaped at the beginning of the 20th century. Regarding the first appearance in Vietnam, people have two different views: Nam Dinh and Hanoi, this is also the place to make dishes. This meal became famous.

Regarding the origin of the dish, there is a view that Pho originates from a Cantonese dish called "cool ykk phat" (Han Viet sound is "Nguoi Phan Phan").

Another theory is that Pho is derived from the method of French pot-au-feu beef stew (pronounced as "pho pho") combined with spices and herbs in Vietnamese cuisine. Male.

It was also suggested that pho was originally derived from the "stir-fried buffalo" dish (using vermicelli noodles) of Vietnam, which was later transformed into a "stir fried beef" using spring rolls.

The birth age of pho is not officially registered. Vietnamese dictionaries such as Vietnamese - Portuguese - Latin Dictionary of Alexandre de Rhodes published in 1651 do not have the word "pho". So is Huynh Tinh Cua (1895) and Genibrel (1898). Noodle soup was officially published for the first time in the dictionary of Vietnam (1930) initiated by Khai Tri Tien Duc Association: "Food with sliced ​​bread cooked with beef". This reinforces the argument that pho can only be born between 1900 and 1907.

In 1939, chicken noodle soup appeared, because then there were two days a week: Monday and Friday there was no beef sold. It is not clear why this problem is present, but it is probably a cause that cannot be ignored because cattle slaughtering was always restricted during feudal times, because cattle were still the main pulling force for Vietnam's wet rice agriculture. Many beef noodle shop owners insist on closing for two days without beef during the week, but that doesn't stop chicken noodle from growing. Since 1939, the two lines of beef noodle soup and chicken noodle soup officially dominate the hearts of Vietnamese diners
</p>
<p></p>
<p><h3><strong> presentation</strong></h3></p>

<center><p><img src="phobo2.jpg" width="500" height="400" /></p></center>
<p>
<p><strong>Water use</strong></p>
<p>In pho, the processing of broth, also known as soups. This is the most important stage. The broth of the traditional Pho is to be simmered from the beef bones of the cow along with some spices. The bones must be washed, shave off any meat that clings to bones, and cook in cold water. The bone broth must first be poured to prevent the broth from being contaminated with the odor of cow bones, the next broth will be used as broth. Roasted ginger and onions are also added. The fire is turned on high to bring water to a boil. When the water has boiled, reduce the fire and start removing the foam. Once you have removed the foam, add some cold water and wait for the water to continue boiling to remove the foam ... Keep doing so until the water is clear and there is no residue in the foam. Then, add some spices and adjust the heat so that the pot of water just boils to keep the water from becoming cloudy and the sweetness from the bone has enough time to dissolve into the broth. The delicious taste of the broth is mainly determined by spices. However, the formula of each type of broth specific for each pho is kept quite secret. However, it can be noticed that these spices include cardamom, ginger, star anise, clove, coriander seeds, cinnamon stick, dried onions, shrimp, and traditionally, an indispensable tail. cow.

Originally, to increase the sweetness rich in amino acids of pho, traditionally, when there was no monosodium glutamate (MSG), the ancients used shrimp he [8] The method of cooking broth today has different differences. local, like the North often use a lot of main noodles (especially in subsidy period, including "unmanned" - no meat) Pho, while in the South many places cook chicken broth and add dried squid.
</p>
</p>
<p>In Hanoi, pho is a special dish of Hanoi people who do not know when it was. Pho is used exclusively as a breakfast or lunch and dinner, not to eat with other dishes. The broth of Pho is made from the broth of a cow bone: a bone of a bone, a bone of a shin, and a leg of bone. The meat used for pho can be either beef or chicken. Pho is thin and soft, the spice of Pho is green onion, pepper, chili vinegar, and sliced ​​lemon.

From the mid-1960s to before the 1990s of the 20th century, for the most reasons, the administrative management of food and foodstuff subsidies, in Hanoi and many Northern provinces, appeared "unmanned pho" "(noodle with only broth, no meat) in state trade shops. The quality of state-owned pho in these stores is completely dependent on the limited skills of the non-professional staff but there are many initiatives. They vary the spices, how to cook the broth according to what they have, they earn in the wartime situation and lack of everything. An "initiative" of this period is "unmanned" Pho with noodles or cold rice.

Also since the subsidy period, in Hanoi, people often have the habit of adding more main noodles to the broth. Along with the innovation period from the 90s, Pho was richer and Hanoians often ate pho with small pieces of stirring (from the 1960s to the mid-1980s but due to the difficult period, they lost 1995 came back)


In addition to the fixed noodle shops, Hanoi once had "pho burden". Those are the vendors that sell pho. On one side of their burden, one side is a home-made container with enough ingredients to make pho and bowls, plates, chopsticks, spoons; on the other is a pot of water on top of a charcoal stove. Before 1980, such pho went around the streets and alleys of Hanoi with the familiar voices of Hanoi's nocturnal culinary culture. Nowadays, as the society develops, more cafes, "phở burden" appears less and less.

Pho Nam Dinh
Nam Dinh beef noodle soup is a popular dish of Nam Dinh, Pho Nam Dinh also has common characteristics such as Pho of other regions, including Pho noodles, noodle soup, beef or chicken, and some accompanying spices. , but there is something else comprehensive that can hardly be confused. Nam Dinh noodle is a special kind of soft and soft, different from other regions. Beef is sliced, crushed, dipped and picked in an appropriate amount of time, so it is soft and retains its freshness and nutrition ... And when it comes to water, it is often "heirloom". Pho workers often conceal their secret to making pho and pass it on to the next generation in the family.

Traditional heirloom pho in Nam Dinh mainly originated from overseas Chinese in Giao Cu village [16] and from Co family in Van Cu village, Dong Son commune, (Nam Truc district). It was then passed to the neighboring villages but was processed, no longer intact as before and added some additives. In the 1950s, Nam Dinh people brought pho to Hanoi and sold it by trolley. From the mid-1960s to before the 90s of the 20th century, for many reasons, the administrative management of subsidies for food, foodstuffs, Pho Nam Dinh was absent in other localities, but since 90 In recent years, Pho Nam Dinh has recovered and is increasingly developing strongly [16]. At present, the villagers of Van Cu, Giao Cu and neighboring villages go everywhere from the North to the South to open noodle shops to earn a living and preserve a delicious Vietnamese food.</p>
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


