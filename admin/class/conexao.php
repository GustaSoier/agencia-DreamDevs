<?php

class Conexao{
    public static function LigarConexao(){
        //PDO serve para fazer conexão com o banco de dados
        $conn = new PDO('mysql:dbname=u283879542_dreamdevs;host=smpsistems.com.br', 'u283879542_dreamdevs', 'SenacAgencia05');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    }
}