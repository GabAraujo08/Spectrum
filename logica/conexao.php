<?php
  class Conexao{
    public static function conectar(){
        // $conexao = new PDO("TIPO_BANCO:host=SERVIDOR;dbname=NOME_BANCO", "USUARIO", "SENHA"); 
        $conexao = mysqli_connect("localhost", "root", "", "bdspectrum");

// verifica se a conexão foi bem sucedida
if (!$conexao) {
    die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
}
    }
}
