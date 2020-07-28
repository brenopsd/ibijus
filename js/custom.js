$(document).ready(function() {
    loadData();
    $('.cep').mask('00000-000');
    $('.data').mask('00/00/0000');
    $('.show_tooltip').tooltip()

    function limpa_formulário_cep() {
        // Limpa valores do formulário de cep.
        $("#local-logradouro").val("");
        $("#local-bairro").val("");
        $("#local-cidade").val("");
        $("#local-uf").val("");
    }

    function limpa_formulário_cep_editar() {
        // Limpa valores do formulário de cep.
        $("#editar-local-logradouro").val("");
        $("#editar-local-bairro").val("");
        $("#editar-local-cidade").val("");
        $("#editar-local-uf").val("");
    }

    //Quando o campo cep perde o foco.
    $("#local-cep").blur(function() {

        //Nova variável "cep" somente com dígitos.
        var cep = $(this).val().replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                $("#local-logradouro").val("...");
                $("#local-bairro").val("...");
                $("#local-cidade").val("...");
                $("#local-uf").val("...");

                //Consulta o webservice viacep.com.br/
                $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                    if (!("erro" in dados)) {
                        //Atualiza os campos com os valores da consulta.
                        $("#local-logradouro").val(dados.logradouro);
                        $("#local-bairro").val(dados.bairro);
                        $("#local-cidade").val(dados.localidade);
                        $("#local-uf").val(dados.uf);
                    } //end if.
                    else {
                        //CEP pesquisado não foi encontrado.
                        limpa_formulário_cep();
                        toastr.info( 'CEP não encontrado')
                    }
                });
            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                toastr.info( 'Formato de CEP inválido')
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    });


        //Quando o campo cep perde o foco.
    $("#local-cep").blur(function() {

        //Nova variável "cep" somente com dígitos.
        var cep = $(this).val().replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                $("#local-logradouro").val("...");
                $("#local-bairro").val("...");
                $("#local-cidade").val("...");
                $("#local-uf").val("...");

                //Consulta o webservice viacep.com.br/
                $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                    if (!("erro" in dados)) {
                        //Atualiza os campos com os valores da consulta.
                        $("#local-logradouro").val(dados.logradouro);
                        $("#local-bairro").val(dados.bairro);
                        $("#local-cidade").val(dados.localidade);
                        $("#local-uf").val(dados.uf);
                    } //end if.
                    else {
                        //CEP pesquisado não foi encontrado.
                        limpa_formulário_cep();
                        toastr.info( 'CEP não encontrado')
                    }
                });
            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                toastr.info( 'Formato de CEP inválido')
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    });

            //Quando o campo cep perde o foco.
    $("#local-cep").blur(function() {

        //Nova variável "cep" somente com dígitos.
        var cep = $(this).val().replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                $("#local-logradouro").val("...");
                $("#local-bairro").val("...");
                $("#local-cidade").val("...");
                $("#local-uf").val("...");

                //Consulta o webservice viacep.com.br/
                $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                    if (!("erro" in dados)) {
                        //Atualiza os campos com os valores da consulta.
                        $("#local-logradouro").val(dados.logradouro);
                        $("#local-bairro").val(dados.bairro);
                        $("#local-cidade").val(dados.localidade);
                        $("#local-uf").val(dados.uf);
                    } //end if.
                    else {
                        //CEP pesquisado não foi encontrado.
                        limpa_formulário_cep();
                        toastr.info( 'CEP não encontrado')
                    }
                });
            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                toastr.info( 'Formato de CEP inválido')
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    });

        //Quando o campo cep perde o foco.
        $("#editar-local-cep").blur(function() {

            //Nova variável "cep" somente com dígitos.
            var cep = $(this).val().replace(/\D/g, '');
    
            //Verifica se campo cep possui valor informado.
            if (cep != "") {
    
                //Expressão regular para validar o CEP.
                var validacep = /^[0-9]{8}$/;
    
                //Valida o formato do CEP.
                if(validacep.test(cep)) {
    
                    //Preenche os campos com "..." enquanto consulta webservice.
                    $("#editar-local-logradouro").val("...");
                    $("#editar-local-bairro").val("...");
                    $("#editar-local-cidade").val("...");
                    $("#editar-local-uf").val("...");
    
                    //Consulta o webservice viacep.com.br/
                    $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {
    
                        if (!("erro" in dados)) {
                            //Atualiza os campos com os valores da consulta.
                            $("#editar-local-logradouro").val(dados.logradouro);
                            $("#editar-local-bairro").val(dados.bairro);
                            $("#editar-local-cidade").val(dados.localidade);
                            $("#editar-local-uf").val(dados.uf);
                        } //end if.
                        else {
                            //CEP pesquisado não foi encontrado.
                            limpa_formulário_cep_editar();
                            toastr.info( 'CEP não encontrado')
                        }
                    });
                } //end if.
                else {
                    //cep é inválido.
                    limpa_formulário_cep_editar();
                    toastr.info( 'Formato de CEP inválido')
                }
            } //end if.
            else {
                //cep sem valor, limpa formulário.
                limpa_formulário_cep_editarr();
            }
        });
    
});

$('#cadastrarLocal').on('submit', function(e){
    e.preventDefault();
    var data = new FormData( $('#cadastrarLocal')[0] );
  
    $.ajax({
      type : 'POST',
      url  : './ajax/cadastrar-local.php',
      data : data,
      dataType: 'json',
      processData: false,
      contentType: false,
      success :  function(response){
        if(response.codigo == 1){	
            toastr.success(response.mensagem);
            $("#modalCadastro").modal('hide');
            $("#cadastrarLocal")[0].reset();
            loadData();
        }else{		
            toastr.warning(response.mensagem);		
        }
      }, error: function (request, status, error) {
        console.log(request.responseText);
      }
    });
})

function deletarLocal(id){
    var data = 'id='+id;
    $.ajax({
      type : 'POST',
      url  : './ajax/deletar-local.php',
      data : data,
      dataType: 'json',
      success :  function(response){
        if(response.codigo == 1){	
            toastr.success(response.mensagem);
            loadData();
        }else{		
            toastr.warning(response.mensagem);		
        }
      }, error: function (request, status, error) {
        console.log(request.responseText);
      }
    });
}

function buscarLocal(id){
    var data = 'id='+id;
    $.ajax({
      type : 'POST',
      url  : './ajax/buscar-local.php',
      data : data,
      dataType: 'json',
      success :  function(response){
        if(response.codigo == 1){	
            $("#editar-id").val(response.dados.id);
            $("#editar-local-nome").val(response.dados.nome);
            $("#editar-local-cep").val(response.dados.cep);
            $("#editar-local-logradouro").val(response.dados.logradouro);
            $("#editar-local-complemento").val(response.dados.complemento);
            $("#editar-local-numero").val(response.dados.numero);
            $("#editar-local-bairro").val(response.dados.bairro);
            $("#editar-local-uf").val(response.dados.uf);
            $("#editar-local-cidade").val(response.dados.cidade);
            $("#editar-local-data").val(response.dados.date);
            $("#modalEditar").modal('show');
        }else{		
            toastr.warning(response.mensagem);		
        }
      }, error: function (request, status, error) {
        console.log(request.responseText);
      }
    });
}

function loadData(){
    $.ajax({
        type : 'POST',
        url  : './ajax/load-data.php',
        dataType: 'json',
        success :  function(response){
          if(response.codigo == 1){	
              $(".card-data").html(response.data);
          }else{		
              toastr.warning(response.mensagem);		
          }
        }, error: function (request, status, error) {
          console.log(request.responseText);
        }
      });
}

$('#editarLocal').on('submit', function(e){
    e.preventDefault();
    var data = new FormData( $('#editarLocal')[0] );
  
    $.ajax({
      type : 'POST',
      url  : './ajax/editar-local.php',
      data : data,
      dataType: 'json',
      processData: false,
      contentType: false,
      success :  function(response){
        if(response.codigo == 1){	
            toastr.success(response.mensagem);
            $("#modalEditar").modal('hide');
            $("#editarLocal")[0].reset();
            loadData();
        }else{		
            toastr.warning(response.mensagem);		
        }
      }, error: function (request, status, error) {
        console.log(request.responseText);
      }
    });
})
