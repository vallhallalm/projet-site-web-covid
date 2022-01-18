
<!-- ----- début viewUpdated -->
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
        if ($results == 1) {
            echo ("<h3>Le vaccin a été mis à jour </h3>");
        } else {
            echo ("<h3>Problème de mis à jour du Vaccin</h3>");
        }

        echo("</div>");

        include $root . '/app/view/fragment/fragmentFooter.html';
        ?>
        <!-- ----- fin viewUpdated -->    


