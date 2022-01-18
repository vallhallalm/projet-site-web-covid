
<!-- ----- début viewSomme -->
<?php
require ($root . '/app/view/fragment/fragmentHeader.html');
?>

<body>
    <div class="container">
        <?php
        include $root . '/app/view/fragment/fragmentMenu.html';
        include $root . '/app/view/fragment/fragmentJumbotron.html';
        $stock = $results[1];
        $centre = $results[2];
        ?>

        <table class = "table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope = "col">centre</th>
                    <th scope = "col">quantité</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // La liste des vaccins est dans une variable $results             
                foreach ($stock as $element) {
                    $idcentre = $element['centre_id'];
                    $quantite = $element['somme'];
                    printf("<tr><td>%s</td><td>%d</td></tr>", $centre[$idcentre - 1]['label'], $quantite);
                }
                ?>
            </tbody>
        </table>
    </div>
    <?php include $root . '/app/view/fragment/fragmentFooter.html'; ?>

    <!-- ----- fin viewSomme -->
