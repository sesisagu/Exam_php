<?php

function connectBdd() {

try {
        $host = 'localhost';
        $dbName = 'exam_php';
        $user = 'Sesisagu';
        $password = 'Sontoma994276';
        $pdo = new PDO(
            'mysql:host=' . $host .
            ';dbname=' . $dbName . ';charset=utf8',
            $user,
            $password);
        // Cette ligne demandera à pdo de renvoyer les erreurs SQL si il y en a
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        throw new
        InvalidArgumentException(
            'Erreur connexion à la 
        base de données : ' . $e->getMessage());
        exit;
    }
}

?>