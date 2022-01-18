
<!-- ----- début viewInsert -->
<?php
require ($root . '/app/view/fragment/fragmentHeader.html');
?>

<body>
    <div class="container">
        <?php
        include $root . '/app/view/fragment/fragmentMenu.html';
        include $root . '/app/view/fragment/fragmentJumbotron.html';

        // $results contient un tableau avec la liste des clés.
        ?>

        <form role="form" method='get' action='router.php'>
            <div class="form-group">
                <input type="hidden" name='action' value='insert'>
                <label for="vaccin">vaccin : </label> <select class="form-control" id='vaccin' name='vaccin' style="width: 100px">
                    <?php
                    foreach ($results[1] as $nom) {
                        $label = $nom['label'];
                        echo ("<option>$label</option>");
                    }
                    ?>
                </select>
                <label for="centre">centre : </label> <select class="form-control" id='centre' name='centre' style="width: 100px">
                    <?php
                    foreach ($results[2] as $nom) {
                        $label = $nom['label'];
                        echo ("<option>$label</option>");
                    }
                    ?>
                </select>
            </div>
            <label for="doses">doses : </label><input type="number" step='any' id='doses' name='doses' value='1'>
            <p/>
            <button class="btn btn-primary" type="submit">Submit form</button>
        </form>
        <p/>
    </div>

    <?php include $root . '/app/view/fragment/fragmentFooter.html'; ?>

    <!-- ----- fin viewInsert -->