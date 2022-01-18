
<!-- ----- debut Router -->
<?php
require ('../controller/Controller.php');
require ('../controller/ControllerVaccin.php');
require ('../controller/ControllerPatient.php');
require ('../controller/ControllerCentre.php');
require ('../controller/ControllerDoc.php');
require ('../controller/ControllerStock.php');
require ('../controller/ControllerInnov.php');
require ('../controller/ControllerRendezVous.php');
// --- récupération de l'action passée dans l'URL
$query_string = $_SERVER['QUERY_STRING'];

// fonction parse_str permet de construire 
// une table de hachage (clé + valeur)
parse_str($query_string, $param);

// --- $action contient le nom de la méthode statique recherchée
$action = htmlspecialchars($param["action"]);
$action = $param ['action'];
unset($param['action']);
$args = $param;

// --- Liste des méthodes autorisées
switch ($action) {
    case "vaccinReadAll" :
    case "vaccinCreate" :
    case "vaccinCreated" :
    case "vaccinUpdate" :
    case "vaccinUpdated" :
        ControllerVaccin::$action($args);
        break;
    case "patientReadAll" :
    case "patientCreate" :
    case "patientCreated" :
        ControllerPatient::$action($args);
        break;
    case "centreReadAll" :
    case "centreCreate" :
    case "centreCreated" :
        ControllerCentre::$action($args);
        break;
    case "rendezvous" :
    case "SelecCentre" :
    case "AffichageCentre":
    case "vaccinpossible" :
        ControllerRendezVous::$action($args);
        break;
    case "liste" :
    case "nbdoses" :
    case "attribution" :
    case "insert" :
        ControllerStock::$action($args);
        break;
    case "stat" :
    case "nonvaccine" :
    case "vaccinCentre" :
    case "vaccination" :
    case "centreVaccin" :
    case "centrevaccinaffiche" :
    case "vaccinSomme" :
        ControllerInnov::$action($args);
        break;
    case "doc1" :
    case "doc2" :
    case "doc3" :
    case "pointdevue" :
        ControllerDoc::$action($args);
        break;
    default :
        $action = "Accueil";
        Controller::$action($args);
}
?>
<!-- ----- Fin Router -->

