
<!-- ----- début viewNonVaccine -->
<?php
require ($root . '/app/view/fragment/fragmentHeader.html');
?>

<body>
    <div class="container">
        <?php
        include $root . '/app/view/fragment/fragmentMenu.html';
        include $root . '/app/view/fragment/fragmentJumbotron.html';
        if ($results != NULL) {
            $id = $results[0];
            $patient = $results[1];
            foreach ($id as $element) {
                $lvl = $element['patient_id'] - 1;
                unset($patient[$lvl]);
            }
        }
        ?>
        <table class = "table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope = "col">id</th>
                    <th scope = "col">nom</th>
                    <th scope = "col">prenom</th>
                </tr>
            </thead>
            <tbody>
<?php
// La liste des vaccins est dans une variable $results             
foreach ($patient as $element) {
    printf("<tr><td>%d</td><td>%s</td><td>%s</td></tr>", $element[0],
            $element[1], $element[2]);
}
?>
            </tbody>
        </table>
    </div>

<?php include $root . '/app/view/fragment/fragmentFooter.html'; ?>

    <!-- ----- fin viewNonVaccine -->