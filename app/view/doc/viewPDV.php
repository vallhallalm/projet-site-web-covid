
<!-- ----- début viewPDV -->
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
                <div class="panel-title">Point de vue concernant le projet</div>
            </div>
            <div class="panel-body">
                Nous avons trouvé ce projet très formateur dans l'organisation du travail en équipe. Il ne nous a pas paru forcément compliqué car nous avions fait correctement l'ensemble des TPs proposés et notamment le MVC 1 et 2. Par ailleurs, cela nous a permis de découvrir de nouvelles requêtes et fonctions qui nous le pensons, nous seront utiles dans nos projets futurs. 
            </div>
        </div>
    </div>
    <?php include $root . '/app/view/fragment/fragmentFooter.html'; ?>

    <!-- ----- fin viewPDV -->
