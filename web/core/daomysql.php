<?php

    abstract class DaoMysql{
        private $pdo=null;
    public function __construct(){
        if($this->pdo==null){
            try{
                $this->pdo = new PDO('mysql:host=localhost;dbname=test', 'root','');
                $this->pdo ->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->pdo ->setAttribute (PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            }catch(Exception $ex){
                die("Connexion Echoué");
            }

        }
        
        
    }
   
    protected function query($sql,$param=null){
        if($param==null){
            return $this->pdo->query($sql);
        }else{
            $req=$this->pdo->prepare($sql);
            $req->execute($param);
            return $req;
        }
    }

    public abstract function add($data);
    public abstract function up();
    public abstract function findAll();
    public abstract function findById($id);
    public abstract function findByCritere($critere);
    public abstract function delete($id);
    public static abstract function getInstance();

    }

?>