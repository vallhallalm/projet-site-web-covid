<!-- ----- debut ControllerInnov -->
<?php
require '../model/ModelInnov.php';

class ControllerInnov {

    public static function nonvaccine($args) {
        $results = ModelInnov::nonVaccine();
        include 'config.php';
        $vue = $root . '/app/view/innov/viewNonVaccine.php';
        require ($vue);
    }

    public static function centreVaccin($args) {
        $results = ModelInnov::centrevaccin();
        include 'config.php';
        $vue = $root . '/app/view/innov/viewCentreVaccin.php';
        require ($vue);
    }

    public static function centreVaccinAffiche($args) {
        $results = ModelInnov::centrevaccinaffiche($_GET['vaccin']);
        include 'config.php';
        $vue = $root . '/app/view/innov/viewCentreVaccinAffiche.php';
        require ($vue);
    }

    public static function vaccinSomme($args) {
        $results = ModelInnov::vaccinSomme();
        include 'config.php';
        $vue = $root . '/app/view/innov/viewSommeVaccinAffiche.php';
        require ($vue);
    }

}
?>
<!-- ----- fin ControllerInnov -->
<a href="../../public/documentation/mesPropositions.php"></a>



