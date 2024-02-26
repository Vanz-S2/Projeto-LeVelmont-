<?php
require_once('conexao.php');

class BannerClass
{

    // Atributos da Class

    public $idBanner ;
    public $nomeBanner ;
    public $altBanner; //Foto mudar variável depois
    public $dscBanner; 
    public $statusBanner;
    



    //Metodo da Class



    //Carregar
    public function __construct($id = false)
    {
        if ($id) {
            $this->idBanner = $id;
            $this->Carregar();
        }
    }

    //Carregar

    public function Carregar()
    {
        $query = "SELECT * FROM tblbanner WHERE idBanner = " . $this->idBanner;

        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query);
        $lista = $resultado->fetchAll();

        foreach ($lista as $linha) {
            $this->nomeBanner = $linha["nomeBanner"];
            $this->altBanner = $linha["altBanner"];
            $this->dscBanner = $linha["dscBanner"];
            $this->statusBanner = $linha["statusBanner"];
           
        }
    }


    //Listar
   

    public function Listar()
{
    $sql = "SELECT * FROM tblbanner ORDER BY FIELD(statusBanner, 'ATIVO', 'DESATIVADO') ASC";
    $conn = Conexao::LigarConexao();
    $resultado = $conn->query($sql);
    $lista = $resultado->fetchAll();
    return $lista;
}






    //Cadastrar
    public function Cadastrar()
    {
        $query = "INSERT INTO tblbanner (nomeBanner,
                                            altBanner,
                                            dscBanner,
                                            statusBanner)
                    VALUES ('" . $this->nomeBanner . "',
                             '" . $this->altBanner . "',
                              '" . $this->dscBanner . "',
                               '" . $this->statusBanner . "')";

        $conn = Conexao::LigarConexao();
        $conn->exec($query);

        echo "<script>document.location='index.php?p=banner'</script>";

    }

    public function Atualizar(){
          
        $sql = "UPDATE tblbanner SET nomeBanner = '".$this->nomeBanner."', altBanner = '".$this->altBanner."', dscBanner = '".$this->dscBanner."', statusBanner = '".$this->statusBanner."'
         WHERE tblbanner.idBanner = '" . $this->idBanner."';";  
  
         $connect = Conexao::LigarConexao();
         $connect->exec($sql);
         echo "<script>document.location='index.php?p=banner'</script>";
  }

    public function desativar()
    {

        $query = "UPDATE tblbanner SET statusBanner ='DESATIVADO' WHERE idBanner = " . $this->idBanner;

        $conn = Conexao::LigarConexao();
        $conn->exec($query);
    }
}
