<?php
session_start();


include_once "../libs/maLibForms.php";
include_once "../libs/maLibUtils.php";
include_once "../libs/bdd.php";

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- **** H E A D **** -->
<head>	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<!-- **** F I N **** H E A D **** -->


<!-- **** B O D Y **** -->
<body>

<div id="banniere">

<!--Bannière : définie dans le template header.php -->

<div id="logo">
<img src="../images/image11.png" />
</div>


</div>
</body>
</html>

<?php
//include_once("../libs/maLibSecurisation.php");
	//securiser("libs/login.php");

$pseudo = valider("login","SESSION");
$pseudo=$_SESSION['pseudo'];
	echo "<h1> Bienvenue $pseudo </h1>"; 
	//echo '<h2>Bienvenue </h2>' ;
//$id=$_SESSION['id'];
//echo $id ; 
?>

<!DOCTYPE html>
<html>
	<head>
			<link rel="stylesheet" type="text/css" href="../css/style.css">
			

			<script>
				function chargerform()
				{
					//alert ("recu");
					var NoeudPopup = document.getElementById("creerdossier");
					//NoeudPopup.className="allumer"; /* définition de la classe : la classe ici est allumer */
					NoeudPopup.style.display="inline-block"; /* le popup sera en block */
					//NoeudPopup.style.left=evenement.clientX+20+"px"; /* longueur du popup */
					//NoeudPopup.style.top=evenement.clientY+30+"px"; /* hauteur du popup */
					//noeud.innerHTML="<input type=\"text\" name=\"nomdossier\" id=\"creerdossier\" placeholder=\"Nom du dossier\" />";	/* texte taper par l'utilisateur */
					var NoeudPopup2 = document.getElementById("creer");
					//NoeudPopup2.className="allumer"; /* définition de la classe : la classe ici est allumer */
					NoeudPopup2.style.display="block"; /* le popup sera en block */
					//NoeudPopup2.style.left=evenement.clientX+20+"px"; /* longueur du popup */
					//NoeudPopup2.style.top=evenement.clientY+20+"px"; /* hauteur du popup */
				}

				/*function allumer(noeud)
				{
					var NoeudPopup=document.getElementById("creerdossier");
			
					noeud.className="allumer"; /* définition de la classe : la classe ici est allumer */
					/*NoeudPopup.style.display="block"; /* le popup sera en block */
					//NoeudPopup.style.left=evenement.clientX+20+"px"; /* longueur du popup */
					//NoeudPopup.style.top=evenement.clientY+20+"px"; /* hauteur du popup */
			
				//}

				function cacher()
				{
					var NoeudPopup=document.getElementById("creerdossier");
					var NoeudPopup2=document.getElementById("creer");
					//noeud.className="eteindre"; /* définition de la classe : la classe ici est eteindre */
					NoeudPopup.style.display="none";
					NoeudPopup2.style.display="none"; /* le popup n'est pas visible */
				}
			</script>
	</head>

	<body onload="cacher();" >
		<div id="formcreationdossier"   >
			<form action="../data.php">
				<input type="button" name="action" value="Creer un dossier" id="boutoncreerdossier" onclick="chargerform();" />
				<input type="text" name="nomdossier" id="creerdossier" placeholder="Nom du dossier" />
				<input type="submit" name="action" id="creer" value="Creer un dossier" /> 
			</form>
		</div>
		<div id="formupload">
			<form action="../data.php">
				<input type="submit" name="action" value="Upload fichier" />
			</form>
		</div>
	</body>
</html>

<?php
?>
<div id="listagedossier">
	<?php

	$id=$_SESSION['id'];
	$dossier=listerDossier($id);

	$currentSection = "aucune";
	foreach  ($dossier as $data)
	{
	// Si on change de section, on affiche son nom
	if ($currentSection != $data["name"])
		{
		echo "<div><span>$data[name]</span>";
		echo "<span>$data[datecreation]</span></div>";
		$currentSection = $data["name"];
		}	 
	
	}
	?>
</div>
<?php
?>