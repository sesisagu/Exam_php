<?php
require '../joueur_function.php';
$connect = connectBdd();
$del = delJoueur();

header('Location: ../pdo.php');