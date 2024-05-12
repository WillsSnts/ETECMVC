<?php
    if (!isset($_SESSION)) {
        session_start();
    }
    class AdmController
    {
        public function login($cpf, $senha)
        {
            require_once "Model/Administrador.php";

            $administrador = new Administrador();
            $administrador->carregarAdministrador($cpf);

            if ($administrador->getSenha() == $senha){

                $_SESSION["Administrador"] = serialize($administrador);

                return true;
            } 
            else{
                
                return false;
            }
        }

        public function gerarLista(){
            require_once 'Model/Administrador.php';
            $adms = new Administrador();
            return $results = $adms->listaAdmCadastrados();
        }
    }

?>
