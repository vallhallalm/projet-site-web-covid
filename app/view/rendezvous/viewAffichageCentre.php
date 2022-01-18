<!-- ----- début viewAffichageCentre -->
<?php
require ($root . '/app/view/fragment/fragmentHeader.html');
?>

<body>
    <div class="container">
        <?php
        include $root . '/app/view/fragment/fragmentMenu.html';
        include $root . '/app/view/fragment/fragmentJumbotron.html';
        ?>
        <div class="panel panel-success">
            <div class="panel-heading">
                <div class="panel-title">Affichage centre</div>
            </div>
            <div class="panel-body">
                <?php
                if ($results == NULL) {
                    echo("Aucun centre n'est dispo");
                } else {
                    echo("Votre rendez-vous est pris avec succès !");
                }
                ?>
            </div>
        </div>
    </div>
    <?php include $root . '/app/view/fragment/fragmentFooter.html'; ?>

    <!-- ----- fin viewAffichageCentre -->
