<!-- ----- début ModelStock -->
<?php

require_once 'Model.php';

class ModelStock {

    private $idvaccin, $idcentre, $doses;

    // pas possible d'avoir 2 constructeurs
    public function __construct($idvaccin = NULL, $idcentre = NULL, $doses = NULL) {
        // valeurs nulles si pas de passage de parametres
        if (!is_null($idvaccin)) {
            $this->idvaccin = $idvaccin;
            $this->idprod = $idcentre;
            $this->doses = $doses;
        }
    }

    function setIdVaccin($idvaccin) {
        $this->idvaccin = $idvaccin;
    }

    function setIdCentre($idcentre) {
        $this->idcentre = $idcentre;
    }

    function setdoses($doses) {
        $this->doses = $doses;
    }

    function getIdVaccin() {
        return $this->idvaccin;
    }

    function getIdCentre() {
        return $this->idcentre;
    }

    function getdoses() {
        return $this->doses;
    }

    public static function getAll() {
        try {
            $database = Model::getInstance();
            $query = "select * from stock";
            $statement = $database->prepare($query);
            $statement->execute();
            $results1 = $statement->fetchAll();
            $query = "select label from vaccin order by id";
            $statement = $database->prepare($query);
            $statement->execute();
            $results2 = $statement->fetchAll();
            $query = "select label from centre order by id";
            $statement = $database->prepare($query);
            $statement->execute();
            $results3 = $statement->fetchAll();
            $results = array(
                1 => $results1,
                2 => $results2,
                3 => $results3,
            );
            return $results;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }

    public static function sommeDose() {
        try {
            $database = Model::getInstance();
            $query = "select centre_id, sum(quantite)as somme from stock group by centre_id";
            $statement = $database->prepare($query);
            $statement->execute();
            $results1 = $statement->fetchAll();
            $query = "select label from centre order by id";
            $statement = $database->prepare($query);
            $statement->execute();
            $results2 = $statement->fetchAll();
            $results = array(
                1 => $results1,
                2 => $results2,
            );
            return $results;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }

    public static function insert($vaccin_id, $centre_id, $doses) {
        try {
            $database = Model::getInstance();
            // ajout d'un nouveau tuple;
            $result1 = $database->prepare("select id from centre where label='$centre_id'");
            $result1->execute();
            $result1 = $result1->fetch();
            $result1 = $result1['id'];
            $result2 = $database->prepare("select id from vaccin where label='$vaccin_id'");
            $result2->execute();
            $result2 = $result2->fetch();
            $result2 = $result2['id'];
            $query = "insert into stock value ('$result1', '$result2', '$doses')";
            $statement = $database->prepare($query);
            $statement->execute();
            return 1;
        } catch (PDOException $e) {
            return -1;
        }
    }

    public static function update($vaccin_id, $centre_id, $doses) {
        try {
            $database = Model::getInstance();
            $result1 = $database->prepare("select id from centre where label='$centre_id'");
            $result1->execute();
            $result1 = $result1->fetch();
            $result1 = $result1['id'];
            $result2 = $database->prepare("select id from vaccin where label='$vaccin_id'");
            $result2->execute();
            $result2 = $result2->fetch();
            $result2 = $result2['id'];
            $query = "update stock set quantite='$doses' where centre_id='$result1' AND vaccin_id='$result2'";
            $statement = $database->prepare($query);
            $statement->execute();
            return 1;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return -1;
        }
    }

    public static function affichage() {
        try {
            $database = Model::getInstance();
            $query = "Select * from vaccin";
            $statement = $database->prepare($query);
            $statement->execute();
            $result1 = $statement->fetchall();
            $query = "Select * from centre";
            $statement = $database->prepare($query);
            $statement->execute();
            $result2 = $statement->fetchall();
            $results = array(
                1 => $result1,
                2 => $result2,
            );
            return $results;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return -1;
        }
    }

}
?>
<!-- ----- fin ModelStock -->
