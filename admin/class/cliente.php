<?php
require_once('conexao.php');

class ClienteClass
{

    // Atributos da Class

    public $idCliente ;
    public $nomeCliente;
    public $dataNascCliente;
    public $telefoneCliente;
    public $enderecoCliente;
    public $areaCliente;
    public $pontosCliente;
    public $statusCliente;
    public $idVenda ;
   


    //Metodo da Class


    //Carregar
    public function __construct($id = false)
    {
        if ($id) {
            $this->idCliente  = $id;
            $this->Carregar();
        }
    }

    //Carregar

    public function Carregar()
    {
        $query = "SELECT * FROM tblcliente WHERE idCliente  = " . $this->idCliente ;

        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query);
        $lista = $resultado->fetchAll();

        foreach ($lista as $linha) {
            $this->nomeCliente = $linha["nomeCliente"];
            $this->dataNascCliente = $linha["dataNascCliente"];
            $this->telefoneCliente = $linha["telefoneCliente"];
            $this->enderecoCliente = $linha["enderecoCliente"];
            $this->areaCliente = $linha["areaCliente"];
            $this->pontosCliente = $linha["pontosCliente"];
            $this->statusCliente = $linha["statusCliente"];
            $this->idVenda  = $linha["idVenda "];
        }
    }


    //Listar
    public function Listar()
    {
        $sql = "SELECT * FROM tblcliente WHERE  statusCliente = 'ATIVO' ORDER BY idCliente  ASC";
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($sql);
        $lista = $resultado->fetchAll();
        return $lista;
    }


    //Cadastrar
    public function Cadastrar()
    {
        $query = "INSERT INTO tblcliente (nomeCliente,
                                            dataNascCliente,
                                            telefoneCliente,
                                            enderecoCliente,
                                            areaCliente,
                                            pontosCliente,
                                            statusCliente,
                                            idVenda)
                    VALUES ('" . $this->nomeCliente . "',
                             '" . $this->dataNascCliente . "',
                              '" . $this->telefoneCliente . "',
                               '" . $this->enderecoCliente . "',
                                '" . $this->areaCliente . "', 
                                '" . $this->pontosCliente . "',
                                 '" . $this->statusCliente . "',
                                 '" . $this->idVenda  . "')";

        $conn = Conexao::LigarConexao();
        $conn->exec($query);

        echo "<script>document.location='index.php?p=cliente'</script>";
    }


    //Atualizar
   
    



    public function desativar()
    {

        $query = "UPDATE tblcliente SET statusCliente ='DESATIVO' WHERE idCliente  = " . $this->idCliente ;

        $conn = Conexao::LigarConexao();
        $conn->exec($query);
    }
}
