<!-- ----- début ModelRendezVous -->
<?php
require_once 'Model.php';

class ModelRendezVous {
 
    public static function Selection() {
        try {
            $database = Model::getInstance();
            $query = "select nom, prenom from patient";
            $statement = $database->prepare($query);
            $statement->execute();
            $results1 = $statement->fetchAll();
            return $results1;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }
    public static function AjoutRendezVous($centre_id, $vaccin_id, $patient_id, $injection ){
        try {
            $database = Model::getInstance();
            $query = "select quantite from stock where vaccin_id=$vaccin_id AND centre_id=$centre_id";
            $statement = $database->prepare($query);
            $statement->execute();
            $result3 = $statement->fetch();
            $result3 = $result3['quantite'] - 1;
            $query = "update stock set quantite=$result3 where vaccin_id=$vaccin_id AND centre_id=$centre_id";
            $statement = $database->prepare($query);
            $statement->execute();
            $result4 = $statement;
            $query = "insert into rendezvous (centre_id, patient_id, injection, vaccin_id) values ($centre_id, $patient_id, $injection, $vaccin_id)";
            $statement = $database->exec($query);
            return $statement;
    }
    catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }
    public static function SelecStatut ($nom){
        try {
            $database = Model::getInstance();
            try {
            $query = "select id, prenom from patient where nom='$nom'";
            $statement = $database->prepare($query);
            $statement->execute();
            $result = $statement->fetch();}
             catch (PDOException $e) {
            $result=NULL;;
        }
            $result0=$result['id'];
            $prenom=$result['prenom'];
            try{
            $query = "select max(injection) as injection, vaccin_id from rendezvous where patient_id=$result0";
            $statement = $database->prepare($query);
            $statement->execute();
            $result2 = $statement->fetch();}
            catch (PDOException $e) {
            $result2=NULL;;
        }
            $vaccin_id=$result2['vaccin_id'];
            try{
            $query = "select label,doses from vaccin where id=$vaccin_id";
            $statement = $database->prepare($query);
            $statement->execute();
            $result3 = $statement->fetch();}
              catch (PDOException $e) {
            $result3=NULL;;
        }
            $results=array(
                "doseNecess"=>$result3['doses'],
                "nbInjection"=>$result2['injection'],
                "id"=>$result0,
                "nom"=>$nom,
                "prenom"=>$prenom,
                "vaccin_id"=>$vaccin_id,
                "vaccin"=>$result3['label'],
            );
            return $results;
        } catch (PDOException $e) {
            return NULL;
        }
    }
            public static function SelectionCentreDispo() {
        try {
            $database = Model::getInstance();
            $query = "select id,label from centre";
            $statement = $database->prepare($query);
            $statement->execute();
            $result=$statement->fetchAll();
            return $result;
        }
        catch (PDOException $e) {
            return NULL;
            }}
        
        
        public static function choixVaccinRDV($centre, $patient_id){
            try {
                $database = Model::getInstance();
                $query = "select vaccin_id from stock where centre_id = $centre order by quantite";
                $statement = $database->prepare($query);
                $statement->execute();
                $results = $statement->fetchAll();
                $results= end($results);
                $vaccin_id=$results['vaccin_id'];
                $result1= ModelRendezVous::AjoutRendezVous($centre, $vaccin_id , $patient_id, 1 );
                $query="select label from vaccin where id=$vaccin_id";
                $statement=$database->prepare($query);
                $statement->execute();
                $result2=$statement->fetch();
                $query="select quantite from stock where vaccin_id=$vaccin_id AND centre_id=$centre";
                $statement=$database->prepare($query);
                $statement->execute();
                $result3=$statement->fetch();
                $result3=$result3['quantite']-1;
                $query="update stock set quantite=$result3 where vaccin_id=$vaccin_id AND centre_id=$centre";
                $statement=$database->prepare($query);
                $statement->execute();
                $result4=$statement;
                if ($result1==NULL OR $result4==NULL){
                    $results=NULL;
                }
                else{
                    $results=array(
                        1=>$vaccin_id,
                        2=>$result2,
                    );
                }
                return $results;
            } catch (PDOException $e) {
                return NULL;
            }
        }
        public static function SelectionCentre($vaccin_id) {
        try {
            $database = Model::getInstance();
            $query = "select centre_id from stock where vaccin_id = $vaccin_id";
            $statement = $database->prepare($query);
            $statement->execute();
            $results1 = $statement->fetchAll();
            $query = "select label from centre order by id";
            $statement = $database->prepare($query);
            $statement->execute();
            $results2 = $statement->fetchAll();
            $results=array(
                'stock'=>$results1,
                'centre'=>$results2,
            );
            return $results;
        } catch (PDOException $e) {
            return NULL;
        }
    }

}
?>
<!-- ----- fin ModelRendezVous -->
