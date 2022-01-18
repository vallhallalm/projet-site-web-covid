
<!-- ----- début viewSommeVaccinAffiche -->
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
        ?>
        <table class = "table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope = "col">id</th>
                    <th scope = "col">label</th>
                    <th scope = "col">quantite</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // La liste des vaccins est dans une variable $results             
                foreach ($stock as $element) {

                    printf("<tr><td>%d</td><td>%s</td><td>%s</td></tr>", $element['vaccin_id'],
                            $vaccin[$element['vaccin_id'] - 1]['label'], $element['somme']);
                }
                ?>
            </tbody>
        </table>
    </div>

    <?php include $root . '/app/view/fragment/fragmentFooter.html'; ?>

    <!-- ----- fin viewSommeVaccinAffiche -->