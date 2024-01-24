<?php


class Conexao{

    public static function LigarConexao(){

        $conn = new PDO('mysql:dbname=dbpizzaria;host=localhost', 'root', '');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn; 

    }
}