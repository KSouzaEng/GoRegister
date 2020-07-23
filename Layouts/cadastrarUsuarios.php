
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
   <link rel="stylesheet" href="CSS/form-style.css">
    <title>Cadastro de usuários</title>
    <a href="index.php">Sair</a>

</script>
</head>
<body>

<div class="container">
<h1>Cadastro de Usuários</h1>
<form  method="POST">
      <label>Nome</label>
      <input type="text" class="form-control" name="name" placeholder="Nome" maxlength="30">
 
    <div class="form-row">
    <div class="form-group col-md-6">
      <label >Telefone</label>
      <input type="text" class="form-control" name="tel" maxlength="30" placeholder="980569900">
    </div>
    <div class="form-group col-md-6">
      <label >Usuário</label>
      <input type="email" class="form-control" name="user" maxlength="30" placeholder="Exemple@email.com">
    </div>

    <div class="form-group col-md-6">
      <label for="inputPassword4">Senha</label>
      <input type="text" class="form-control" name="senha" maxlength="15" placeholder="2190aG11">
    </div>
    <div class="form-group col-md-6">
      <label>Confirmar Senha</label>
      <input type="text" class="form-control" name="confirmpass"  maxlength="15" placeholder="2190aG11">
    </div>
</div>

<h1> Informe seu endereço</h1>
    
<div class="form-row">
    <div class="form-group col-md-6">
      <label>CEP</label>
      <input type="text" class="form-control" name="cep" placeholder="00000-00">
    </div>
    <div class="form-group col-md-6">
      <label >Rua</label>
      <input type="text" class="form-control" name="rua" placeholder=" Ex: Rua das Bromélias">
    </div>
    <div class="form-group col-md-6">
      <label >Bairro</label>
      <input type="text" class="form-control" name="bairro" placeholder="Timbiras">
    </div>

    <div class="form-group col-md-6">
      <label for="inputPassword4">Número</label>
      <input type="text" class="form-control" name="num">
    </div>
    <div class="form-group col-md-6">
      <label>Cidade</label>
      <input type="text" class="form-control" name="cidade" placeholder="Kings Landing">
    </div>

    <div class="form-group col-md-6">
      <label>Estado</label>
      <input type="text" class="form-control" name="uf" placeholder="Westerous"  >
    </div>
</div>
  <button type="submit" >Cadastrar</button>

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

if (isset($_POST['name'])){ 

  $u->nome = $_POST['name'];
  $u->telefone = $_POST['tel'];
  $u->usuario = $_POST['user'];
  $u->senha = $_POST['senha'];
  $u->confirmarsenha = $_POST['confirmpass'];
  $u->cep = $_POST['cep'];
  $u->rua = $_POST['rua'];
  $u->bairro = $_POST['bairro'];
  $u->numero = $_POST['num'];
  $u->cidade = $_POST['cidade'];
  $u->estado = $_POST['uf'];
  

  /*if($u->cep){
    
    $endereco = get_endereco($u->cep);
   echo  $u->rua = $endereco->logradouro."<br>";
   echo  $u->bairro = $endereco->bairro."<br>";
   echo $u->cidade = $endereco->localidade."<br>";
   echo  $u->estado =  $endereco->uf."<br>";
  
  }*/
  
  if($u->senha != $u->confirmarsenha){

    echo("Senhas Não Concidem");
  }
if(empty ( $u->nome) && empty( $u->telefone) && empty( $u->usuario) && empty( $u->senha) && empty( $u->confirmarsenha) && empty ( $u->cep) &&  empty ( $u->rua) && empty ( $u->bairro) && empty ( $u->numero) && empty ( $u->cidade) && empty ( $u->estado)){

  echo ("Preencha todos os campos");

}
 else {

  $u ->criar();
      echo "Contato criado com sucesso<br>";

    }
 }

?>