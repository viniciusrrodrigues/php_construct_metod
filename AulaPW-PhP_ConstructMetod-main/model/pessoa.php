<?php
//busca o requerimento da pasta conexao.php
require_once '../controller/conexao.php';

//criação da classe "Pessoa"
class Pessoa{
 //criação das variaveis privada da classe 
    private $id;
    private $nome;
    private $endereco;
    private $bairro;
    private $cep;
    private $cidade;
    private $estado;
    private $telefone;
    private $celular;
    private $conexao;

    // setando e recebendo o valor das variaveis e tendo o retordo das mesmas
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;

    }
    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getEndereco(){
        return $this->endereco;
    }
    public function setEndereco($endereco){
        $this->endereco = $endereco;
    }
    public function getBairro(){
        return $this->bairro;
    }
    public function setBairro($bairro){
        $this->bairro = $bairro;
    }
    public function getCep(){
        return $this->cep;
    }
    public function setCep($cep){
        $this->cep = $cep;
    }
    public function getCidade(){
        return $this->cidade;
    }
    public function setCidade($cidade){
        $this->cidade = $cidade;
    }
    public function getEstado(){
        return $this->estado;
    }
    public function setEstado($estado){
        $this->estado = $estado;
    }
    public function getTelefone(){
        return $this->telefone;
    }
    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }
    public function getCelular(){
        return $this->celular;
    }
    public function setCelular($celular){
        $this->celular = $celular;
    }
    
    //criação do metodo construct metodo atraves da função
    public function __construct(){
        //inicializando o novo objeto "conexao"
        $this->conexao = new Conexao();
    }
    
    //criação da função "inserir"
    public function inserir(){
        // criação da variavel "sql" e atribuindo o "cliente" junto com seus atributos 
        $sql = "INSERT INTO cliente (`nome`, `endereco`, `bairro`, `cep`, `cidade`, `estado`, `telefone`, `celular`) VALUES (?,?,?,?,?,?,?,?)";
    
        // criação da variavel "stmt" que esta inicializando e pegando os valorres da Conexao e do sql
        $stmt = $this->conexao->getConexao()->prepare($sql);
        
        // vinculando as propriedades do objeto atual aos parâmetros da instrução SQL
        $stmt->bind_param('ssssssss', $this->nome, $this->endereco, $this->bairro, $this->cep, $this->cidade, $this->estado, $this->telefone, $this->celular);
        return $stmt->execute(); //retorno da variavel atual e execução
    }
}

?>