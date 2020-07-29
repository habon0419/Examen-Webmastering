<?php

class Validator{
    var $errors;
    var $data;

public function __construct($data){
       $this->data=$data;
}

public function isEmpty($fields,$errorsms){
    if( !isset($this->data[$fields]) || empty($this->data[$fields])){
        $this->errors[$fields]=$errorsms;
    }

}
public function isConfirm($fields,$errorsms){
    if( !isset($this->data[$fields]) || $this->data[$fields]!=$this->data[$fields."_confirm"]){
        $this->errors[$fields]=$errorsms;
    }

}

public function isValid(){
     return empty($this->errors);
}

public function isUniq($fields,$model,$errorsms){

    if(!isset($this->data[$fields])  ||
     $model->findByCritere(trim($this->data[$fields]))!=false){
        $this->errors[$fields]=$errorsms;
    }
}
}

?>