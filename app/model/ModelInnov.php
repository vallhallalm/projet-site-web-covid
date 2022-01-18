<!-- ----- début ModelInnov -->
<?php

require_once 'Model.php';

class ModelInnov {

    public static function nonVaccine() {
        try {
            $database = Model::getInstance();
            $query = "select distinct patient_id from rendezvous order by patient_id";
            $statement = $database->prepare($query);
            $statement->execute();
            $result = $statement->fetchAll();
            //$result=$result['patient_id'];
            $query = "select * from patient order by id";
            $statement = $database->prepare($query);
            $statement->execute();
            $results1 = $statement->fetchAll();
            $results = array(
                0 => $result,
                1 => $results1,
            );
            return $results;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }

    public static function centrevaccin() {
        try {
            $database = Model::getInstance();
            $query = "select id, label from vaccin";
            $statement = $database->prepare($query);
            $statement->execute();
            $result = $statement->fetchAll();
            return $result;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }

    public static function centrevaccinaffiche($vaccinid) {
        try {
            $database = Model::getInstance();
            $query = "SELECT MAX(quantite) as maxi FROM stock where vaccin_id=$vaccinid";
            $statement = $database->prepare($query);
            $statement->execute();
            $result1 = $statement->fetch();
            $result1 = $result1['maxi'];
            $query = "select centre_id from stock where quantite=$result1 AND vaccin_id=$vaccinid";
            $statement = $database->prepare($query);
            $statement->execute();
            $result2 = $statement->fetch();
            $result2 = $result2['centre_id'];
            $query = "select label from centre where id=$result2";
            $statement = $database->prepare($query);
            $statement->execute();
            $result3 = $statement->fetch();
            $result3 = $result3['label'];
            return $result3;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }

    public static function vaccinSomme() {
        try {
            $database = Model::getInstance();
            $query = "select sum(quantite) as somme,vaccin_id from stock group by vaccin_id";
            $statement = $database->prepare($query);
            $statement->execute();
            $result1 = $statement->fetchAll();
            $query = "select id, label from vaccin order by id";
            $statement = $database->prepare($query);
            $statement->execute();
            $result2 = $statement->fetchAll();
            $results = array(
                1 => $result1,
                2 => $result2
            );
            return $results;
        } catch (PDOException $e) {
            return -1;
        }
    }

    public static function Insert($patient, $vaccin, $centre) {
        try {
            $database = Model::getInstance();
            $query = "select id from patient where nom='$patient'";
            $statement = $database->prepare($query);
            $statement->execute();
            $result = $statement->fetch();
            $result = $result['id'];
            $query = "insert into rendezvous value ('$centre', '$patient', '1', '$result')";
            $statement = $database->prepare($query);
            $statement->execute();
            $query = "select quantite from stock where centre_id='$centre' AND vaccin_id='$vaccin'";
            $statement = $database->prepare($query);
            $statement->execute();
            $result = $statement->fetch();
            $result = $result['quantite'];
            $dose = $result - 1;
            $query = "update stock set quantite='$dose' where centre_id='$centre' AND vaccin_id='$vaccin' ";
            $statement = $database->prepare($query);
            $statement->execute();
            return 1;
        } catch (PDOException $e) {
            return -1;
        }
    }

    public static function Update($patient, $vaccin, $centre) {
        try {
            $database = Model::getInstance();
            $query = "select id from patient where nom='$patient'";
            $statement = $database->prepare($query);
            $statement->execute();
            $result = $statement->fetch();
            $result = $result['id'];
            $query = "select injection from rendezvous where patient_id='$result'";
            $statement = $database->prepare($query);
            $statement->execute();
            $result1 = $statement->fetch();
            $result1 = $result1['injection'] + 1;
            $query = "update rendezvous set injection='$result1' where patient='$result'";
            $statement = $database->prepare($query);
            $statement->execute();
            $query = "select quantite from stock where centre_id='$centre' AND vaccin_id='$vaccin'";
            $statement = $database->prepare($query);
            $statement->execute();
            $result = $statement->fetch();
            $result = $result['quantite'];
            $dose = $result - 1;
            $query = "update stock set quantite='$dose' where centre_id='$centre' AND vaccin_id='$vaccin' ";
            $statement = $database->prepare($query);
            $statement->execute();
            return 2;
        } catch (PDOException $e) {
            return -2;
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
<!-- ----- fin ModelInnov -->