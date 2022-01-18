<!-- ----- debut ControllerStock -->
<?php
require '../model/ModelStock.php';

class ControllerStock {

    // --- Liste des stocks par vaccin par centre
    public static function liste($args) {
        $results = ModelStock::getAll();

        include 'config.php';
        $vue = $root . 'app/view/stock/viewAll.php';
        require ($vue);
    }

    // Affiche le nb de doses par centre
    public static function nbdoses($args) {
        $results = ModelStock::sommeDose();
        include 'config.php';
        $vue = $root . 'app/view/stock/viewSomme.php';
        require ($vue);
    }

    // Affiche un formulaire pour récupérer les informations d'un nouveau stock.
    // La clé est gérée par le systeme et pas par l'internaute
    public static function attribution($args) {
        $results = ModelStock::affichage();
        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/stock/viewInsert.php';
        require ($vue);
    }

    public static function insert($args) {
        $results = ModelStock::insert($_GET['vaccin'], $_GET['centre'], $_GET['doses']);
        if ($results == -1) {
            ControllerStock::vaccinUpdate($args);
        } else {
            include 'config.php';
            $vue = $root . 'app/view/stock/viewInserted.php';
            require ($vue);
        }
    }

    public static function vaccinUpdate($args) {
        $results = ModelStock::update($_GET['vaccin'], $_GET['centre'], $_GET['doses']);
        include 'config.php';
        $vue = $root . 'app/view/stock/viewInserted.php';
        require ($vue);
    }

}
?>
<!-- ----- fin ControllerStock -->
<a href="../../public/documentation/mesPropositions.php"></a>



