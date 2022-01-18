
<!-- ----- début viewSelect -->
<?php
require ($root . '/app/view/fragment/fragmentHeader.html');
?>

<body>
    <div class="container">
        <?php
        include $root . '/app/view/fragment/fragmentMenu.html';
        include $root . '/app/view/fragment/fragmentJumbotron.html';
        ?>

        <form role="form" method='get' action='router.php'>
            <input type="hidden" name='action' value='centrevaccinaffiche'>
            <label for="vaccin">vaccin : </label> <select class="form-control" id='vaccin' name='vaccin' style="width: 100px">
                <?php
                foreach ($results as $element) {
                    $value = $element['id'];
                    $label = $element['label'];
                    echo ("<option value=$value>$label</option>");
                }
                ?></select>
            <button class="btn btn-primary" type="submit">Go !</button>
        </form>
    </div>

    <?php include $root . '/app/view/fragment/fragmentFooter.html'; ?>

    <!-- ----- fin viewSelect -->