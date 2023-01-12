<?php

// chargement de la configuration
require './inc/config.php';

//chargement du modèle

require './model/article.model.php';

// récupération des données deouis le modèle
$data = getAllArticles();
//var_dump($data);

include './view/header.view.php';
include './view/all.view.php';
include './view/footer.view.php';


