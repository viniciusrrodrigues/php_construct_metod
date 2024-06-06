<?php
// recebendo requerimentos da "pessoa.php"
require_once '../model/pessoa.php';

//criação da classe "PessoaController"
class PessoaController{
    private $pessoa; //criação da variavel "pessoa"
    
    // adicinando o construct metodo atraves de uma função
    public function __construct(){
        $this->pessoa = new Pessoa(); //criação do objeto "pessoa" atraves da Pessoa
        $this->inserir(); //acessando o inserir
    }

    //criação da função "inserir"
    public function inserir(){
        $this->pessoa->setNome($_POST['nome']); //setando o atributo "nome" atraves do metodo POST
        $this->pessoa->setEndereco($_POST['endereco']); //setando o atributo "endereco" atraves do metodo POST
        $this->pessoa->setBairro($_POST['bairro']); //setando o atributo "bairro" atraves do metodo POST
        $this->pessoa->setCep($_POST['cep']); //setando o atributo "cep" atraves do metodo POST
        $this->pessoa->setCidade($_POST['cidade']); //setando o atributo "cidade" atraves do metodo POST
        $this->pessoa->setEstado($_POST['estado']); //setando o atributo "estado" atraves do metodo POST
        $this->pessoa->setTelefone($_POST['telefone']); //setando o atributo "telefone" atraves do metodo POST
        $this->pessoa->setCelular($_POST['celular']); //setando o atributo "celular" atraves do metodo POST
        
        $this->pessoa->inserir(); //acessando o inserir atraves da pessoa

    }
}
new PessoaController(); //cria o objeto "PessoaController" e inicializa 
?>