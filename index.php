<?php 	include('haut.php') ?>
<?php 	include('menu.php') ?>
<!--demande de pseudo-->
<div id="connexion">
		<form action="home.php" method="get">
			<h2>Hey! Qui va là ? </h2>
			<label for="pseudo">Votre prénom :</label>
			<input type="text" name="pseudo" id="pseudo"> <br><br>	
			<input type="submit" name="letsgo" id="letsgo" value="Let's go ! ">
		</form>
</div>	
<?php 	include('bas.php') ?>