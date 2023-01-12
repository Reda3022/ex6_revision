<?php
/**
 * Created by PhpStorm.
 * User: LMO
 * Date: 22.11.2017
 * Time: 21:38
 * fonction : contrôlleur
 */

// chargement de la configuration
require './inc/config.php';

//chargement du modèle

require './model/article.model.php';



// récupération du meilleur article
$data =getMeilleurArticle();
var_dump($data);



