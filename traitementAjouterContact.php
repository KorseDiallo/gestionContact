<?php 
    require_once "dbConnection.php";
    require_once "contact.php";
    if(isset($_POST["ajouter"])){
        if(!empty($_POST["nom"]) && !empty($_POST["prenom"]) && !empty($_POST["telephone"])){
            $nom=$_POST["nom"];
            $prenom=$_POST["prenom"];
            $telephone=$_POST["telephone"];

        $bdd = new BaseDeDonnees();
        $mysqlClient = $bdd->getConnexion();
        $contact = new Contact ($nom,$prenom,$telephone);
        $contact->ajouterContact($mysqlClient);
        // header("Location:admin.php");
        echo "Inscription reussie";

        }else{
            echo "les champs ne doivent pas être vident";
        }
    }

    

?>