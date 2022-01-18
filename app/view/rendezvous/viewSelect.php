
<!-- ----- début viewSelect -->
<?php
require ($root . '/app/view/fragment/fragmentHeader.html');
?>

<body>
    <div class="container">
        <?php
        include $root . '/app/view/fragment/fragmentMenu.html';
        include $root . '/app/view/fragment/fragmentJumbotron.html';
        $patient = $results;
        ?>

        <form role="form" method='get' action='router.php'>
            <input type="hidden" name='action' value='SelecCentre'>
            <label for="patient">patient : </label> <select class="form-control" id='patient' name='patient' style="width: 100px">
                <?php
                foreach ($patient as $element) {
                    $value = $element['nom'];
                    $label = $element['nom'] . " " . $element['prenom'];
                    echo ("<option value=$value>$label</option>");
                }
                ?></select>
            <button class="btn btn-primary" type="submit">Go !</button>
        </form>
    </div>

    <?php include $root . '/app/view/fragment/fragmentFooter.html'; ?>

    <!-- ----- fin viewSelect -->