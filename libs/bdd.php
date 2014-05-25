<?php

include_once ("maLibSQL.php");

function listerUtilisateurs()
{
	$sql = "SELECT username FROM users";
	$res = sqlselect($sql);
	return parcoursRs($res);
}

function listerFichier($user_id,$folder_id)
{
	$sql = "SELECT name FROM files WHERE user_id=$user_id AND folder_id=$folder_id";
	$res = sqlselect($sql);
	return parcoursRs($res);
}

function listerDossier($user_id)
{
	$sql = "SELECT name FROM folders WHERE user_id=$user_id";
	$res = sqlselect($sql);
	return parcoursRs($res);
}

function ajouterUtilisateur($username,$passe,$surname,$name,$email)
{
	$sql = "INSERT INTO users (username, password, surname, name, email)";
	$sql .= "VALUES ('$username','$passe','$surname','$name','$email')";
	sqlinsert($sql);
}

function ajouterFichier($user_id,$folder_id,$name,$tag,$commentaire,$version,$date)
{
	$sql = "INSERT INTO (user_id, folder_id, name, tag, commentaire, version, 'date')";
	$sql .= "VALUES ('$user_id','$folder_id','$name','$tag','$commentaire','$version','$date')";
	sqlinsert($sql);
}

function ajouterDossier($user_id,$name)
{
	$sql = "INSERT INTO folders (user_id, name)";
	$sql .= "VALUES ('$user_id','$name')";
	sqlinsert($sql);
}

function changerPasse($user_id,$passe)
{
	$req = "UPDATE users SET passe='$passe' WHERE id=$user_id";
	$res = SQLUpdate($req);
}

function rechercherFichier($name)
{
	$sql = "SELECT name FROM files WHERE name=$name";
	$res = sqlselect($sql);
	return parcoursRs($res);
}

function supprimerUtilisateur($name)
{
	$sql= "DELETE username, password, surname, name, email FROM users WHERE name=$name";
	sqldelete($sql);
}

function supprimerFichier($user_id,$folder_id,$name)
{
	$sql = "DELETE user_id, folder_id, name, tag, commentaire, version, `date` FROM files WHERE user_id=$user_id AND folder_id=$folder_id AND name=$name";
	sqldelete($sql);
}

function supprimerDossier($user_id,$name)
{
	$sql = "DELETE user_id, name, `date` FROM files WHERE user_id=$user_id AND name=$name";
	sqldelete($sql);
}
?>