<?php
/**
 * Created by PhpStorm.
 * User: LMO
 * Date: 22.11.2017
 * Time: 21:38
 * fonction : contrôlleur
 */


// chargement de la configuration
require 'inc/config.php';


//chargement du modèle

require './model/article.model.php';
require './model/categorie.model.php';



$data=getAllArticles();
$data1=getAllCategorie();


$description = "";
$prix= "";
$image="";

$erreurs = [];


// exécuter ce qui suit seulement lorsque le formulaire est reçu
if (isset($_POST['frm1'])) {

    // récupération des valeurs
    $categorie = filter_input(INPUT_POST, 'cat',FILTER_VALIDATE_INT);
    //Gestion du chmap obligatoire
    if($categorie === null || $categorie=== ""){
        $erreurs[] = "La catégorie est obligatoire";
    }



    $description = filter_input(INPUT_POST, 'desc',FILTER_SANITIZE_STRING);
    //Gestion du chmap obligatoire
    if($description === null || $description=== ""){
        $erreurs[] = "La decription est obligatoire";
    }



    $prix = filter_input(INPUT_POST, 'prix',FILTER_VALIDATE_FLOAT);
    $image = filter_input(INPUT_POST, 'image',FILTER_SANITIZE_STRING);
    $eval = filter_input(INPUT_POST, 'eval',FILTER_VALIDATE_INT);


    if(empty($erreurs)) {
        // ajout en db
        addArticles($categorie, $description, $prix, $image,$eval);
        // redirection
        header('location:accueil.php');
    }

}



?>
<?php include './view/ajoutarticle.view.php'?>