<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link rel="icon" type="image/gif/png" href="logo.png">
  <title>Login show de imagem</title>
</head>
<body>
  
<section class="form">

  <div class="form-content">

    <form class="formFormat" name="formulario" method="POST" action="validar.php">

      <div class="logoInfo">
        <img src="logo.png" alt="logo">
        <span>
          <h1>Bem vindo</h1>
          <p>Inovar para Educar, esse é nosso objetivo!</p>
        </span>
      </div>

      <div class="formInfo">
        <p>
          <label for="inputEmail" name="inputEmail">E-mail</label>
          <input type="email" name="inputEmail" id="inputEmail">
        </p>

        <p>
          <label for="inputSenha" name="inputSenha" >Senha</label>
          <input type="password" name="inputSenha" id="inputSenha">
        </p>


    <!--mostrar mensagem de erro de acesso na pagina-->
        <p class="mensagem-erro">
            <?php
              if(isset($_SESSION['loginErro'])){
                echo $_SESSION['loginErro'];
                unset($_SESSION['loginErro']);
              }
            ?>
        </p>


        <p class="check-form">
          <input type="checkbox" name="check" id="chk">
          <label for="chk">Ver senha</label>
        </p>

        <p>
          <button type="submit">Enviar</button>
        </p>
      </div>

    </form>  
    
   
  </div>

</section>

<script src="formatacao.js"></script>

</body>
</html>