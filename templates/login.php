<?php
	if(isset($_GET['msg']))
		echo "<h1>$_GET[msg]</h1>";
		//echo "<h1>".$_GET['msg']."</h1>";
?>


	

<!DOCTYPE html>
<html>
	<head>
			<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>


	<body>
		<div id="banniere">

<!--Bannière : définie dans le template header.php -->

<div id="logo">
<img src="images/image11.png" />
</div>
		<div id="formLogin">
			<form action="data.php">
				<div id="log">
					Saisissez votre login : <input id="login" type="text" name="login" placeholder="Username or email"/><br />
					
				</div>
				<div id="pass">
					Et votre passe : <input id="mdp" type="password" name="passe" placeholder="Password" /><br />
					
				</div>
				<div id="sign">
					<a href="templates/recupererpasse.php">Mot de passe oublié?</a>
					<input type="submit"name="action" value="Connexion">
				</div>
			</form>
		</div>
	</body>
</html>