<!-- ----- debut ControllerCentre -->
<?php
require '../model/ModelCentre.php';

class ControllerCentre {

    // --- Liste des vaccins
    public static function centreReadAll($args) {
        $results = ModelCentre::getAll();
        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/centre/viewAll.php';
        if (DEBUG)
            echo ("ControllerCentre : centreReadAll : vue = $vue");
        require ($vue);
    }

    // Affiche le formulaire de creation d'un vaccin
    public static function centreCreate($args) {
        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/centre/viewInsert.php';
        require ($vue);
    }

    // Affiche un formulaire pour récupérer les informations d'un nouveau vaccin.
    // La clé est gérée par le systeme et pas par l'internaute
    public static function centreCreated($args) {
        // ajouter une validation des informations du formulaire
        $results = ModelCentre::insert(htmlspecialchars($_GET['label']), htmlspecialchars($_GET['adresse'])
        );
        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/centre/viewInserted.php';
        require ($vue);
    }

}
?>
<!-- ----- fin ControllerCentre -->
<a href="../../public/documentation/mesPropositions.php"></a>
