<?php
session_start();
require '../joueur_function.php';
if(empty($_POST['prenom']) && empty($_POST['nom'])){
    
    header("Location: ../add-joueur-login.php?error=no-saisie");
} elseif (empty($_POST['prenom'])){
    header("Location: ../add-joueur-login.php?error=no-prenom");
} elseif (empty($_POST['nom'])){
    header("Location: ../add-joueur-login.php?error=no-nom");
} elseif (empty($_POST['age'])){
    header("Location: ../add-joueur-login.php?error=no-age");
} elseif (empty($_POST['poste'])){
    header("Location: ../add-joueur-login.php?error=no-poste");
} elseif($_POST['nom'] !== $_POST['confirm-nom']){
    header("Location: ../add-joueur-login.php?error=not-same");
} elseif($_POST['nom'] !== $_POST['nom']){
    header("Location: ../add-joueur-login.php?error=same-nom");
} else {
        $req = createJoueur($_POST['prenom'], $_POST['nom'], $_POST['age'], $_POST['poste']);
        header ('Location: ../pdo.php');
}




?>