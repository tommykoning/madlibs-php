<!DOCTYPE html>
<html>
<head>
	<title>madlips - onkunde</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>madLips</h1>
	<article>
		<header>
			<a href="index.php">er is paniek</a>
			<a href="madlips_onkunde.php">onkunde</a>
		</header>
		<form action="madlips_raport.php" method="post">
			<p>
				<label for="talent">wat zouw je graag willen kunnen ?</label>
				<input type="text" name="talent">
			</p>
			<p>
				<label for="friend"> met welke persoon kan je goed opschieten ?</label>
				<input type="text" name="friend">
			</p>
			<p>
				<label for="nummber">wat is je favoriete getal ?</label>
				<input type="text" name="nummber">
			</p>
			<p>
				<label for="inventory"> wat heb je altijd bij je als je op vakantie gaat ?</label>
				<input type="text" name="inventory">
			</p>
			<p>
				<label for="perk_pro">wat is je beste persoonlijke eigenschap ?</label>
				<input type="text" name="perk_pro">
			</p>
			<p>
				<label for="perk_con">wat is je slechtste persoonlijke eigenschap ?</label>
				<input type="text" name="perk_con">
			</p>
			<p>
				<label for="dislike"> wat is het ergste dat je kan overkomen ?</label>
				<input type="text" name="dislike">
			</p>
			<input type="submit" name="volgende">
		</form>
	</article>
</body>
</html>