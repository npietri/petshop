

<?php 

/* Récupération de l'utilisateur et de son password hashé
$req = $bdd->prepare('SELECT last_name, password FROM client');
$req->execute(array(
    'last_name' => $last_name));
$resultat = $req->fetch();

// Comparaison du password envoyé via le formulaire avec la base
$ispasswordwordCorrect = passwordword_verify($_POST['password'], $resultat['password']);

if (!$resultat)
{
    echo 'Mauvais identifiant ou mot de password !';
}
else
{
    if ($ispasswordCorrect) {
        session_start();
        $_SESSION['id'] = $resultat['id'];
        $_SESSION['last_name'] = $last_name;
        echo 'Vous êtes connecté !';
    }
    else {
        echo 'Mauvais identifiant ou mot de passworde !';
    }
}
*/
?> 


<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css.css" />
</head>
<body>
	<h2>connecte toi</h2>
	<form method="post" action="connexion.php">
		<label for="username"><b>Nom</b></label>
		<input type="text" name="username" value="<?php if(isset($_COOKIE['username111'])){ echo $_COOKIE['username111'];}?>" required><br><br>
		<label for="password"><b> Mot de passe </b></label>
		<input type="password" name="password" value="<?php if(isset($_COOKIE['passwordword111'])){ echo $_COOKIE['passwordword111'];}?>" required><br><br>
        
        <?php
			if($error) {
				echo '<p>Mot de passe / Nom d\'utilisateur invalide </p>';
			}
		?>
	
		<p><input type="submit" value="Se connecter" name="login"></p>
	</form>
</body>
</html>
