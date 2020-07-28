<?php

class Local{
    public $id;
    public $nome;
    public $cep;
    public $logradouro;
    public $complemento;
    public $numero;
    public $bairro;
    public $uf;
    public $cidade;
    public $date;

    public function listarLocais(){
        echo  "<br/>Confirmado o recebimento";
    }

    public function save(){
        $db = new Datebase();
        $db->connect();
      
        $query = "INSERT INTO Locais (nome, cep, logradouro, complemento, numero, bairro, uf, cidade, date)
        VALUES ('$this->nome', '$this->cep', '$this->logradouro', '$this->complemento', '$this->numero', '$this->bairro', '$this->uf', '$this->cidade', '$this->date')";

        $res = $db->insert($query);
        return $res;
    }

    public function update(){
        $db = new Datebase();
        $db->connect();
      
        $query = "UPDATE Locais SET nome = '$this->nome', cep = '$this->cep', logradouro = '$this->logradouro', complemento = '$this->complemento', numero = '$this->numero', bairro = '$this->bairro', uf = '$this->uf', cidade = '$this->cidade', date = '$this->date' WHERE id = $this->id";

        $res = $db->insert($query);
        return $res;
    }

    public function listar(){
        $query = "SELECT id, nome, uf, date FROM Locais";

        $db = new Datebase();
        $db->connect();
        $res = $db->listar($query);
        return $res;
    }

    public function delete(){
        $db = new Datebase();
        $db->connect();
      
        $query = "DELETE FROM Locais WHERE id = '$this->id'";

        $res = $db->delete($query);
        return $res;
    }

    public function find($id){
        $query = "SELECT id, nome, cep, logradouro, complemento, numero, bairro, uf, cidade, DATE_FORMAT(date,'%d/%m/%Y') AS date  FROM Locais WHERE id = '$id'";

        $db = new Datebase();
        $db->connect();
        $res = $db->find($query);
        return $res;
    }
}