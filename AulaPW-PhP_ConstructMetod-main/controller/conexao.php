<?php
//criação da classe de conexão
class Conexao {
    private $host = "localhost"; // criação da variavel "host" privada
    private $usuario = "root"; // criação da variavel "usuario" privada
    private $senha = "";   // criação da variavel "senha" privada  
    private $banco = "cliente"; // criação da variavel "banco" privada
    private $conexao; // criação da variavel "conexao" privada

    //criação do construct metod através da função
    public function __construct() {
        //passagem dos parametros para o mysqli
        $this->conexao = new mysqli($this->host, $this->usuario, $this->senha, $this->banco);
        //mensagem para o erro da conexão
        if ($this->conexao->connect_error) {
            die("Falha na conexão: " . $this->conexao->connect_error);
        }
    }
     //função para o recebimento da conxão com seus valores
    public function getConexao() {
        //retorno dos valores passados da conexão
        return $this->conexao;
    }
}

?>