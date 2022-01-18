
<!-- ----- début viewCentreRestant -->
<?php
require ($root . '/app/view/fragment/fragmentHeader.html');
?>

<body>
    <div class="container">
        <?php
        include $root . '/app/view/fragment/fragmentMenu.html';
        include $root . '/app/view/fragment/fragmentJumbotron.html';

        $stock = $results2['stock'];
        $centre = $results2['centre'];
        $vaccin_id = $results['vaccin_id'];
        $patient_id = $results['id'];
        ?>

        <form role="form" method='get' action='router.php'>
            <input type="hidden" name='action' value='AffichageCentre'>
            <?php
            echo "<input type='hidden' name='vaccin_id' value=$vaccin_id>";
            echo "<input type='hidden' name='patient_id' value=$patient_id>";
            ?>
            <label for="centre">centre : </label> <select class="form-control" id='centre' name='centre_id' style="width: 100px">
                <?php
                foreach ($stock as $element) {
                    $value = $element['centre_id'];
                    $label = $centre[$value - 1]['label'];
                    echo ("<option value=$value>$label</option>");
                }
                ?>
            </select>
            <button class="btn btn-primary" type="submit">Go !</button>
        </form>
    </div>

    <?php include $root . '/app/view/fragment/fragmentFooter.html'; ?>

    <!-- ----- fin viewCentreRestant -->