<?php


class Conexao
{

    public static function LigarConexao()
    {
        
            // $conn = new PDO('mysql:dbname=dbpizzariaprincipal;host=localhost', 'root', '');
            $conn = new PDO('mysql:dbname=u283879542_levelmont;host=smpsistema.com.br', 'u283879542_levelmont', 'SenacLeVelmont01');
            //$conn = new PDO("SERVER=195.179.239.0;USER=u283879542.levelmont;PASSWORD=SenacLeVelmont01:DATABASE=u283879542_levelmont;SSL MODE=None");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        
    }
}









// try {

//     // $conn = new PDO('mysql:dbname=dbpizzariaprincipal;host=localhost', 'root', '');
//     $conn = new PDO('mysql:dbname=u283879542_levelmont;host=smpsistema.com.br', 'u283879542_levelmont', 'SenacLeVelmont01');
//     //$conn = new PDO("SERVER=195.179.239.0;USER=u283879542.levelmont;PASSWORD=SenacLeVelmont01:DATABASE=u283879542_levelmont;SSL MODE=None");
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     return $conn;
// } catch (PDOException $e) {
//     // Se algo der errado na conexão, será capturado aqui
//     die("Erro na conexão com o banco de dados: " . $e->getMessage());
// }



// Testando a conexão
// try {
//     $conexao = Conexao::LigarConexao();
//     echo "Conexão bem-sucedida!";
//     // Aqui você pode realizar operações no banco de dados, se necessário
// } catch (Exception $e) {
//     echo "Erro: " . $e->getMessage();
// }
