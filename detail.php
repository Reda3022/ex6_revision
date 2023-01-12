<?php
/**
 * Created by PhpStorm.
 * User: LMO
 * Date: 22.11.2017
 * Time: 23:15
 */


require 'inc/config.php';
require './model/personne.model.php';


$id= $_GET['id'];

$data = getPersonneById($id);
$PageTitle =  SITE_NAME.'|détail';
$section = 'une personne';


include './view/header.view.php';
include './view/detail.view.php';
include './view/footer.view.php';
