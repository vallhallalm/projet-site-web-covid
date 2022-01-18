
<!-- ----- début viewCentrePossible -->
<?php
require ($root . '/app/view/fragment/fragmentHeader.html');
?>

<body>
    <div class="container">
        <?php
        include $root . '/app/view/fragment/fragmentMenu.html';
        include $root . '/app/view/fragment/fragmentJumbotron.html';
        $patient_id = $results['id'];
        ?>

        <form role="form" method='get' action='router.php'>
            <div class="form-group">
                <input type="hidden" name='action' value='vaccinpossible'>
                <?php
                echo "<input type='hidden' name='patient_id' value=$patient_id>";
                ?>
                <label for="centre">centre : </label> <select class="form-control" id='centre' name='centre' style="width: 100px">
                    <?php
                    foreach ($results3 as $nom) {
                        $value = $nom['id'];
                        $label = $nom['label'];
                        echo ("<option value=$value>$label</option>");
                    }
                    ?>
                </select>
            </div>
            <button class="btn btn-primary" type="submit">Submit form</button>
        </form>
    </div>

    <?php include $root . '/app/view/fragment/fragmentFooter.html'; ?>

    <!-- ----- fin viewCentrePossible -->