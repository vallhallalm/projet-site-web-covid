<!-- ----- debut ControllerPatient -->
<?php
require '../model/ModelPatient.php';

class ControllerPatient {

    // --- Liste des patients
    public static function patientReadAll($args) {
        $results = ModelPatient::getAll();
        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/patient/viewAll.php';
        if (DEBUG)
            echo ("ControllerPatient : patientReadAll : vue = $vue");
        require ($vue);
    }

    // Affiche le formulaire de creation d'un vaccin
    public static function patientCreate($args) {
        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/patient/viewInsert.php';
        require ($vue);
    }

    // Affiche un formulaire pour récupérer les informations d'un nouveau vaccin.
    // La clé est gérée par le systeme et pas par l'internaute
    public static function patientCreated($args) {
        // ajouter une validation des informations du formulaire
        $results = ModelPatient::insert($_GET['nom'], $_GET['prenom'], $_GET['adresse']);
        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/patient/viewInserted.php';
        require ($vue);
    }

}
?>
<!-- ----- fin ControllerPatient -->
<a href="../../public/documentation/mesPropositions.php"></a>



