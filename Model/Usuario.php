<?php
    class Usuario
    {
        private $id;
        private $nome;
        private $cpf;
        private $email;
        private $dataNascimento;
        private $senha;

    //-------ID
        public function setId($id)
        {
            $this->id = $id;
        }
        public function getId()
        {
            return $this-> id;
        }

    //-------Nome
        public function setNome($nome)
        {
            $this->nome = $nome;
        }
        public function getNome()
        {
            return $this-> nome;
        }

    //-------cpf
        public function setCpf($cpf)
        {
            $this->cpf = $cpf;
        }
        public function getCpf()
        {
            return $this-> cpf;
        }

    //-------email
        public function setEmail($email)
        {
            $this->email = $email;
        }
        public function getEmail()
        {
            return $this-> email;
        }

    //-------dataNascimento
        public function setDataNascimento($dataNascimento)
        {
            $this->dataNascimento = $dataNascimento;
        }
        public function getDataNascimento()
        {
            return $this-> dataNascimento;
        }

    //-------senha
        public function setSenha($senha)
        {
            $this->senha = $senha;
        }
        public function getSenha()
        {
            return $this-> senha;
        }

    //-------MetodoInserir
        public function inserirBD()
        {
            require_once 'ConexaoBD.php';
            $con = new ConexaoBD();
            $conn = $con->conectar();

            if($conn->connect_error)
            {
                die("Connection failed: ".$conn->connect_error);
            }

            $sql = "INSERT INTO usuario (nome, cpf, email, senha) VALUES ('".$this->nome."', '".$this->cpf."', '".$this->email."', '".$this->senha."')";

            if($conn->query($sql)===TRUE)
            {
                $this->id = mysqli_insert_id($conn);
                $conn->close();
                return TRUE;
            }
            else
            {
                $conn->close();
                return FALSE;
            }
        }

    //-------MetodoCarregar
        public function carregarUsuario($cpf)
        {
            require_once 'ConexaoBD.php';
            $con = new ConexaoBD();
            $conn = $con->conectar();

            if($conn->connect_error)
            {
                die("Connection failed: ".$conn->connect_error);
            }

            $sql = "SELECT * FROM usuario WHERE cpf = ".$cpf;
            $re = $conn->query($sql);
            $r = $re->fetch_object();
            if($r != null)
            {
                $this-> id = $r-> idusuario;
                $this-> nome = $r-> nome;
                $this-> email = $r-> email;
                $this-> cpf = $r-> cpf;
                $this-> dataNascimento = $r-> datanascimento;
                $this-> senha = $r-> senha;
                $conn->close();
                return true;
            }
            else
            {
                $conn->close();
                return false;
            }
        }
    
    //------Info User
    public function userInfo($cpf)
    {
        require_once 'ConexaoBD.php';
        $con = new ConexaoBD();
        $conn = $con->conectar();

        if($conn->connect_error)
        {
            die("Connection failed: ".$conn->connect_error);
        }

        $sql = "SELECT * FROM usuario WHERE cpf = ".$cpf;
        $re = $conn->query($sql);
        return $re;
    }

    //-------MetodoAtualizar
        public function atualizarBD()
        {
            require_once 'ConexaoBD.php';
            $con = new ConexaoBD();
            $conn = $con->conectar();

            if($conn->connect_error)
            {
                die("Connection failed: ".$conn->connect_error);
            }

            $sql = "UPDATE usuario SET 
            nome='" . $this->nome . 
            "', cpf='" . $this->cpf . 
            "', dataNascimento='" . $this->dataNascimento . 
            "', email='" . $this->email . 
            "' WHERE idusuario='" . $this->id . "'";

            if($conn->query($sql)===TRUE)
            {
                $conn->close();
                return TRUE;
            }
            else
            {
                $conn->close();
                return FALSE;
            }
        }

    //-------MetodoListar
        public function listaUsers(){
            require_once 'ConexaoBD.php';

            require_once 'ConexaoBD.php';
            $con = new ConexaoBD();
            $conn = $con->conectar();

            if($conn->connect_error)
            {
                die("Connection failed: ".$conn->connect_error);
            }

            $sql = "SELECT * FROM usuario";
            $re = $conn->query($sql);
            return $re;
        }
    }
?>
<!-- essa classe irá  cuidar das informaçoes de login do usuario  -->