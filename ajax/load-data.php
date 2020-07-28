<?php 
    require("../class/function.php");
    require("../class/datebase.class.php");
    require("../class/locais.class.php");
   
    header('Content-Type: text/html; charset=UTF-8');
    try{
        $html = "";
        $local = new Local();
        $lista = $local->listar();

        if( sizeof($lista) ) {
            $html .='
            <div class="card-body table-responsive">
                <table id="table-result" class="table table-striped table-bordered w-100">
                    <thead class="thead-dark">
                        <th scope="col">Nome</th>
                        <th scope="col">Data de Visita</th>
                        <th>Ação</th>
                    </thead>
                    <tbody>';
                        foreach($lista as $local){
                        $html .='<tr id="'.$local['id'].'" class="'.$local['uf'].'">
                            <td>'.$local['nome'].'</th>
                            <th>'.formatarData($local['date']).'</th>
                            <th>
                                <a class="badge badge-primary" onclick="buscarLocal('.$local['id'].')">Editar</a>
                                <a class="badge badge-danger" onclick="deletarLocal('.$local['id'].')">Apagar</a>

                            </th>
                        </tr>';
                        }
                    $html .='</tbody>
                </table>
            </div>';
        }else{
            $html .= '<div class="alert alert-info my-auto">Você ainda não cadastrou nenhum local. <a data-toggle="modal" data-target="#modalCadastro">Clique aqui para cadastrar agora mesmo!</a></div>';
        }

        $retorno = array('codigo' => 1, 'data' => $html);
        echo json_encode($retorno);
        exit();
    } catch (Exception $e) {
        $retorno = array('codigo' => 0, 'mensagem' => $e->getMessage());
        echo json_encode($retorno);
        exit();
    }
?>