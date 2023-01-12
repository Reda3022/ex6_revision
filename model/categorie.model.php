<?php

//accède aux fonctions de gestion de la bd
require_once './inc/conn.inc.php';


function getAllCategorie()
{

    try {

        //ouverture de la connexion
        $dbh = connectDb();

        //préparation de la requête (compliation sur le serveur)

        $sql = "SELECT nom FROM tb_categorie";

        // la compilation de la requête sur le serveur retour un objet PDOStatment qui représente la requête sur le serveur
        $stmt = $dbh->prepare($sql);


        //exécution de la requête
        $stmt->execute();
        //choix du mode de récuperation
        $stmt->setFetchMode(PDO::FETCH_ASSOC);


        //récupération des données en un bloc
        $data1 = $stmt->fetchAll();

        return $data1;

    } catch (PDOException $e) {
        die($e->getMessage());
    }
}
