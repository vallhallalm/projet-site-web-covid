
<!-- ----- début viewAll -->
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
                if ($results != NULL) {
                    echo("Le centre contenant le plus de ce vaccin est " . $results);
                } else {
                    echo("le vaccin n'est disponible dans un aucun centre");
                }
                ?>
            </div>
        </div>
    </div>
    <?php include $root . '/app/view/fragment/fragmentFooter.html'; ?>

    <!-- ----- fin viewAll -->
