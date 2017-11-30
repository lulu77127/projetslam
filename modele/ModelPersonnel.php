<?php

require_once 'ModelPdo.php';

class ModelPersonnel extends ModelPdo {
	
   public static function recupalluser() {
        try {
			$sql="SELECT  * FROM UTILISATEUR ";
			$result=ModelPdo::$pdo->query($sql);
			$liste=$result->fetchAll();
			return $liste;
        } catch (PDOException $e) {
            echo $e->getMessage();
            die("Erreur dans la BDD ");
        }
		
   }
   
   public static function insertpersonne($nom,$email) {
        try {
        	
			 $sql="INSERT INTO personne(id,nom,mail) VALUES(NULL,'$nom','$email')";
			$result=ModelPdo::$pdo->exec($sql);
        } catch (PDOException $e) {
            echo $e->getMessage();
            die();
        }
		
   }
public static function suprPersonne($id) {
        try {
        	
			 $sql="DELETE FROM `personne` WHERE `personne`.`id` = '$id'";
			$result=ModelPdo::$pdo->exec($sql);
        } catch (PDOException $e) {
            echo $e->getMessage();
            die();
        }
		
   }
public static function editPersonne($nom,$mail,$id) {
        try {
        	
			 $sql="UPDATE personne SET nom='$nom' , mail='$mail' WHERE id='$id'";
			$result=ModelPdo::$pdo->exec($sql);
        } catch (PDOException $e) {
            echo $e->getMessage();
            die();
        }
}
public static function veriflogin($login,$mdp) {
	try{
		$result=ModelPdo::$pdo;
		$req2=$result->prepare("SELECT * FROM  UTILISATEUR WHERE login='".$login."' AND mdp='".$mdp."';");
		$req2->execute();
		$result=$req2->fetch(PDO::FETCH_BOTH);
		return $result;
}
	catch (PDOException $e) {
            echo $e->getMessage();
            die("Erreur dans la BDD ");
        }
		
}
public static function modifmdp($id,$mdp) {
        try {
        	$result=ModelPdo::$pdo;
			$sql=$result->prepare("UPDATE UTILISATEUR SET mdp='$mdp' WHERE id='$id'");
			$sql->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
            die();
        }
}
public static function recupid($mail) {
        try {
        	 $result=ModelPdo::$pdo;
			 $req2=$result->prepare("SELECT id FROM UTILISATEUR WHERE mail='$mail'");
			 $req2->execute();
			 $result=$req2->fetch(PDO::FETCH_BOTH);
			 return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
            die();
        }
}

public static function creeinter($obj,$desc,$grav,$type,$iduser,$idlieu) {
        try {
			 $result=ModelPdo::$pdo;
			 $sql=$result->prepare("INSERT INTO DEMANDEINT (id, objet, description, gravite, datedemande, type, etat, datedebut, datefin, idintervenant, iduser, idlieu) VALUES ('', '$obj', '$desc', '$grav', CURDATE(), '$type', 'En attente', '', '', NULL, '$iduser', '$idlieu')");
			 $sql->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
            die();
        }
}
public static function recupalllieu() {
        try {
        	 $result=ModelPdo::$pdo;
			 $req2=$result->prepare("SELECT libelle FROM LIEU");
			 $req2->execute();
			 $result=$req2->fetchAll();
			 return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
            die();
        }
}
public static function recupidlieu($lieu) {
        try {
        	 $result=ModelPdo::$pdo;
			 $req2=$result->prepare("SELECT id FROM LIEU WHERE libelle='$lieu'");
			 $req2->execute();
			 $result=$req2->fetch(PDO::FETCH_BOTH);
			 return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
            die();
        }
}
public static function recupalltype() {
        try {
        	 $result=ModelPdo::$pdo;
			 $req2=$result->prepare("SELECT libelle FROM LIEU");
			 $req2->execute();
			 $result=$req2->fetchAll();
			 return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
            die();
        }
}
public static function creelieu($lieu,$bat,$etage) {
        try {
			 $result=ModelPdo::$pdo;
			 $sql=$result->prepare("INSERT INTO LIEU (id, libelle, batiment, etage) VALUES ('', '$lieu', '$bat', '$etage')");
			 $sql->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
            die();
        }
}
public static function modifuser($id,$prenom,$nom,$mail,$login,$mdp,$statut) {
        try {
			 $result=ModelPdo::$pdo;
			 $sql=$result->prepare("UPDATE UTILISATEUR SET prenom=$prenom, nom=$nom, mail=$mail, login=$login, mdp=$mdp, statut=$statut WHERE id=$id");
			 $sql->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
            die();
        }
}
public static function creeuser($prenom,$nom,$mail,$login,$mdp,$statut) {
        try {
			 $result=ModelPdo::$pdo;
			 $sql=$result->prepare("INSERT INTO UTILISATEUR (id, prenom, nom, mail, login, mdp, statut) VALUES ('', '$prenom', '$nom', '$mail', '$login', '$mdp', '$statut')");
			 $sql->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
            die();
        }
}

}
?>