(function(){

  //recuperar elementos
  const senha = document.getElementById("inputSenha"); //senha obtida
  const chk = document.getElementById("chk"); // check box obtido

  // add evento 
  chk.addEventListener('change', showpwd); 
  //função para exibir a senha
  function showpwd(i){
    const target = i.target;
    
    try{ // tentar fazer a função
      if(target.checked){
        senha.type = 'text'; // se tiver marcado tranforma em testo 
      }else{
        senha.type = 'password'; // se não, mantenha escondido 
      }
    }catch{
      alert('error');
    }
  }
}());