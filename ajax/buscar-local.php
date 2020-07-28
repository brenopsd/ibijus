<?php 
    require("../class/function.php");
    require("../class/datebase.class.php");
    require("../class/locais.class.php");
   
    header('Content-Type: text/html; charset=UTF-8');
    try{
        $local = new Local();
        $dados = $local->find( $_POST['id']);

        $retorno = array('codigo' => 1, 'dados' => $dados);
        echo json_encode($retorno);
        exit();
    } catch (Exception $e) {
        $retorno = array('codigo' => 0, 'mensagem' => $e->getMessage());
        echo json_encode($retorno);
        exit();
    }
?>