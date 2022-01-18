
<!-- ----- début viewDoc3 -->
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
                <div class="panel-title">Idée innovante 3</div>
            </div>
            <div class="panel-body">
                Enfin, une dernière idée intéréssante de notre point de vue était d'afficher la quantité de vaccin cumulée dans tous les centres. Pour cela, nous récupérons les informations dans la table stock puis nous effectuons unn calcul pour additionner toutes les doses. Cela peut être utile dans le cas d'une gestion des stocks pour savoir quel vaccin est à commander par exemple.
            </div>
        </div>
    </div>
    <?php include $root . '/app/view/fragment/fragmentFooter.html'; ?>

<!-- ----- fin viewDoc3 -->
