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
				if ($login = valider('login'))
				if ($password = valider('passe'))
				{
					// On verifie l'utilisateur, et on crée des variables de session si tout est OK
					if(verifUser($login,$password))
					{
						header("Location:templates/accueil.php");
						die(""); //interrompte l'execution du code
					} 
						
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

			case 'Creer un dossier' :
				if($dossier = valider("nomdossier")) 
				{
					$id=$_SESSION['id'];
					ajouterDossier($id,$dossier);
					header("Location:templates/accueil.php");
					die();
				}
			break;

			case 'Upload fichier' :
					header("Location:templates/upload.php");
					die();
			break;

			case 'Upload' :
			echo ' ici';
					//if($fichier = valider("dropper"))
					//{
						$fichier = valider("dropper");
						$id=$_SESSION['id'];
						ajouterFichier($id,$fichier);
						header("Location:templates/accueil.php");
						die();
					//}
			break;

	
		}
	}

	// On redirige vers la page appelante 
	header("Location:" . $_SERVER["HTTP_REFERER"]);


	
?>










