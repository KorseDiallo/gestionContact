<?php 

require "dbConnection.php";
require "contact.php";

$bdd = new BaseDeDonnees();
$mysqlClient = $bdd->getConnexion();


$result= Contact::listesContact($mysqlClient);
?>