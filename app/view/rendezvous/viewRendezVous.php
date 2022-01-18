<!-- ----- début viewRendezVous -->
<?php
require ($root . '/app/view/fragment/fragmentHeader.html');
?>

<body>
    <div class="container">
        <?php
        include $root . '/app/view/fragment/fragmentMenu.html';
        include $root . '/app/view/fragment/fragmentJumbotron.html';
        $vaccin_id = $results[1];
        $vaccin = $results[2];
        ?>

        <div class="panel panel-success">
            <div class="panel-heading">
                <div class="panel-title">Statut du rendez-vous</div>
            </div>
            <div class="panel-body">
                <?php
                if ($results == NULL) {
                    echo "votre rendez-vous n'a pas pu être pris, essayez de choisir un autre centre.";
                } else {
                    $label = $vaccin['label'];
                    echo"votre rendez vous et pris dans le centre sélectionné avec le vaccin $label";
                }
                ?>
            </div>
        </div>
    </div>
<?php include $root . '/app/view/fragment/fragmentFooter.html'; ?>

    <!-- ----- fin viewRendezVous -->