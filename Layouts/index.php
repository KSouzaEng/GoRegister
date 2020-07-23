<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
   <link rel="stylesheet" href="CSS/style.css">
    <title>Login</title>
</head>
<body>

<div class="form-body">

 <h1>Login</h1>

<form  method="POST">

    <input type="email"  name="user" placeholder="Usuário">

    <input type="password"  name="senha" placeholder="Senha">

   <input type="submit"   value="ACESSAR"  >
  <a href="cadastrarUsuarios.php">Ainda não é inscrito? <strong>Cadastra-se!</strong></a>
  
</form>
</div>


</body>
</html>

<?php
  require '../classes/Usuarios.php';
  require '../classes/BancoDados.php';

$bancoDados = new BancoDados();
$conexao =$bancoDados->getConexao();

$u = new Usuarios($conexao);

if (isset($_POST['user'])){ 

  $u->usuario = $_POST['user'];
  $u->senha = $_POST['senha'];

}
  /*var_dump($_POST); */
if(!empty( $u->usuario) && !empty( $u->senha)){

if ($u->logar($u->usuario,$u->senha)){
  
      
     header ("Location: Areaprivada.php");
}
  else{

    echo "Email ou senha estão incorretos";
  }


}
?>