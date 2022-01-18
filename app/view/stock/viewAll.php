
<!-- ----- début viewAll -->
<?php
require ($root . '/app/view/fragment/fragmentHeader.html');
?>

<body>
    <div class="container">
        <?php
        include $root . '/app/view/fragment/fragmentMenu.html';
        include $root . '/app/view/fragment/fragmentJumbotron.html';
        $stock = $results[1];
        $vaccin = $results[2];
        $centre = $results[3];
        ?>

        <table class = "table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope = "col">centre</th>
                    <th scope = "col">vaccin</th>
                    <th scope = "col">quantité</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // La liste des vaccins est dans une variable $results             
                foreach ($stock as $element) {
                    $idcentre = $element['centre_id'];
                    $idvaccin = $element['vaccin_id'];
                    $quantite = $element['quantite'];
                    printf("<tr><td>%s</td><td>%s</td><td>%d</td></tr>", $centre[$idcentre - 1]['label'], $vaccin[$idvaccin - 1]['label'], $quantite);
                }
                ?>
            </tbody>
        </table>
    </div>
    <?php include $root . '/app/view/fragment/fragmentFooter.html'; ?>

    <!-- ----- fin viewAll -->
