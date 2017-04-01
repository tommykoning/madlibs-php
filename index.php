<!DOCTYPE html>
<html>
	<head>
		<title>madLips - er heerst</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<h1>madLips</h1>
		<article>
		<header>
			<a href="index.php">er is paniek</a>
			<a href="madlips_onkunde.php">onkunde</a>
		</header>
		<form action="madlips_paniek.php" method="post">
			<p><label for="huisdier">welk huis dier zou je graag willen hebben ?</label>
			<input type="text" name="huisdier" id="huisdier"></p>
			<p><label for="persoon">wie is de belangrijkste persoon in je leven ?</label>
			<input type="text" name="persoon" id="persoon"></p>
			<p><label for="land">in welk land zou je graag willen wonen ?</label>
			<input type="text" name="land" id="land"></p>
			<p><label for="verveel">wat doe je als jij je verveeld ?</label>
			<input type="text" name="verveel" id="verveel"></p>
			<p><label for="speelgoed">met welk speelgoed speelde je als kind het meest ?</label>
			<input type="text" name="speelgoed" id="speelgoed"></p>
			<p><label for="school">bij welke docent spijbel je het liefst</label>
			<input type="text" name="school" id="school"></p>
			<p><label for="geld">als je €100,000 zou hebben wat zou je als eerst kopen? </label>
			<input type="text" name="geld" id="geld"></p>
			<p><label for="hobby">wat is je favoriete bezichheid</label>
			<input type="text" name="hobby" id="hobby"></p>
			<input type="submit" value="volgende">
		</form>
		</article>
	</body>
</html>