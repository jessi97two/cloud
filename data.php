<?php
session_start();

	include_once "libs/maLibUtils.php";
	include_once "libs/maLibSQL.php";
	include_once "libs/maLibSecurisation.php"; 
	include_once "libs/bdd.php"; 



	if ($action = valider("action"))
	{
		// Un paramètre action a été soumis, on fait le boulot...
		switch($action)
		{
			

			case 'Connexion' :
				// On verifie la presence des champs login et passe
				if ($login = valider("login"))
				if ($passe = valider("passe"))
				{
					// On verifie l'utilisateur, et on crée des variables de session si tout est OK
					verifUser($login,$passe); 
						
				}


				// On redirigera vers la page index automatiquement
			break;


			// Connexion //////////////////////////////////////////////////

			case 'Logout' :
				// On supprime juste la session 
				session_destroy();
				
				// On redirigera vers la page index automatiquement
			break;	


			case 'Creer un compte' :
				if (($name = valider("nom")) && ($surname = valider("prenom")) && ($username = valider("identifiant")) && ($passe = valider("motpasse")) && ($mail = valider("address")))
					{
						ajouterUtilisateur($name,$surname,$username,$passe,$mail);
						header("Location:templates/accueil.php");
						die();
						//include("templates/accueil.php");
					}
				else 
					echo ' erreur';

			break;

	
		}
	}

	// On redirige vers la page appelante 
	header("Location:" . $_SERVER["HTTP_REFERER"]);


	
?>










