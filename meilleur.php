<?php

// chargement de la configuration
require './inc/config.php';
require './model/article.model.php';
//chargement du modèle
$data =getMeilleurArticle();

$json = json_encode($data);


// informe le desinataire de la nature du contenu à recevoir
header('Content-Type: application/json');

echo $json;



