
<!-- ----- début viewInserted -->
<?php
require ($root . '/app/view/fragment/fragmentHeader.html');
?>

<body>
    <div class="container">
        <?php
        include $root . '/app/view/fragment/fragmentMenu.html';
        include $root . '/app/view/fragment/fragmentJumbotron.html';
        ?>
        <!-- ===================================================== -->
        <?php
        if ($results == 2) {
            echo ("<h3>Le stock a été mis à jour </h3>");
        } elseif ($results == -2) {
            echo ("<h3>Problème de mis à jour du stock</h3>");
        } elseif ($results == -1) {
            echo ("<h3>Problème d'ajout du stock</h3>");
        } elseif ($results == -2) {
            echo ("<h3>Problème de mise à jour du stock</h3>");
        }

        echo("</div>");

        include $root . '/app/view/fragment/fragmentFooter.html';
        ?>
        <!-- ----- fin viewInserted -->  