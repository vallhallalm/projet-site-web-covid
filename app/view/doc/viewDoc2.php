
<!-- ----- début viewDoc2 -->
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
                <div class="panel-title">Idée innovante 2</div>
            </div>
            <div class="panel-body">
                Pour notre deuxième innovation, nous sommes parti sur le constat simple qu'il serait interessant d'afficher le personnes non vaccinées à des fins de statistiques. Pour cela, il suffit de faire une requête pour récupérer les patient et à l'aide de la commande unset, nous supprimons les patients déjà vaccinés au moins une fois.
            </div>
        </div>
    </div>
    <?php include $root . '/app/view/fragment/fragmentFooter.html'; ?>

<!-- ----- fin viewDoc2 -->
