<!DOCTYPE html>
<html>
<head>
	<title>madLips - paniek</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<body>
		<h1>madLips</h1>
		<article>
		<header>
			<a href="index.php">er is paniek</a>
			<a href="">onkunde</a>
		</header>
		<p>
			er heerst paniek in het koningrijk
			<?php 
				echo $_POST["land"];
			?>
			koning 
			<?php 
				echo $_POST["school"];
			?>
			is ten einde raad en als koning
			<?php 
				echo $_POST["school"];
			?>
			ten einde raad is, dan roept hij zijn ten-einde-raadsheer 
			<?php 
				echo $_POST["persoon"];
			?>.
		</p>
		<p>
			"
			<?php 
				echo $_POST["persoon"]
			?>!
			het is een ramp! het is een schande!"
		</p>
		<p>
			"sire, majesteit, uwe luidruchtigheid, wat is er aan de hand?"
		</p>
		<p>
			"mijn 
			<?php 
				echo $_POST["huisdier"];
			?>
			is verdwenen? zo maar, zonder waarschuwing. en ik had net 
			<?php 
				echo $_POST["speelgoed"];
			?>
			voor hem gekocht!"
		</p>
		<p>
			"majesteit, uw 
			<?php 
				echo $_POST["huisdier"];
			?>
			komt vast vanzelf weer terug?"	
		</p>
		<p>
			"ja, da's leuk en aardig, maar hoe moet ik in de tussentijd 
			<?php 
				echo $_POST["hobby"];
			?>
			leren?"
		</p>
		<p>
			"maar sire, daar kunt uw toch uw 
			<?php 
				echo $_POST["geld"];
			?>
			voor gebruiken"
		</p>
		<p>
			"<?php 
				echo $_POST["persoon"];
			?>
			, je hebt helemaal gelijk! wat zou ik doen als ik jou niet had"
		</p>
		<p>
			"<?php
				echo $_POST["verveel"];
			?>
			, sire"
		</p>
</body>
</html>