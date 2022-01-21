<?php
session_start();//estardando o php na pagina 


//validando o campo de usuario e senha
if ($_SERVER['REQUEST_METHOD'] == "POST"){
  $usuario = $_POST["inputEmail"];
  $senha = $_POST["inputSenha"];
  //se os dois campos do formulario estiver preenchido corretamente, redirecionar para a pagina da show de imagem  (USUARIO: show@showdeimagem.com SENHA: show)
  if($usuario == "show@showdeimagem.com"  && $senha == "show"){
    header("Location: http://www.showdeimagem.com.br/");
    
    //caso um dos campos estiverem errados, apresenta a mensagem de senha ou usuario invalido e volta para a pagina index
  }else{
    $_SESSION['loginErro'] = "Usuário ou senha inválida";
    header("Location: index.php");
  };
} 
?>

