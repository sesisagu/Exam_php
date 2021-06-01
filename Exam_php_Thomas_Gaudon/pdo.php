<?php
require 'parts/global-stylesheets.php';
require 'joueur_function.php';
?>
<?php

$joueurs = getAllJoueurs();

 ?>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">prenom</th>
                <th scope="col">nom</th>
                <th scope="col">age</th>
                <th scope="col">poste</th>
                <th scope="col">Suppression/Edition</th>
            </tr>
        </thead>
        <tbody>
            <?php
        
            foreach ($joueurs as $joueur){
                echo('<tr>
            <th scope="row">'.$joueur['id'].'</th>
            <td>'.$joueur['prenom'].'</td>
            <td>'.$joueur['nom'].'</td>
            <td>'.$joueur['age'].'</td>
            <td>'.$joueur['poste'].'</td>
            <td>
            <a href="manager/delete-joueur.php?id='.$joueur['id'].'">Supprimer/
            <a href="edit-joueur.php?id='.$joueur['id'].'">Editer
            </td>

            ');
            }
            
        ?>
        <a href="add-joueur.php?id='.$joueur['id'].'" class="btn btn-primary">Ajouter un joueur
        </tbody>
    </table>