<?php
    class Produit extends DaoMysql{
        var $idProd;
        var $libProd;
        var $qty;
        var $price;
        var $idsc;

        public function __construct(){
            parent::__construct();
        }
        public function add($data){
            return $this->query("INSERT INTO produit (libProd, qty, price) VALUES (:libProd, :qty, :price)", $data);
        }
        public function up(){
            return $this->query("UPDATE  produit SET price=:pu, qty=:qty  WHERE idProd=:idProd ", array("price" => $this->price, "qty" => $this->qty, "idProd" => $this->idProd));

        }
        public function findAll(){
            return $this->query("SELECT *FROM produit ORDER BY idProd DESC")->fetchAll(PDO::FETCH_CLASS, __CLASS__);
        }
        public function findById($id){
            return $this->query("SELECT p.idsc, libsc as 'souscategorie', qty, price  FROM produit  p, souscategorie sc,v WHERE p.idsc=:sc.idsc",array("idProd"=>$id))->fetchObject(__CLASS__);
        }
        public function findByCritere($critere){
            return $this->query("SELECT p.idProd, libProd, qty, price FROM produit  WHERE libProd=:libProd",array("libProd"=>$critere))->fetchObject(__CLASS__);
           
        }
        public function findByLib($libProd){
            return $this->query("SELECT p.idsc as 'souscategorie', libProd, qty, price,  FROM produit p, souscategorie sc WHERE libProd=:libProd", array("libProd"=>$libProd))->fetchObject(__CLASS__);
        }
        public function delete($id){
            return $this->query("DELETE FROM produit WHERE idProd = :idProd",
                                array("idProd" => $id));        }

        public static function getInstance()
        {
            return new Produit();
        }
    }
?>