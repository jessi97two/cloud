<?php
//session_start();


include_once "../libs/maLibForms.php";
include_once "../libs/maLibUtils.php";
include_once "../libs/bdd.php";

include_once("../libs/maLibSecurisation.php");
	//securiser("libs/login.php");

/*$pseudo = valider("pseudo","SESSION");
	echo "<h1> Bienvenue $pseudo</h1>"; */
	echo 'Bienvenue <br/>' ;

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
					NoeudPopup.className="allumer"; /* définition de la classe : la classe ici est allumer */
					NoeudPopup.style.display="block"; /* le popup sera en block */
					NoeudPopup.style.left=evenement.clientX+20+"px"; /* longueur du popup */
					NoeudPopup.style.top=evenement.clientY+20+"px"; /* hauteur du popup */
					//noeud.innerHTML="<input type=\"text\" name=\"nomdossier\" id=\"creerdossier\" placeholder=\"Nom du dossier\" />";	/* texte taper par l'utilisateur */
					var NoeudPopup2 = document.getElementById("creerdossier creer");
					NoeudPopup2.className="allumer"; /* définition de la classe : la classe ici est allumer */
					NoeudPopup2.style.display="block"; /* le popup sera en block */
					NoeudPopup2.style.left=evenement.clientX+20+"px"; /* longueur du popup */
					NoeudPopup2.style.top=evenement.clientY+20+"px"; /* hauteur du popup */
				}

				/*function allumer(noeud)
				{
					var NoeudPopup=document.getElementById("creerdossier");
			
					noeud.className="allumer"; /* définition de la classe : la classe ici est allumer */
					/*NoeudPopup.style.display="block"; /* le popup sera en block */
					//NoeudPopup.style.left=evenement.clientX+20+"px"; /* longueur du popup */
					//NoeudPopup.style.top=evenement.clientY+20+"px"; /* hauteur du popup */
			
				//}

				function cacher(noeud)
				{
					var NoeudPopup=document.getElementById("creerdossier");
					var NoeudPopup2=document.getElementById("creer");
					noeud.className="eteindre"; /* définition de la classe : la classe ici est eteindre */
					NoeudPopup.style.display="none"; /* le popup n'est pas visible */
				}
			</script>
	</head>

	<body>
		<div id="formcreationdossier"  onload="cacher(this);" >
			<form action="" method="">
				<input type="button" name="action" value="Creer un dossier" id="boutoncreerdossier" onclick="chargerform()" />
				<input type="text" name="nomdossier" id="creerdossier" placeholder="Nom du dossier" />
				<input type="submit" name="action" id="creerdossier creer" value="Creer" /> 
			</form>
		</div>
	</body>
</html>