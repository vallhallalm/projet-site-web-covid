<!-- ----- debut ControllerDoc -->
<?php

class ControllerDoc {

    // --- Liste des vaccins
    public static function doc1($args) {
        include 'config.php';
        $vue = $root . '/app/view/doc/viewDoc1.php';
        require ($vue);
    }

    // Affiche le formulaire de creation d'un vaccin
    public static function doc2($args) {
        include 'config.php';
        $vue = $root . '/app/view/doc/viewDoc2.php';
        require ($vue);
    }

    public static function doc3($args) {
        include 'config.php';
        $vue = $root . '/app/view/doc/viewDoc3.php';
        require ($vue);
    }

    public static function pointdevue($args) {
        include 'config.php';
        $vue = $root . '/app/view/doc/viewPDV.php';
        require ($vue);
    }

}
?>
<!-- ----- fin ControllerDoc -->
<a href="../../public/documentation/mesPropositions.php"></a>

