<?php 
require(__DIR__."/class/function.php");
require(__DIR__."/class/datebase.class.php");
require(__DIR__."/class/locais.class.php");
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/toastr.css">

        <title>Projeto - Meus locais</title>
    </head>
    <body>
    
        <div class="container">
        <h5 class="my-4 font-weight-bold ">Meus locais
            <a class="btn-primary btn-add-local show_tooltip" data-toggle="modal" data-target="#modalCadastro" data-placement="top" title="Cadastrar novo local">+</a>
        </h5>
            <div class="card card-data">
              
            </div>
        </div>

        <div class="modal fade" id="modalCadastro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Adicionar Local</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="cadastrarLocal">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="local-nome" class="col-form-label">Nome:</label>
                                <input type="text" class="form-control" id="local-nome" name="nome" required>
                            </div>
                            <div class="form-group">
                                <label for="local-cep" class="col-form-label">CEP:</label>
                                <input type="text" class="form-control cep" id="local-cep" name="cep" required>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="local-logradouro" class="col-form-label">Logradouro:</label>
                                    <input type="text" class="form-control" id="local-logradouro" name="logradouro" required>
                                </div>
                                <div class="form-group col-6">
                                    <label for="local-complemento" class="col-form-label">Complemento:</label>
                                    <input type="text" class="form-control" id="local-complemento" name="complemento" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="local-numero" class="col-form-label">Numero:</label>
                                    <input type="number" class="form-control" id="local-numero" name="numero" required>
                                </div>
                                <div class="form-group col-6">
                                    <label for="local-bairro" class="col-form-label">Bairro:</label>
                                    <input type="text" class="form-control" id="local-bairro" name="bairro" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="local-uf" class="col-form-label">Estado:</label>
                                    <input type="text" maxlength="2" class="form-control" id="local-uf" name="estado" required>
                                </div>
                                <div class="form-group col-6">
                                    <label for="local-cidade" class="col-form-label">Cidade:</label>
                                    <input type="text" class="form-control" id="local-cidade" name="cidade" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="local-data" class="col-form-label">Data:</label>
                                <input type="text" class="form-control data" id="local-data" name="data" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            <button type="submit" class="btn btn-primary">Cadastrar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Editar Local</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="editarLocal">
                        <div class="modal-body">
                            <input type="hidden" class="form-control" id="editar-id" name="id" required>
                            <div class="form-group">
                                <label for="editar-local-nome" class="col-form-label">Nome:</label>
                                <input type="text" class="form-control" id="editar-local-nome" name="nome" required>
                            </div>
                            <div class="form-group">
                                <label for="editar-local-cep" class="col-form-label">CEP:</label>
                                <input type="text" class="form-control cep" id="editar-local-cep" name="cep" required>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="editar-local-logradouro" class="col-form-label">Logradouro:</label>
                                    <input type="text" class="form-control" id="editar-local-logradouro" name="logradouro" required>
                                </div>
                                <div class="form-group col-6">
                                    <label for="editar-local-complemento" class="col-form-label">Complemento:</label>
                                    <input type="text" class="form-control" id="editar-local-complemento" name="complemento" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="editar-local-numero" class="col-form-label">Numero:</label>
                                    <input type="number" class="form-control" id="editar-local-numero" name="numero" required>
                                </div>
                                <div class="form-group col-6">
                                    <label for="editar-local-bairro" class="col-form-label">Bairro:</label>
                                    <input type="text" class="form-control" id="editar-local-bairro" name="bairro" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="editar-local-uf" class="col-form-label">Estado:</label>
                                    <input type="text" maxlength="2" class="form-control" id="editar-local-uf" name="estado" required>
                                </div>
                                <div class="form-group col-6">
                                    <label for="editar-local-cidade" class="col-form-label">Cidade:</label>
                                    <input type="text" class="form-control" id="editar-local-cidade" name="cidade" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="editar-local-data" class="col-form-label">Data:</label>
                                <input type="text" class="form-control data" id="editar-local-data" name="data" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="js/toastr.js"></script>
    <script src="js/mask.js"></script>
    <script src="js/custom.js"></script>
    </body>
</html>