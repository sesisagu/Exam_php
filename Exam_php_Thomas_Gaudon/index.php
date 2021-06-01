<?php
    require 'function/joueur-function.php';
?>
<html>
<head>
    <?php
    include 'parts/global-stylesheets.php'
    ?>
</head>
<body>
<header>

    <div class="p-5 text-center bg-light">
        <h1 class="mb-3">La fédération française de football</h1>
        <img src="images/img_fff.jpg">
    </div>
    
</header>

<a class=" btn btn-primary" href="admin-login.php">Se connecter</a>

<div class="container">
    
    <?php
        $joueurs = GetAllJoueurs();

        foreach ($joueurs as $joueur){
            ?>
            <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?php echo($joueur['prenom']);?></h5>
                <p class="card-text"> <?php echo($joueur['nom']) ?></p>
                <p class="card-text"> <?php echo($joueur['age'])?></p>
                <p class="card-text"> <?php echo($joueur['poste'])?></p>
            </div>
        </div>
    <?php
    }
    ?>
</div>
<?php
include 'parts/global-scripts.php'
?>
</body>
</html>