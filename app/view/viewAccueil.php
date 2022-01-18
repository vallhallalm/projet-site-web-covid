<!-- ----- debut de la page d'acceuil -->
<?php include 'fragment/fragmentHeader.html'; ?>
<body>
    <div class="container">
        <?php
        include 'fragment/fragmentMenu.html';
        include 'fragment/fragmentJumbotron.html';
        if ($args != NULL and $args == -1) {
            echo"Problème de suppression du Vin. Il est probable qu'il soit présent dans la table des récoltes";
        } else if ($args != NULL and $args == -2) {
            echo"Problème de suppression du producteur";
        }
        ?>
    </div>   


<?php
include 'fragment/fragmentFooter.html';
?>
    <!-- ----- fin de la page d'acceuil -->
</body>
</html>