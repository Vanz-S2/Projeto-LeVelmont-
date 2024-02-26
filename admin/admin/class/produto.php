<?php
require_once('conexao.php');

class ProdutoClass
{

    // Atributos da Class

    public $idProduto;
    public $nomeProduto;
    public $tipoProduto;
    public $precoProdutoUnitario;
    public $statusProduto;
    public $descricaoProduto;
    public $fotoProduto;
    public $categoriaProduto;



    //Metodo da Class



    //Carregar
    public function __construct($id = false)
    {
        if ($id) {
            $this->idProduto = $id;
            $this->Carregar();
        }
    }

    //Carregar

    public function Carregar()
    {
        $query = "SELECT * FROM tblproduto WHERE idProduto = " . $this->idProduto;

        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query);
        $lista = $resultado->fetchAll();

        foreach ($lista as $linha) {
            $this->nomeProduto = $linha["nomeProduto"];
            $this->tipoProduto = $linha["tipoProduto"];
            $this->precoProdutoUnitario = $linha["precoProdutoUnitario"];
            $this->statusProduto = $linha["statusProduto"];
            $this->descricaoProduto = $linha["descricaoProduto"];
            $this->fotoProduto = $linha["fotoProduto"];
            $this->categoriaProduto = $linha["categoriaProduto"];
        }
    }


    //Listar
   

    public function Listar()
{
    $sql = "SELECT * FROM tblproduto ORDER BY FIELD(statusProduto, 'ATIVO', 'DESATIVADO') ASC";
    $conn = Conexao::LigarConexao();
    $resultado = $conn->query($sql);
    $lista = $resultado->fetchAll();
    return $lista;
}






    //Cadastrar
    public function Cadastrar()
    {
        $query = "INSERT INTO tblproduto (nomeProduto,
                                            tipoProduto,
                                            precoProdutoUnitario,
                                            statusProduto,
                                            descricaoProduto,
                                            fotoProduto,
                                            categoriaProduto)
                    VALUES ('" . $this->nomeProduto . "',
                             '" . $this->tipoProduto . "',
                              '" . $this->precoProdutoUnitario . "',
                               '" . $this->statusProduto . "',
                                '" . $this->descricaoProduto . "', 
                                '" . $this->fotoProduto . "',
                                 '" . $this->categoriaProduto . "')";

        $conn = Conexao::LigarConexao();
        $conn->exec($query);

        echo "<script>document.location='index.php?p=produto'</script>";

    }

    public function Atualizar(){
          
        $sql = "UPDATE tblproduto SET nomeProduto = '".$this->nomeProduto."', tipoProduto = '".$this->tipoProduto."', descricaoProduto = '".$this->descricaoProduto."', categoriaProduto = '".$this->categoriaProduto."', precoProdutoUnitario = '".$this->precoProdutoUnitario."', fotoProduto = '".$this->fotoProduto."', statusProduto = '".$this->statusProduto."'
         WHERE tblproduto.idProduto = '" . $this->idProduto."';";  
  
         $connect = Conexao::LigarConexao();
         $connect->exec($sql);
         echo "<script>document.location='index.php?p=produto'</script>";
  }

    public function desativar()
    {

        $query = "UPDATE tblproduto SET statusProduto ='DESATIVADO' WHERE idProduto = " . $this->idProduto;

        $conn = Conexao::LigarConexao();
        $conn->exec($query);
    }
}
