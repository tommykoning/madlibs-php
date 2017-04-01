<?php
	$talent = $_POST["talent"];
	$friend = $_POST["friend"];
	$inv = $_POST["inventory"];
	$num = $_POST["nummber"];
	$pro = $_POST["perk_pro"];
	$con = $_POST["perk_con"];
	$dis = $_POST["dislike"];

?>
<!DOCTYPE html>
<html>
<head>
	<title>madlips - raport</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>madLips</h1>
		<article>
			<header>
				<a href="index.php">er is paniek</a>
				<a href="madlips_onkunde.php">onkunde</a>
			</header>
			<p>
				er zijn veel menten die niet kunnen 
				<?php 
					echo $talent;
				?>. 
				neem nou 
				<?php 
					echo $friend;
				?>.
				zelfs met hulp van een 
				<?php 
					echo $inv;
				?>
				of zelfs 
				<?php 
					echo $num;
				?>
				kan 
				<?php 
					echo $friend;
				?>
				niet 
				<?php 
					echo $talent;
				?>. 
				dat heeft te maken met een gebrek aan 
				<?php 
					echo $pro;
				?>.
				maar met een te veel aan 
				<?php 
					echo $con;
				?>.
				te veel 
				<?php 
					echo $con;
				?> 
				leidt tot 
				<?php
					echo $dis;
				?>
				en dat is niet goed als je wilt
				<?php 
					echo $talent;
				?>.
				helaas voor 
				<?php
					echo $friend;
				?>
			</p>
		</article>
</body>
</html>