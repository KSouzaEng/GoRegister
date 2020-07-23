<?php

class Usuarios{

    public $id;
    public $nome;
    public $telefone;
    public $usuario;
    public $senha;
    public $confirmarSenha;
    public $cep;
    public $rua;
    public $bairro;
    public $numero;
    public $cidade;
    public $estado;

    private $conexao;

    public function __construct($con)
    {
        $this->conexao = $con;
    }

    public function criar()
    {
            
            $SQL = "INSERT INTO cadastrousuarios(nome,telefone,usuario,senha,cep,rua,bairro,numero,cidade,estado) VALUES (:nome, :telefone, :usuario,:senha,:cep, :rua, :bairro, :numero, :cidade, :estado)";
    
          
            $stmt = $this->conexao->prepare($SQL);
          
            $stmt->bindParam(':nome', $this->nome);
            $stmt->bindParam(':telefone', $this->telefone);
            $stmt->bindParam(':usuario', $this->usuario);
            $stmt->bindParam(':senha', $this->senha);
            $stmt->bindParam(':cep', $this->cep);
            $stmt->bindParam(':rua', $this->rua);
            $stmt->bindParam(':bairro', $this->bairro);
            $stmt->bindParam(':numero', $this->numero);
            $stmt->bindParam(':cidade', $this->cidade);
            $stmt->bindParam(':estado', $this->estado);

    
            if ($stmt->execute()){
                return true;
            }
      
            return false;
        }

     

   

    public function logar($email, $senha){

        global $pdo;

        $SQL = $this->conexao->prepare("SELECT id_usuario FROM cadastrousuarios WHERE usuario= :e AND senha=:s");

        $SQL->bindValue(":e",$email);
        $SQL->bindValue(":s",$senha);
        $SQL->execute();
        if($SQL->fetchColumn() > 0){
            $dado = $SQL->fetch();
            session_start();
            $_SESSION['id_usuario'] = $dado['id_usuario'];
            return  true;

        }
        else{
            return  false;
        }

    }
  

}