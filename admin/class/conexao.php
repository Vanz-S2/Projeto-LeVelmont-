<?php


class Conexao{

    public static function LigarConexao(){

        $conn = new PDO('mysql:dbname=dbpizzariaprincipal;host=localhost', 'root', '');
        //$conn = new PDO("SERVER=195.179.239.2;USER=u283879542.levelmont;PASSWORD=SenacLeVelmont01:DATABASE=u283879542_levelmont;SSL MODE=None");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn; 

    }
}