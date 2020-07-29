<?php
    define("ROOT",str_replace("index.php","",$_SERVER["SCRIPT_FILENAME"]));
    define("SRC_VIEWS",ROOT."src/views/");
    define("SRC_CONTROLLERS",ROOT."src/controllers/");
    define("SRC_MODELES",ROOT."src/modeles/");
    define("SRC_ROUTING",ROOT."src/routing/");

    //Pour recuperer l'ensemble des valeurs dans le view
    $arr_data=array();
    $arr_user=array();

    include_once ROOT."core/daomysql.php";
    include_once ROOT."core/validator.php";
    include_once ROOT."core/controller.php";
    include_once ROOT."core/module.php";


?>