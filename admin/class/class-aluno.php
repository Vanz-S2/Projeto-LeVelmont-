<?php

require_once('conexao.php');

class AlunosClass{

    //Atributos
    public $idAluno;
    public $nomeAluno;
    public $dataNascAluno;
    public $emailAluno;
    public $senhaAluno;
    //public $dataCadAluno;
    public $statusAluno;
    public $fotoAluno;



    //Métodos

    public function Listar(){
        $sql = "SELECT * FROM tblalunos WHERE statusAluno = 'ATIVO' ORDER BY nomeAluno ASC";
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($sql);
        $lista = $resultado->fetchAll();
        return $lista;
    }



}//FIM da Class