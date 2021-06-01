<?php
require 'db-connexion.php';
function createJoueur($prenom, $nom, $age, $poste){
    $pdo = connectBdd();
    $req = $pdo->prepare( 'INSERT INTO joueurs
(prenom, nom, age , poste)
VALUES(:prenom, :nom, :age, :poste)');
    $req->execute([
        'prenom'=> $prenom,
        'nom'=> $nom,
        'age'=> $age,
        'poste'=> $poste
    ]);

}

function getAllJoueurs(){
    $pdo = connectBdd();
    $query = $pdo->prepare("SELECT * FROM joueurs ORDER BY id DESC");
    $query->execute();
    return $query->fetchAll();
}

function delJoueur(){
    $pdo = connectBdd();
    $req = $pdo->prepare("DELETE FROM joueurs WHERE id = :id");
    $req->execute(['id' => $_GET['id']]);
}
?>