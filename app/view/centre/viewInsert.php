<!-- ----- début viewInsert -->
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
            <div class="form-group">
                <input type="hidden" name='action' value='centreCreated'>                                 
                <label for="id">label : </label><input type="text" name='label' value='Magnier'>
                <label for="id">adresse : </label><input type="text" step='any' name='adresse' value='12 rue Marie Curie'>                
            </div>
            <p/>
            <button class="btn btn-primary" type="submit">Go</button>
        </form>
        <p/>
    </div>
    <?php include $root . '/app/view/fragment/fragmentFooter.html'; ?>
<!-- ----- fin viewInsert -->