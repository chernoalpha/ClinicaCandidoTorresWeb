<?php
session_start();

include_once '../Login/ProtectPaginas.php';
protect();

if(isset($_SESSION["tipoUsuario"])){
    $tipo_user = $_SESSION["tipoUsuario"];
    
    if ($tipo_user != "Administrador"){
        header("Location: ../Telas/Home.php");
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clinica Cândido Torres</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat+Alternates">
    <link href="https://fonts.googleapis.com/css?family=Raleway:600" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <link rel="stylesheet" type="text/css" href="../css/cadastro.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:600" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="../js/jquery-3.2.1.js"></script>
    <script src="../js/login.js"></script>
    <script src="../js/check.js"></script>
    
    <script type="text/javascript">
            
            $(document).ready(function(){
              
              var tipo_user = "<?php echo $tipo_user ?>";
              
              if(tipo_user != "Administrador"){
                   document.getElementById("opcaoUser").style.display = "none";
              }
                               
            });
        
        </script>
    
</head>
<body ondragstart="return false;">
    
  <?php include '../util/nav.php' ?>

  <div class="centro">
    <div class="conteudo">
     <fieldset>
            <legend>Cadastro de Usuário</legend>   
            <form action="../Usuario/RegistraUsuario.php" method="POST">
            
                <p> 
                    <label for="nomeU">Nome</label> 
                    
                </p>
                    <input type="text" name="nome" id="nomeU" required>
                
                <p> 
                    <label for="loginU">Login</label> 
                    
                </p>
                    <input type="text" name="login" id="loginU" required>
                <p> 
                    <label for="senhaU">Senha</label> 

                </p>
                    <input type="password" name="senha" id="senhaU" required>
                
                <p> 
                    <label for="tipoU">Tipo de Usuário</label>                 
                </p>
                    <select name="tipoUsuario" id="tipoU">
                    <option value="Administrador"> Administrador </option>
                    <option value="Recepcionista"> Recepcionista </option>
                    <option value="Medico"> Médico </option>    
                    </select>
                
                <button type="submit" name="salvar" class="bt-salvar">Salvar</button>
                <a href="../Usuario/TelaUsuarioTable.php"><button type="button" class="bt-buscar">Buscar</button></a>
            </form>
        </fieldset>
    </div>
  </div>

<?php include '../util/footer.php' ?>

</body>
</html>