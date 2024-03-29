<?php
require_once('conexao.php');

class FuncionarioClass
{

    // Atributos da Class

    public $idFuncionario;
    public $nomeFuncionario;
    public $dataNascFuncionario;
    public $cpfFuncionario;
    public $telefoneFuncionario;
    public $emailFuncionario;
    public $turnoFuncionario;
    public $funcaoFuncionario;
    public $acessoFuncionario;
    public $statusFuncionario;
    public $senhaFuncionario;


    //Metodo da Class


    //Carregar
    public function __construct($id = false)
    {
        if ($id) {
            $this->idFuncionario = $id;
            $this->Carregar();
        }
    }

    //Carregar

    public function Carregar()
    {
        $query = "SELECT * FROM tblfuncionario WHERE idFuncionario = " . $this->idFuncionario;

        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query);
        $lista = $resultado->fetchAll();

        foreach ($lista as $linha) {
            $this->nomeFuncionario = $linha["nomeFuncionario"];
            $this->dataNascFuncionario = $linha["dataNascFuncionario"];
            $this->cpfFuncionario = $linha["cpfFuncionario"];
            $this->telefoneFuncionario = $linha["telefoneFuncionario"];
            $this->emailFuncionario = $linha["emailFuncionario"];
            $this->turnoFuncionario = $linha["turnoFuncionario"];
            $this->funcaoFuncionario = $linha["funcaoFuncionario"];
            $this->acessoFuncionario = $linha["acessoFuncionario"];
            $this->statusFuncionario = $linha["statusFuncionario"];
            $this->senhaFuncionario = $linha["senhaFuncionario"];
        }
    }


    //Listar
    public function Listar()
    {
        $sql = "SELECT * FROM tblfuncionario ORDER BY FIELD(statusFuncionario, 'ATIVO', 'DESATIVADO') ASC";
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($sql);
        $lista = $resultado->fetchAll();
        return $lista;
    }


    //Cadastrar
    public function Cadastrar()
    {
        $query = "INSERT INTO tblfuncionario (nomeFuncionario,
                                            dataNascFuncionario,
                                            cpfFuncionario,
                                            telefoneFuncionario,
                                            emailFuncionario,
                                            turnoFuncionario,
                                            funcaoFuncionario,
                                            acessoFuncionario,
                                            statusFuncionario,
                                            senhaFuncionario)
                    VALUES ('" . $this->nomeFuncionario . "',
                             '" . $this->dataNascFuncionario . "',
                              '" . $this->cpfFuncionario . "',
                               '" . $this->telefoneFuncionario . "',
                                '" . $this->emailFuncionario . "', 
                                '" . $this->turnoFuncionario . "',
                                 '" . $this->funcaoFuncionario . "',
                                 '" . $this->acessoFuncionario . "',
                                 '" . $this->statusFuncionario . "',
                                 '" . $this->senhaFuncionario . "')";

        $conn = Conexao::LigarConexao();
        $conn->exec($query);

        echo "<script>document.location='index.php?p=funcionario'</script>";
    }



    //Atualizar
    public function Atualizar()
    {
        $sql = "UPDATE tblfuncionario SET nomeFuncionario = '".$this->nomeFuncionario."', dataNascFuncionario = '".$this->dataNascFuncionario."',cpfFuncionario = '".$this->cpfFuncionario."',
         telefoneFuncionario = '" .$this->telefoneFuncionario."',emailFuncionario = '" .$this->emailFuncionario."',
         turnoFuncionario = '" .$this->turnoFuncionario."', funcaoFuncionario = '" .$this->funcaoFuncionario."',acessoFuncionario = '" .$this->acessoFuncionario."',
         statusFuncionario = '" .$this->statusFuncionario."',senhaFuncionario = '" .$this->senhaFuncionario."'
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


    //Verificar Login
    public function verificarLogin() 
    {
        $sql = "SELECT * FROM tblfuncionario WHERE emailFuncionario = '".$this->emailFuncionario."' AND senhaFuncionario = '".$this->senhaFuncionario."';";

        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($sql);
        $funcionario = $resultado->fetch();

        if($funcionario) {
            return $funcionario['idFuncionario'];
        } else {
            return false;
        }
    }

}//Fim da Classe funcionario



if(isset($_POST['email'])) 
{
    // Instancia um novo objeto da classe InstrutorClass para manipular operações relacionadas aos instrutores
    $funcionario = new FuncionarioClass();

     // Extrai o valor do campo 'email'e'password' enviado pelo formulário e o armazena na variável $emailLogin
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Define os valores do email e senha no objeto $funcionarios para  verificação
    $funcionario->emailFuncionario = $email;
    $funcionario->senhaFuncionario = $senha;

    // Chama o método verificarLogin() para vereficação
    if($idFuncionario = $funcionario->verificarLogin()) {
        session_start();
         // Armazena o ID do funcionário na variável de sessão $_SESSION['idFuncionario']
        $_SESSION['idFuncionario'] = $idFuncionario;
        echo json_encode(['success' => true, 'message' => 'Login realizado com sucesso', 'idFuncionario' => $idFuncionario]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Login não realizado. Email ou senha inválidos']);
    }
}




