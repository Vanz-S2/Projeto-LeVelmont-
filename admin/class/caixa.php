<?php
require_once('conexao.php');

class CaixaClass
{

    // Atributos da Class

    public $idCaixa;
    public $dataCaixa;
    public $horaCaixa;
    public $aberturaCaixaValor;
    public $fechamentoCaixaValor;
    public $horaFechamentoCaixa;
    public $valorTotal;




    //Metodo da Class


    //Carregar
    public function __construct($id = false)
    {
        if ($id) {
            $this->idCaixa  = $id;
            $this->Carregar();
        }
    }

    //Carregar

    public function Carregar()
    {
        $query = "SELECT * FROM tblcaixa WHERE idCaixa  = " . $this->idCaixa;

        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query);
        $lista = $resultado->fetchAll();

        foreach ($lista as $linha) {
            $this->dataCaixa = $linha["dataCaixa"];
            $this->horaCaixa = $linha["horaCaixa"];
            $this->aberturaCaixaValor = $linha["aberturaCaixaValor"];
            $this->fechamentoCaixaValor = $linha["fechamentoCaixaValor"];
            $this->horaFechamentoCaixa = $linha["horaFechamentoCaixa"];
            $this->valorTotal = $linha["valorTotal"];
        }
    }


    //Listar
    public function Listar()
    {
        $sql = "SELECT * FROM `tblcaixa` ORDER BY idCaixa DESC";
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($sql);
        $lista = $resultado->fetchAll();
        return $lista;
    }


    //Abrir
    public function AbrirCaixa()
    {
        $query = "INSERT INTO tblcaixa (dataCaixa,
                                  horaCaixa,
                                  aberturaCaixaValor)
                VALUES ('" . $this->dataCaixa . "',
                         '" . $this->horaCaixa . "',
                          '" . $this->aberturaCaixaValor . "')";


        $conn = Conexao::LigarConexao();
        $conn->exec($query);

        echo "<script>document.location='index.php?p=caixa'</script>";
    }


    //Fechar
    public function FecharCaixa()
    {
        $sql = "UPDATE tblcaixa SET aberturaCaixaValor = '" .$this->aberturaCaixaValor."', fechamentoCaixaValor = '" .$this->fechamentoCaixaValor."',horaFechamentoCaixa = '" .$this->horaFechamentoCaixa."',valorTotal = '" .$this->valorTotal."'
        WHERE idCaixa = '" .$this->idCaixa."';";
        
        
       $connect = Conexao::LigarConexao();
       $connect->exec($sql);

        echo "<script>document.location='index.php?p=caixa'</script>";
    }
    
}
