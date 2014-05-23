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
		<div id="formLogin">
			<form action="data.php">
				<div id="log">
					Saisissez votre login : <input id="login" type="text" name="login" placeholder="Username or email"/><br />
					<span id="icone"></span>
				</div>
				<div id="pass">
					Et votre passe : <input id="mdp" type="password" name="passe" placeholder="Password" /><br />
					<span id="icone"></span>
				</div>
				<div id="sign">
					<input type="submit"name="action" value="Connexion">
				</div>
			</form>
		</div>
	</body>
</html>