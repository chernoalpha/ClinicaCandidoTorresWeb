<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro Paciente</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat+Alternates">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/cadastroPaciente">
    <link href="https://fonts.googleapis.com/css?family=Raleway:600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:600" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="estilo.css" rel="stylesheet">

  </head>
  <body>
    <header id="topo">
    <input type="checkbox" id="bt_menu">
    <label for="bt_menu">&#9776;</label>
    <nav class="menu">
        <ul>
            <li><a href="Index.php">Inicio</a></li>
            <li><a href="#">Cadastro</a>
                <ul>
                    <li><a href="TelaCadastroUsuario.php">Usuário</a></li>
                    <li><a href="#">Médico</a></li>
                    <li><a href="../Telas/TelaCadastroPaciente.php">Paciente</a></li>
                    <li><a href="#">Funcionário</a></li>
                    <li><a href="#">Cidade</a></li>
                    <li><a href="#">Especialização</a></li>
                </ul>
            </li>
            <li><a href="#">Relatório</a></li>
            <li><a href="#">Contato</a></li>
        </ul>
    </nav>
    </header>
    
    <div class="container mid">


        <div class="row">
            <div class="col-sm-12">
                <h2 class="titulo-h2">Cadastro Paciente</h2>
                <form action="../Paciente/RegistraPaciente.php" method="POST">

            <div class="row">
                    <div class="form-group col-md-6" >
              <label for="nome">Nome:</label>
              <input type="text" class="form-control" name="txtNome" id="nome">
                    </div>
          
            <div class="form-group col-md-3">
              <label for="dataNasc">Data de Nasc:</label>
                <input type="text" class="form-control" name="txtDataNasc" id="dataNasc">
            </div>

                    <div class="form-group col-md-3">
                        <label>Número do Prontuário:</label>
                <input type="text" class="form-control" name="txtNum" id="numPront">
                    </div>
            </div>

            <div class="row">
              <div class="form-group col-md-3">
                <label for="cpf">CPF:</label>
                <input type="text" class="form-control" name="txtCPF" id="cpf">
              </div>

              <div class="form-group col-md-3">
                <label>RG:</label>
                <input type="text" class="form-control" name="txtRG" id="rg">
              </div>

              <div class="form-group col-md-5">
                <label for="email">Email:</label>
                <input type="text" class="form-control" name="txtEmail" id="email">
              </div>

              <div class="form-group col-md-1">
                <label for="sexo">Sexo:</label>
                <select class="form-control" name="cxSexo" id="sexo">
                                <option value="null">-----</option>
                                <option value="Masculino">Masculino</option>
                                <option value="Feminino">Feminino</option>
                </select>
              </div>
              </div>

              <div class="row">
                <div class="form-group col-md-4">
                  <label for="atendimento">Tipo Atendimento:</label>
                  <input type="text" class="form-control" name="txtAtendimento" id="atendimento">
                </div>

                <div class="form-group col-md-3">
                <label for="acomp">Acompanhante:</label>
                <input type="text" class="form-control" name="txtAcompanhante" id="acomp">
                </div>

                <div class="form-group col-md-3">
                  <label for="indica">Indicação:</label>
                <input type="text" class="form-control" name="txtIndicacao" id="indica"> 
                </div>
          
                <div class="form-group col-md-2">
                  <label for="eCivil">Estado Civil:</label>
                  <select class="form-control" name="cxEstadoCivil" id="eCivil">
                                <option value="null">-----</option>
                                <option value="Casado">Casado</option>
                                <option value="Solteiro">Solteiro</option>
                  </select>
                </div>
              </div>

              <div class="row">
                <div class="form-group col-md-4">
                  <label for="profissao">Profissão:</label>
                  <input type="text" class="form-control" name="txtProfissao" id="profissao">
                </div>

                <div class="form-group col-md-3">
                  <label for="cidade">Cidade:</label>
                  <input type="text" class="form-control" name="txtCidade" id="cidade">
                </div>

                <div class="form-group col-md-2">
                  <label for="estado">Estado:</label>
                  <input type="text" class="form-control" name="txtEstado" id="estado">
                </div>

                <div class="form-group col-md-3">
                  <label for="cep">CEP:</label>
                  <input type="text" class="form-control" name="txtCEP" id="cep">
                </div>
              </div>

              <div class="row">
                <div class="form-group col-md-3">
                  <label for="bairro">Bairro:</label>
                  <input type="text" class="form-control" name="txtBairro" id="bairro">
                </div>

                <div class="form-group col-md-3">
                  <label for="endereco">Endereço:</label>
                  <input type="text" class="form-control" name="txtEndereco" id="endereco">
                </div>

                <div class="form-group col-md-3">
                  <label for="numero">Numero:</label>
                  <input type="text" class="form-control" name="txtNumero" id="numero">  
                </div>

                <div class="form-group col-md-3">
                  <label for="complemento">Complemento:</label>
                  <input type="text" class="form-control" name="txtComplemento" id="complemento">
                </div>
              </div>

                    <button type="submit" class="btn btn-default btn-lg btn-cadastra" value="Cadastrar" name="btnSalvar">Cadastrar</button>

                </form>

            </div>

        </div>

    </div> 
    <footer>
    <h1>Copyright &copy 2018 - Fábrica de Software</h1>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>