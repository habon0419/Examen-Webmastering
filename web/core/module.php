<?php 

/**
 * Module par defaut
 */
$moduleEncours="produit";

if(isset($_GET['module'])){
    $moduleEncours=$_GET['module'];
  }
    switch($moduleEncours){

      case 'produit':
        include_once SRC_MODELES."produitmodel.php";
        include_once SRC_CONTROLLERS."produitController.php";
        include_once SRC_ROUTING."produitRouting.php";

        break;
    }

?>