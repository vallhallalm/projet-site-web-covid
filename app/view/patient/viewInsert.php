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
                <input type="hidden" name='action' value='patientCreated'>                                 
                <label for="id">Nom : </label><input type="text" name='nom' value='Magnier'>
                <label for="id">Prénom : </label><input type="text" name='prenom' value='Louis'>
                <label for="id">Adresse : </label><input type="text" name='adresse' value='Troyes'> 
            </div>
            <p/>
            <button class="btn btn-primary" type="submit">Go</button>
        </form>
        <p/>
    </div>
    <?php include $root . '/app/view/fragment/fragmentFooter.html'; ?>
