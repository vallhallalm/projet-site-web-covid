<!-- ----- debut Controller -->
<?php

class Controller {

    // --- page d'acceuil
    public static function Accueil($args) {
        include 'config.php';
        $vue = $root . '/app/view/viewAccueil.php';
        if (DEBUG)
            echo ("Controller : Accueil : vue = $vue");
        require ($vue);
    }

    // --- Liste des vaccins
    public static function vaccinReadAll($args) {
        $results = ModelVaccin::getAll();
        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/vaccin/viewAll.php';
        if (DEBUG)
            echo ("ControllerVaccin : vaccinReadAll : vue = $vue");
        require ($vue);
    }

    public static function Amelioration($args) {
        $vue = '../../public/documentation/mesPropositions.php';
        require($vue);
    }

}
?>
<!-- ----- fin Controller -->
<a href="../../public/documentation/mesPropositions.php"></a>



