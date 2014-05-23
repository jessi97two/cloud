<?php
//	if(isset($_GET['msg']))
//		echo "<h1>$_GET[msg]</h1>";
		//echo "<h1>".$_GET['msg']."</h1>";
?>

<!DOCTYPE html>
<html>
	<head>

	</head>

	<body>
		<div id="formLogin">
			<form action="data.php">
				login : <input id="login" type="text" name="login" placeholder="username or email"/><br />
				passe : <input id="mdp" type="password" name="passe"/><br />
				<input type="submit"name="action" value="Connexion">
			</form>
		</div>
	</body>
</html>