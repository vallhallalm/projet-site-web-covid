<!-- ----- debut ControllerVaccin -->
<?php
require '../model/ModelVaccin.php';

class ControllerVaccin {

    // --- Liste des vaccins
    public static function vaccinReadAll($args) {
        $results = ModelVaccin::getAll();
        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/vaccin/viewAll.php';
        if (DEBUG) {
            echo ("ControllerVaccin : vaccinReadAll : vue = $vue");
        }
        require ($vue);
    }

    // Affiche le formulaire de creation d'un vaccin
    public static function vaccinCreate($args) {
        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/vaccin/viewInsert.php';
        require ($vue);
    }

    // Affiche un formulaire pour récupérer les informations d'un nouveau vaccin.
    // La clé est gérée par le systeme et pas par l'internaute
    public static function vaccinCreated($args) {
        // ajouter une validation des informations du formulaire
        $results = ModelVaccin::insert($_GET['label'], $_GET['doses']);
        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/vaccin/viewInserted.php';
        require ($vue);
    }

    public static function vaccinUpdate($args) {
        $results = ModelVaccin::affichageVaccin();
        include'config.php';
        $vue = $root . '/app/view/vaccin/viewUpdate.php';
        require($vue);
    }

    public static function vaccinUpdated($args) {
        $results = ModelVaccin::update();
        include 'config.php';
        $vue = $root . '/app/view/vaccin/viewUpdated.php';
        require($vue);
    }

}
?>
<!-- ----- fin ControllerVaccin -->
<a href="../../public/documentation/mesPropositions.php"></a>



