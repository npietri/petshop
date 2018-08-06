<?php 
// Vérification de la validité des informations

// Hachage du mot de passe
$pass_hache = password_hash($_POST['password'], PASSWORD_DEFAULT);

// Insertion
$req = $bdd->prepare('INSERT INTO client(name, password) VALUES(:name, :password)');
$req->execute(array(
    'password' => $pass_hache,
    'name' => $name));

