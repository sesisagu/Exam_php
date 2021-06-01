<html>
<head>
    <?php
    include 'parts/global-stylesheets.php';
    ?>
</head>

<body>

<div id="login">
    <h3 class="text-center text-white pt-5">Login for admin</h3>
    <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div id="login-box" class="col-md-12">
                    
                    <form id="login-form" class="form" action="manager/admin-login-manager.php" method="post">
                        <h3 class="text-center text-info">Login for admin</h3>
                        <div class="form-group">
                            <label for="username" class="text-info">Username:</label><br>
                            <input type="text" name="username" id="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password" class="text-info">Password:</label><br>
                            <input type="password" name="password" id="password" class="form-control">
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
                                case 'no-username':
                                    echo('Veuillez saisir votre nom d\'utilisateur');
                                    break;
                                case 'no-password':
                                    echo('Veuillez saisir un mot de passe !');
                                    break;
                                case 'bad-credentials':
                                    echo('Les identifiants sont mauvais !');
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