
<!-- ----- début viewVacciné -->
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
                <div class="panel-title">Statut du patient</div>
            </div>
            <div class="panel-body">
                Le patient a reçu toutes les doses nécessaires.
            </div>
        </div>
    </div>
    <?php include $root . '/app/view/fragment/fragmentFooter.html'; ?>

    <!-- ----- fin viewVacciné -->
