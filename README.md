# GoRegister

![GitHub language count](https://img.shields.io/github/languages/count/KSouzaEng/GoRegister?style=flat)  ![GitHub top language](https://img.shields.io/github/languages/top/KSouzaEng/GoRegister)  ![GitHub last commit](https://img.shields.io/github/last-commit/KSouzaEng/GoRegister)

O **GoRegister** é uma aplicação desenvolvida em **PHP** que consiste na implementação da funcionalidade de criação de contas de usuários. Para tanto foi desenvolvida uma interface web que permite ao cliente a interação com "um sistema" que pode ser acessado logo depois do cadastro ser realizado.

## Linguagens utilizadas

- PHP 3.0
- HTML 5
- CSS 3
- MySQL

## Começando..

Para executar o projeto, será necessário instalar os seguintes programas:
- [Laragon: Usado para iniciar o servidor web e fazer o gerenciamento do banco de dados (PHP embutido e MySQL)](https://laragon.org/download/index.html)
- [Visual Studio Code: Para desenvolvimento do projeto (ou editor de sua preferência)](https://code.visualstudio.com/download)

## Desenvolvimento

Para iniciar o desenvolvimento, é necessário clonar o projeto do GitHub num diretório de sua preferência:
```shell
cd "diretorio de sua preferencia" 
git clone git@github.com:KSouzaEng/GoRegister.git  
```

## Construção 

Para que o cadastro seja relizado é necesario criar o Banco de dados e a tabela que irá armazenar as informações do usuário.

```shell
<!--Criação do Bnaco de dados-->
 CREATE DATABASE bemoluser;

 <!--Criação da Tabela-->
  CREATE TALBLE cadastrousuarios(id_usuario INT(11) AUTO_INCREMENT PRIMARY KEY ,
   ->  nome VARCHAR(30) NOT NULL, 
    ->  telefone VARCHAR(30) NOT NULL,
    ->  usuario VARCHAR(40) NOT NULL,
    ->  senha VARCHAR(32) NOT NULL,
	--> cep VARCHAR(10) NOT NULL,
	--> rua VARCHAR(20) NOT NULL,
	-->bairro VARCHAR(20) NOT NULL.
	--> numero  VARCHAR(10) NOT NULL.
	--> cidade VARCHAR(20) NOT NULL,
	--> estado VARCHAR(20) NOT NULL);
```
## Features

O projeto apresentado descreve a implementação de um cadastro de usuarios. Para futuras implementações faz-se necessário desenvolver a área do cliente onde ele poderá interagir  com o sistema por meio de ações tais como enviar uma mensagem e editar ou excluir seus dados cadastrais.

