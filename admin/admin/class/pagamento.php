<?php
require_once('conexao.php');

class PagamentoClass
{

    // Atributos da Class

    public $idPagamento;
    public $statusPagamento;
    public $tipoPagamento;
    public $preçoPagamento;
    public $idCliente ;


    //Metodo da Class


    //Carregar
    public function __construct($id = false)
    {
        if ($id) {
            $this->idPagamento = $id;
            $this->Carregar();
        }
    }

    //Carregar

    public function Carregar()
    {
        $query = "SELECT * FROM tblpagamento WHERE idPagamento = " . $this->idPagamento;

        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query);
        $lista = $resultado->fetchAll();

        foreach ($lista as $linha) {
            $this->statusPagamento = $linha["statusPagamento"];
            $this->tipoPagamento = $linha["tipoPagamento"];
            $this->preçoPagamento = $linha["preçoPagamento"];
            $this->idCliente = $linha["idCliente"];
        }
    }


    //Listar
    public function Listar()
    {
        $sql = "SELECT * FROM tblpagamento ORDER BY FIELD(statusPagamento, 'PENDENTE', 'PAGO') ASC";
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($sql);
        $lista = $resultado->fetchAll();
        return $lista;
    }


    //Cadastrar
    public function Cadastrar()
    {
        $query = "INSERT INTO tblpagamento (nomeFuncionario,
                                            dataNascFuncionario,
                                            cpfFuncionario,
                                            telefoneFuncionario,
                                            emailFuncionario,
                                            turnoFuncionario,
                                            funcaoFuncionario,
                                            acessoFuncionario,
                                            statusFuncionario)
                    VALUES ('" . $this->nomeFuncionario . "',
                             '" . $this->dataNascFuncionario . "',
                              '" . $this->cpfFuncionario . "',
                               '" . $this->telefoneFuncionario . "',
                                '" . $this->emailFuncionario . "', 
                                '" . $this->turnoFuncionario . "',
                                 '" . $this->funcaoFuncionario . "',
                                 '" . $this->acessoFuncionario . "',
                                 '" . $this->statusFuncionario . "')";

        $conn = Conexao::LigarConexao();
        $conn->exec($query);

        echo "<script>document.location='index.php?p=funcionario'</script>";
    }



    //Atualizar
    public function Atualizar()
    {
        $sql = "UPDATE tblfuncionario SET nomeFuncionario = '".$this->nomeFuncionario."', dataNascFuncionario = '".$this->dataNascFuncionario."',cpfFuncionario = '".$this->cpfFuncionario."', telefoneFuncionario = '" .$this->telefoneFuncionario."',emailFuncionario = '" .$this->emailFuncionario."',turnoFuncionario = '" .$this->turnoFuncionario."', funcaoFuncionario = '" .$this->funcaoFuncionario."',acessoFuncionario = '" .$this->acessoFuncionario."',statusFuncionario = '" .$this->statusFuncionario."'
         WHERE idFuncionario = '".$this->idFuncionario."';";
        $connect = Conexao::LigarConexao();
        $connect->exec($sql);

        echo "<script>document.location='index.php?p=funcionario'</script>";
    }
    
       

    //Desativar
    public function desativar()
    {

        $query = "UPDATE tblfuncionario SET statusFuncionario ='DESATIVO' WHERE idFuncionario = " . $this->idFuncionario;

        $conn = Conexao::LigarConexao();
        $conn->exec($query);
    }
}
