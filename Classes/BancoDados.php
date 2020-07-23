<?php

class BancoDados {

    public function getConexao(){
       $conexao = null;

       try{
        $conexao = new PDO('mysql:host=localhost;dbname=bemoluser;', 'root','');
        /*echo ("Conexão estabelecida");*/
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
       }catch(PDOException $erro){
           echo 'Erro, '.$erro->getMessage();
       }
       return $conexao;
    }
    
}