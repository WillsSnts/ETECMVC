<?php
    if(!isset($_SESSION))
    {
        session_start();
    }

    class ExperienciaController
    {
        public function inserir($inicio, $fim, $nomeEmp, $descricao, $idusuario) {
            require_once 'Model/Experiencia.php';
            $ePro = new ExperienciaProfissional();
            $ePro->setInicio($inicio);
            $ePro->setFim($fim);
            $ePro->setEmpresa($nomeEmp);
            $ePro->setDescricao($descricao);
            $ePro->setIdUsuario($idusuario);
            $r = $ePro->inserirBD();
            return $r;
        }

        public function remover($id){
            require_once 'Model/Experiencia.php';
            $ePro = new ExperienciaProfissional();
            $r = $ePro->excluirBD($id);
            return $r;
        }

        public function gerarLista($idusuario)
        {
            require_once 'Model/Experiencia.php';
            $ePro = new ExperienciaProfissional();
            return $results = $ePro->listaExperiencias($idusuario);
        }
            
    }
?>