<!-- ----- debut ControllerRendezVous -->
<?php

require '../model/ModelRendezVous.php';

class ControllerRendezVous {

    public static function rendezvous($args) {
        $results = ModelRendezVous::Selection();
        include 'config.php';
        $vue = $root . '/app/view/rendezvous/viewSelect.php';
        require ($vue);
    }

    public static function AffichageCentre($args) {
        $results = ModelRendezVous::AjoutRendezVous($_GET['centre_id'], $_GET['vaccin_id'], $_GET['patient_id'], 2);
        include 'config.php';
        $vue = $root . '/app/view/rendezvous/viewAffichageCentre.php';
        require ($vue);
    }

    public static function vaccinpossible($args) {
        $results = ModelRendezVous::choixVaccinRDV($_GET['centre'], $_GET['patient_id']);
        include 'config.php';
        $vue = $root . '/app/view/rendezvous/viewRendezVous.php';
        require ($vue);
    }

    public static function SelecCentre($args) {
        $results = ModelRendezVous::SelecStatut($_GET['patient']);
        if ($results['doseNecess'] == $results['nbInjection'] AND $results['nbInjection'] != NULL) {
            include 'config.php';
            $vue = $root . '/app/view/rendezvous/viewVacciné.php';
            require ($vue);
        } else if ($results['nbInjection'] == NULL) {
            $results3 = ModelRendezVous::SelectionCentreDispo();
            include 'config.php';
            $vue = $root . '/app/view/rendezvous/viewCentrePossible.php';
            require ($vue);
        } else if ($results['nbInjection'] < $results['doseNecess'] OR $results['nbInjection'] > 0) {
            $results2 = ModelRendezVous::SelectionCentre($results['vaccin_id']);
            include 'config.php';
            $vue = $root . '/app/view/rendezvous/viewCentreRestant.php';
            require ($vue);
        }
    }
}
?>
<!-- ----- fin ControllerPatient -->
