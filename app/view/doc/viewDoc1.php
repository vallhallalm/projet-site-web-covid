
<!-- ----- début viewDoc1 -->
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
                <div class="panel-title">Idée innovante 1</div>
            </div>
            <div class="panel-body">
                Pour notre première innovation, nous avons choisi de demander à l'utilisateur de sélectionner un vaccin. Nous récupérons alors le nom du vaccin puis à l'aide d'une requête puis à l'aide d'une autre, nous affichons le centre qui contient le plus du vaccin sélectionné. Cela peut être utile dans le cas où un patient souhaite connaître le centre le plus approprié pour se faire vacciner. Le résultat est alors affiché dans un pannel. 
            </div>
        </div>
    </div>
    <?php include $root . '/app/view/fragment/fragmentFooter.html'; ?>
<!-- ----- fin viewDoc1 -->
