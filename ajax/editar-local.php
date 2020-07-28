<?php 
    require("../class/function.php");
    require("../class/datebase.class.php");
    require("../class/locais.class.php");
   
    header('Content-Type: text/html; charset=UTF-8');
    try{
        $now = date('Y-m-d H:i:s');
        $local = new Local();
        $local->id = $_POST['id'];
        $local->nome = $_POST['nome'];
        $local->cep = formatarCep($_POST['cep']);
        $local->logradouro = $_POST['logradouro'];
        $local->complemento = $_POST['complemento'];
        $local->numero = $_POST['numero'];
        $local->bairro = $_POST['bairro'];
        $local->uf = $_POST['estado'];
        $local->cidade = $_POST['cidade'];
        $local->date = formatarDataDB($_POST['data']);
        $res = $local->update();

        if($res){
            $retorno = array('codigo' => 1, 'mensagem' => 'Local salvo com sucesso!');
        }else{
            $retorno = array('codigo' => 1, 'mensagem' => 'Nada foi alterado.');
        }

        echo json_encode($retorno);
        exit();
    } catch (Exception $e) {
        $retorno = array('codigo' => 0, 'mensagem' => $e->getMessage());
        echo json_encode($retorno);
        exit();
    }
?>