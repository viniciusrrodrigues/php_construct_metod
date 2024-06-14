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

    public function listar(){
        return $this->pessoa->listar();
    
    }

    public function buscarPorId ($id){
        return $this->pessoa->buscarPorId($id);
    }
        public function atualizar($id){
        $this->pessoa->setId($id);
        $this->pessoa->setNome($_POST[ 'nome ' ]);
        $this->pessoa->setEndereco($_POST[ ' endereco']);
        $this->pessoa->setBairro($_POST['bairro']);
        $this->pessoa->setCep($_POST[' cep' ]);
        $this->pessoa->setCidade($_POST[ 'cidade']);
        $this->pessoa->setEstado($_POST[ ' estado']);
        $this->pessoa->setTelefone($_POST['telefone' ]);
        $this->pessoa->setCelular ($_POST[ 'celular']);

        $this->pessoa->atualizar($id);
    }
 }

new PessoaController(); //cria o objeto "PessoaController" e inicializa 
?>