<?php
//accède aux fonctions de gestion de la bd
require_once './inc/conn.inc.php';


/**
* Retourne les données de l'article le meix évalué
 * @return mixed
 */
function getMeilleurArticle(){
    try {

        //ouverture de la connexion
        $dbh = connectDb();

        //préparation de la requête (compliation sur le serveur)

        $sql = " select * from tb_articles WHERE evaluation= (select max(evaluation) from tb_articles); ";



        $stmt = $dbh->prepare($sql);






        $stmt->execute();

        $stmt->setFetchMode(PDO::FETCH_ASSOC);


        //récupération des données en un bloc
        $data = $stmt->fetchAll();



    } catch (PDOException $e) {
        die($e->getMessage());
    }



    return $data;

}







/**
 * selectionne et retrourne toutes les personnes
 * @return array
 */
function getAllArticles()
{

    try {

        //ouverture de la connexion
        $dbh = connectDb();

        //préparation de la requête (compliation sur le serveur)

        $sql = "SELECT * FROM tb_articles";

        // la compilation de la requête sur le serveur retour un objet PDOStatment qui représente la requête sur le serveur
        $stmt = $dbh->prepare($sql);


        //exécution de la requête
        $stmt->execute();
        //choix du mode de récuperation
        $stmt->setFetchMode(PDO::FETCH_ASSOC);


        //récupération des données en un bloc
        $data = $stmt->fetchAll();

        return $data;

    } catch (PDOException $e) {
        die($e->getMessage());
    }
}

/**
 * Retourne les données d'un article
 * @param $pId : Pk des atricles
 * @return array
 */
function getArticlesById($pId){

    try {

        //ouverture de la connexion
        $dbh = connectDb();

        //rédaction de la requête
        $sql = "SELECT * FROM tb_articles WHERE id= :id";

        // la compilation de la requête sur le serveur retour un objet PDOStatment qui représente la requête sur le serveur
        $stmt = $dbh->prepare($sql);

        //association du marqueur à une variable (E/S)
        //lier les données
        $stmt->bindParam(':id',$pId,PDO::PARAM_INT);

        //exécution de la requête
        $stmt->execute();
        //choix du mode de récuperation
        $stmt->setFetchMode(PDO::FETCH_ASSOC);


        //récupération des données en un bloc
        $data = $stmt->fetchAll();

        return $data;

    } catch (PDOException $e) {
        die($e->getMessage());
    }
}


/**
 * efface un article selon son identifiant
 * @param $pId : Pk des atricles
 * @return int Retourne le nombre d'articles effacé
 */
function delArticlesById($pId){

    try {

        //ouverture de la connexion
        $dbh = connectDb();

        //rédaction de la requête
        $sql = "DELETE FROM tb_articles WHERE id= :id";

        // la compilation de la requête sur le serveur retour un objet PDOStatment qui représente la requête sur le serveur
        $stmt = $dbh->prepare($sql);

        //association du marqueur à une variable (E/S)
        //lier les données
        $stmt->bindParam(':id',$pId,PDO::PARAM_INT);

        //exécution de la requête
        $stmt->execute();

        //choix du mode de récuperation
        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        // récupère le nombre d'enregistrement affectés par la requête
        $res= $stmt->rowCount();

        return $res;

    } catch (PDOException $e) {
        die($e->getMessage());
    }
}

/**
 * Retourne les données d'un article
 * @param $pId : Pk des atricles
 * @return array
 */
function addArticles($cat, $desc, $prix, $image,$eval){

    try {

        //ouverture de la connexion
        $dbh = connectDb();

        //rédaction de la requête
        $sql = "INSERT  INTO tb_articles (categorie, descr, prix, img,evaluation ) 
                VALUE (:cat, :descr, :prix, :img,:eval) ";

        // la compilation de la requête sur le serveur retour un objet PDOStatment qui représente la requête sur le serveur
        $stmt = $dbh->prepare($sql);

        //association du marqueur à une variable (E/S)
        //lier les données
        $stmt->bindParam(':cat',$cat,PDO::PARAM_INT);
        $stmt->bindParam(':descr',$desc,PDO::PARAM_STR);
        $stmt->bindParam(':prix',$prix, PDO::PARAM_STR);
        $stmt->bindParam(':img',$image,PDO::PARAM_STR);
        $stmt->bindParam(':eval',$eval,PDO::PARAM_INT);



        //exécution de la requête
        $stmt->execute();
        //choix du mode de récuperation
        $stmt->setFetchMode(PDO::FETCH_ASSOC);


        //récupération des données en un bloc
        $data = $stmt->rowCount();

        return $data;

    } catch (PDOException $e) {
        die($e->getMessage());
    }
}

