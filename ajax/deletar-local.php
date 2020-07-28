<?php 
    require("../class/function.php");
    require("../class/datebase.class.php");
    require("../class/locais.class.php");
   
    header('Content-Type: text/html; charset=UTF-8');
    try{
        $local = new Local();
        $local->id = $_POST['id'];
        
        $res = $local->delete();

        if($res){
            $retorno = array('codigo' => 1, 'mensagem' => 'Local deletado com sucesso!');
        }else{
            $retorno = array('codigo' => 0, 'mensagem' => 'Não foi possível deletar');
        }
    
        echo json_encode($retorno);
        exit();
    } catch (Exception $e) {
        $retorno = array('codigo' => 0, 'mensagem' => $e->getMessage());
        echo json_encode($retorno);
        exit();
    }
?>