<?php

$arr_data['data_form']=array(
    "btn"=>array(
        "btn_value"=>"btn_product",
        "btn_text"=>"Ajouter"
    ),
    "fields"=>array(
        "libProd"=>"",
        "idProd"=>0
    )
    );
if(isset($_POST['addProduit'])){
    //Action d'ajouter
   if(($_POST['addProduit']=="btn_product")){
       unset($_POST['addProduit']);
       unset($_POST['idProd']);
        $validator=new Validator($_POST);
        
        if($validator->isValid()){
            $prodmodel=Produit::getInstance();
            
            if($validator->isValid()){
                $prodmodel->add($_POST);
                $arr_data['lesProduits']=$prodmodel->findAll();
            }else{
                $arr_data['errors']=  $validator->errors;
             }

        }else{
            $arr_data['errors']=  $validator->errors;
        }


   }else if($_POST['addProduct']=="btn_edit_product"){
       extract($_POST);
       $prodmodel=Product::getInstance();
       $prodmodel->idProd=$idProd;
       $prodmodel->libProd=$libProd;
       $prodmodel->qty=$qty;
       $prodmodel->price=$price;
       $prodmodel->up();
       render("produit",1);

   }
}

if(isset($_GET['action'])){
    if($_GET['action']=="edit"){
        $id=$_GET['idProd'];
        $arr_data['data_form']['btn']['btn_value']="btn_edit_product";
        $arr_data['data_form']['btn']['btn_text']="Modifier";
        $lePoduit=Produit::getInstance()->findById($id);
        $arr_data['data_form']['fields']['libProd']=$lePoduit->libProd;
        $arr_data['data_form']['fields']['idProd']=$lePoduit->idProd;
        $arr_data['data_form']['fields']['qty']=$lePoduit->qty;
        $arr_data['data_form']['fields']['price']=$lePoduit->price;
        $arr_data['data_form']['fields']['img']=$lePoduit->img;
    }
}

?>