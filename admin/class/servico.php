<?php

require_once('conexao.php');

 

class ServicoClass
{
    // ATRIBUTOS
    public $idServico;
    public $nomeServico;
    public $tipoServico;
    public $statusServico;
    public $descricaoServico;

        // MÉTODOS
        public function __construct($id = false) //verificar se o id foi passado
        {
            if($id){
                $this -> idServico = $id;
                $this -> Carregar();
            }
        }
    
    
        public function listar(){
            $query = "SELECT * FROM tblservico ORDER BY idServico ASC;";
            $conn = Conexao::LigarConexao();
            $resultado = $conn->query($query);
            $lista = $resultado->fetchAll();
    
            return $lista;
        }
    
        public function Inserir(){
            $query = "INSERT INTO tblservico (nomeServico,
                                               tipoServico,
                                               statusServico,
                                               descricaoServico)
                        VALUES
                        ('".$this -> nomeServico."',
                         '".$this -> tipoServico."',
                           '".$this -> statusServico."',
                            '".$this -> descricaoServico."');";
    
    
            $conn = Conexao::LigarConexao();
            $conn->exec($query);
            echo "<script>document.location='index.php?p=servico'</script>";
        }
    
        public function Carregar(){
            $query = "SELECT * FROM tblservico WHERE idServico = " . $this -> idServico;
    
            $conn = Conexao::LigarConexao();
            $resultado = $conn -> query($query);
            $lista = $resultado -> fetchAll();
    
            foreach($lista as $linha){
                
                $this -> nomeServico = $linha['nomeServico'];
                $this -> tipoServico = $linha['tipoServico'];
                $this -> statusServico = $linha['statusServico'];
                $this -> descricaoServico = $linha['descricaoServico'];
            }
    
        }
    
    public function Atualizar(){
        $query = "UPDATE tblservico SET
                    nomeServico  = '".$this -> nomeServico."',
                    tipoServico     = '".$this -> tipoServico."',
                    statusServico   = '".$this -> statusServico."',
                    descricaoServico    = '".$this -> descricaoServico."',
                WHERE tblservico.idServico = " . $this -> idServico;
    
                $conn = Conexao::LigarConexao();
                $conn->exec($query);
                echo "<script>document.location='index.php?p=servico'</script>";
    }
        
    public function Desativar(){
        $query = "UPDATE tblservico SET
                    statusServico    = '0',
                WHERE tblservico.idServico = " . $this -> idServico;
    
                $conn = Conexao::LigarConexao();
                $conn->exec($query);
                echo "<script>document.location='index.php?p=servico'</script>";
    }
    
    }
    
    
    