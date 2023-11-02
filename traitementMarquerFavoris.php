<?php 
    require "dbConnection.php";
    require "contact.php";

    $bdd = new BaseDeDonnees();
    $mysqlClient = $bdd->getConnexion();


    if(isset($_GET["id"]) && $_GET["id"]>0){
        $id=$_GET["id"];

        Contact::marquerFavoris($mysqlClient,$id);
        header("Location:admin.php");

    }

    
    // if(isset($_POST["contactId"]) ){
					
    //     if(isset($_GET["id"]) && $_GET["id"]>0){
    //     $id= $_GET["id"];
    //      Contact::marquerFavoris($mysqlClient,$id);
    //          header("Location:admin.php");
    // }
        
    // if (isset($_POST["contactId"])) {
    //     $id = $_POST["contactId"];
    //     Contact::marquerFavoris($mysqlClient, $id);
    //     header("Location: admin.php");
    // }
    

//}
?>