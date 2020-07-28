<?php
class Datebase{
    private $db_host = 'localhost'; 
    private $db_user = 'root'; 
    private $db_pass = ''; 
    private $db_name = 'ibijus'; 
    private $pdo;

    public function connect(){
        if(!$this->pdo){
            $this->pdo = new PDO("mysql:host=".$this->db_host."; dbname=".$this->db_name,$this->db_user, $this->db_pass);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo->exec("set names utf8");
        }else{
            return true; 
        }
    }

    public function disconnect(){
        if($this->pdo){
            $this->pdo = false; 
            return true; 
        }else{
            return false; 
        }
    }

    public function listar($query){
        $busca = $this->pdo->prepare($query);
        $busca->execute();
        return $busca->fetchAll();
    }

    public function find($query){
        $busca = $this->pdo->prepare($query);
        $busca->execute();
        return $busca->fetch();
    }

    public function insert($query){
        $busca = $this->pdo->prepare($query);
        $busca->execute();

        $res = $busca->rowCount();
        return $res;
    }

    public function delete($query){
        $busca = $this->pdo->prepare($query);
        $busca->execute();

        $res = $busca->rowCount();
        return $res;
    }
}