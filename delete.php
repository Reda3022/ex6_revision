<?php


// chargement de la configuration
require './inc/config.php';

//chargement du modèle

require './model/article.model.php';


//récupération et validation de la valeur passé en paramètre d'url
$num = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
// Traite la réponse du filtre. Vérifie que ce soit un nombre ou du moins que la vriable n'est pas vide.
if (($num === false) || ($num === null)) {
    //header('location:404.html');
    echo('location:404.html');
} else {
    // récupération des données d'un article selon son id
    $data = delArticlesById($num);
    header('location: accueil.php');
}



