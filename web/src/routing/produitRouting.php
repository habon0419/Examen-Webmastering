<?php 
        $lien=1;
        if(isset($_GET['lien'])){
          $lien=$_GET['lien'];
        }
          switch($lien){

            case 1:
               $arr_data['lesProduits']=Produit::getInstance()->findAll();
               $views=SRC_VIEWS."produits/produit.php";
            break;

            
          }

            include_once($views);
         
?>