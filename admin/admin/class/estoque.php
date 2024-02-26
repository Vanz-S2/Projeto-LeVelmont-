<?php
require_once('conexao.php');

class EstoqueClass
{

    // Atributos da Class

    public $idEstoque ;
    public $nomedoProduto ;
    public $quantidade;
    public $preçoUnitário;
    public $datadeValidade;
    public $fornecedor;
    public $Categoria;
    public $statusEstoque;



    //Metodo da Class



    //Carregar
    public function __construct($id = false)
    {
        if ($id) {
            $this->idEstoque = $id;
            $this->Carregar();
        }
    }

    //Carregar

    public function Carregar()
    {
        $query = "SELECT * FROM tblestoque WHERE idEstoque = " . $this->idEstoque;

        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query);
        $lista = $resultado->fetchAll();

        foreach ($lista as $linha) {
            $this->nomedoProduto = $linha["nomedoProduto"];
            $this->quantidade = $linha["quantidade"];
            $this->preçoUnitário = $linha["preçoUnitário"];
            $this->datadeValidade = $linha["datadeValidade"];
            $this->fornecedor = $linha["fornecedor"];
            $this->Categoria = $linha["Categoria"];
            $this->statusEstoque = $linha["statusEstoque"];
        }
    }


    //Listar
   

    public function Listar()
{
    $sql = "SELECT * FROM tblestoque ORDER BY FIELD(statusEstoque, 'ATIVO', 'DESATIVADO') ASC";
    $conn = Conexao::LigarConexao();
    $resultado = $conn->query($sql);
    $lista = $resultado->fetchAll();
    return $lista;
}






    //Cadastrar
    public function Cadastrar()
    {
        $query = "INSERT INTO tblestoque (nomedoProduto,
                                            quantidade,
                                            preçoUnitário,
                                            datadeValidade,
                                            fornecedor,
                                            Categoria,
                                            statusEstoque)
                    VALUES ('" . $this->nomedoProduto . "',
                             '" . $this->quantidade . "',
                              '" . $this->preçoUnitário . "',
                               '" . $this->datadeValidade . "',
                                '" . $this->fornecedor . "', 
                                '" . $this->Categoria . "',
                                 '" . $this->statusEstoque . "')";

        $conn = Conexao::LigarConexao();
        $conn->exec($query);

        echo "<script>document.location='index.php?p=estoque'</script>";

    }

    public function Atualizar(){
          
        $sql = "UPDATE tblestoque SET nomedoProduto = '".$this->nomedoProduto."', quantidade = '".$this->quantidade."', fornecedor = '".$this->fornecedor."', statusEstoque = '".$this->statusEstoque."', preçoUnitário = '".$this->preçoUnitário."', Categoria = '".$this->Categoria."', datadeValidade = '".$this->datadeValidade."'
         WHERE tblestoque.idEstoque = '" . $this->idEstoque."';";  
  
         $connect = Conexao::LigarConexao();
         $connect->exec($sql);
         echo "<script>document.location='index.php?p=estoque'</script>";
  }

    public function desativar()
    {

        $query = "UPDATE tblestoque SET datadeValidade ='DESATIVADO' WHERE idEstoque = " . $this->idEstoque;

        $conn = Conexao::LigarConexao();
        $conn->exec($query);
    }
}
