<?php
// verifica se há uma sessão, caso não haja criamos
    if(!isset($_SESSION))
    {
        session_start();
    }

    // classe que vai controlar as informaçoes do usuario
    class UsuarioController{

        // função que vai inserir as informaçoes no cadastro
        public function inserir($nome, $cpf, $email, $senha){

            require_once 'Model/Usuario.php';
            $usuario = new Usuario();
            $usuario->setNome($nome);
            $usuario->setCPF($cpf);
            $usuario->setEmail($email);
            $usuario->setSenha($senha);
            $r = $usuario->inserirBD();
            $_SESSION['usuario'] = serialize($usuario);
            return $r;
        }

        // função que vai atualizar as informaçoes do cadastro
        public function atualizar($nome, $cpf, $dataNascimento, $email, $id){

            require_once 'Model/Usuario.php';
            $usuario = new Usuario();
            $usuario->setNome($nome);
            $usuario->setCpf($cpf);
            $usuario->setDataNascimento($dataNascimento);
            $usuario->setEmail($email);
            $usuario->setId($id);
            
            $r = $usuario->atualizarBD();
            $_SESSION['usuario'] = serialize($usuario);
            return $r;
        }

        // função que vai fazer o login
        public function login($cpf, $senha)
        {
            require_once 'Model/Usuario.php';
            $usuario = new Usuario();
            $usuario->carregarUsuario($cpf);
            $verSenha = $usuario->getSenha();
            if($senha==$verSenha)
            {
                $_SESSION['Usuario'] = serialize($usuario);
                return true;
            }
            else
            {
                return false;
            }

        }
    }
?>