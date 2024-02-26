<?php
require_once('conexao.php');

class VendasClass
{

    // Atributos da Class

    public $idVenda ;
    public $idFuncionario;
    public $idCliente ;
    public $produtodaVenda;
    public $quantidadeVenda;
    public $preçoVenda;
    public $dataVenda;
    public $horaVenda;
    public $statusVenda;
    public $idPagamento ;


    //Metodo da Class


    //Carregar
    public function __construct($id = false)
    {
        if ($id) {
            $this->idVenda = $id;
            $this->Carregar();
        }
    }

    //Carregar

    public function Carregar()
    {
        $query = "SELECT * FROM tblvenda WHERE idVenda = " . $this->idVenda;

        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query);
        $lista = $resultado->fetchAll();

        foreach ($lista as $linha) {
            $this->idFuncionario = $linha["idFuncionario"];
            $this->idCliente = $linha["idCliente"];
            $this->produtodaVenda = $linha["produtodaVenda"];
            $this->quantidadeVenda = $linha["quantidadeVenda"];
            $this->preçoVenda = $linha["preçoVenda"];
            $this->dataVenda = $linha["dataVenda"];
            $this->horaVenda = $linha["horaVenda"];
            $this->statusVenda = $linha["statusVenda"];
            $this->idPagamento = $linha["idPagamento"];
        }
    }


    //Listar
    public function Listar()
    {
        $sql = "SELECT * FROM tblvenda ORDER BY FIELD(idPagamento, 'ATIVO', 'DESATIVADO') ASC";
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($sql);
        $lista = $resultado->fetchAll();
        return $lista;
    }


    //Cadastrar
    public function Cadastrar()
    {
        $query = "INSERT INTO tblvenda (idFuncionario,
                                            idCliente,
                                            produtodaVenda,
                                            quantidadeVenda,
                                            preçoVenda,
                                            dataVenda,
                                            horaVenda,
                                            statusVenda,
                                            idPagamento)
                    VALUES ('" . $this->idFuncionario . "',
                             '" . $this->idCliente . "',
                              '" . $this->produtodaVenda . "',
                               '" . $this->quantidadeVenda . "',
                                '" . $this->preçoVenda . "', 
                                '" . $this->dataVenda . "',
                                 '" . $this->horaVenda . "',
                                 '" . $this->statusVenda . "',
                                 '" . $this->idPagamento . "')";

        $conn = Conexao::LigarConexao();
        $conn->exec($query);

        echo "<script>document.location='index.php?p=vendas'</script>";
    }



    //Atualizar
    public function Atualizar()
    {
        $sql = "UPDATE tblvenda SET idFuncionario = '".$this->idFuncionario."', idCliente = '".$this->idCliente."',produtodaVenda = '".$this->produtodaVenda."', quantidadeVenda = '" .$this->quantidadeVenda."',preçoVenda = '" .$this->preçoVenda."',dataVenda = '" .$this->dataVenda."', horaVenda = '" .$this->horaVenda."',statusVenda = '" .$this->statusVenda."',idPagamento = '" .$this->idPagamento."'
         WHERE idFuncionario = '".$this->idFuncionario."';";
        $connect = Conexao::LigarConexao();
        $connect->exec($sql);

        echo "<script>document.location='index.php?p=vendas'</script>";
    }
    
       

    //Desativar
    public function desativar()
    {

        $query = "UPDATE tblvenda SET idPagamento ='DESATIVO' WHERE idFuncionario = " . $this->idFuncionario;

        $conn = Conexao::LigarConexao();
        $conn->exec($query);
    }
}
