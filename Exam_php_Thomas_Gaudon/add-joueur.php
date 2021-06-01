<html>
<head>
    <?php
    include 'parts/global-stylesheets.php';
    ?>
</head>

<body>

<div id="login">
    <h3 class="text-center text-white pt-5">Ajouter un joueur</h3>
    <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div id="login-box" class="col-md-12">
                    
                    <form id="login-form" class="form" action="manager/add-joueur-login-manager.php" method="post">
                        <h3 class="text-center text-info">Ajouter un joueur</h3>
                        <div class="form-group">
                            <label for="prenom" class="text-info">Prenom</label><br>
                            <input type="text" name="prenom" id="prenom" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="nom" class="text-info">Nom</label><br>
                            <input type="text" name="nom" id="nom" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="confirm-nom" class="text-info">Confirm Nom</label><br>
                            <input type="text" name="confirm-nom" id="confirm-nom" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="age" class="text-info">Age:</label><br>
                            <input type="number" name="age" id="age" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="poste" class="text-info">Poste:</label><br>
                            <select name="poste" id="poste" class="form-control">
                                <option disabled>--Veuillez choisir un poste--</option>
                                <option value="Gardien">Gardien</option>
                                <option value="Defenseur">Défenseur</option>
                                <option value="Millieu">Millieu</option>
                                <option value="Attaquant">Attaquant</option>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-info btn-md mt-3">
                        </div>
                    </form>

                    <?php
                        
                        if(isset($_GET['error'])){
                    ?>
                    <div class="error text-center">
                        <?php
                        
                            switch ($_GET['error']){
                                case 'no-saisie':
                                    echo('Tu n\'as rien saisie !');
                                    break;
                                case 'no-prenom':
                                    echo('Veuillez saisir votre prénom !');
                                    break;
                                case 'no-nom':
                                    echo('Veuillez saisir un nom !');
                                    break;
                                case 'not-same':
                                    echo('La confirmation du nom est différente du nom saisit !');
                                    break;
                                case 'same-nom':
                                    echo('Ce nom existe déjà !');
                                    break;
                                case 'no-age':
                                    echo('Veuillez entrer un âge !');
                                    break;
                                case 'no-poste':
                                    echo('Veuillez saisir un poste !');
                                    break;
                                case 'bad-credentials':
                                    echo('Les identifiants sont mauvais !');
                                    break;
                                case 'already-exists':
                                    echo('Ce joueur existe déjà');
                                    break;
                                default:
                                    echo('Erreur inconnu');
                                    break;
                            }
                        ?>
                    </div>

                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
require 'parts/global-scripts.php';
?>

</body>
</html>