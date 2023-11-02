<?php 
    require "dbConnection.php";
    require "contact.php";

    $bdd = new BaseDeDonnees();
    $mysqlClient = $bdd->getConnexion();


    if(isset($_GET["id"]) && $_GET["id"]>0){
        $id=$_GET["id"];

        Contact::supprimer($mysqlClient,$id);
        header("Location:admin.php");

    }
?>