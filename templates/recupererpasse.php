<?php 
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
	<head>
		<link rel="stylesheet" href="../css/style.css" />
		
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	</head>
		
		<?php include("header.php"); ?>	

	<form action="transfert.php" method="put">
		<input type="text" name="mail" />
		<input type="submit" name="action" value="Envoyer" />
	</form>
</html>

