<?php
//session_start();


include_once "libs/maLibForms.php";
include_once "libs/maLibUtils.php";
include_once "libs/bdd.php";

?>

<!DOCTYPE html>
<html>
	<head>
			<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>

	<body>
		<div id="formcreation">
			<form action="data.php" method="POST">
				<h2>Creation d'un nouveau compte</h2><br/>
				Nom : <input type="text" name="nom" /></br></br>
				Prenom : <input type="text" name="prenom" /></br></br>
				Identifiant : <input type="text" name="identifiant" /></br></br>
				Mot de passe : <input type="password" name="motpasse" /></br></br>
				Mot de passe confirmation : <input type="password" name="motpasseconfirm" /></br></br>
				Mail : <input type="text" name="address" /></br></br>
				<input type="submit" name="action" value="Creer un compte" id="boutoncreer" />
			</form>
		</div>
	</body>
</html>

<?php
?>