<?php
    if(!isset($_SESSION))
    {
        session_start();
    }

    class OutrasExpController
    {
        public function inserir($inicio, $fim, $descricao, $idusuario) {
            require_once 'Model/OutrasForms.php';
            $ePro = new OutrasFormacoes();
            $ePro->setInicio($inicio);
            $ePro->setFim($fim);
            $ePro->setDescricao($descricao);
            $ePro->setIdUsuario($idusuario);
            $r = $ePro->inserirBD();
            return $r;
        }

        public function remover($id){
            require_once 'Model/OutrasForms.php';
            $ePro = new OutrasFormacoes();
            $r = $ePro->excluirBD($id);
            return $r;
        }

        public function gerarLista($idusuario)
        {
            require_once 'Model/OutrasForms.php';
            $ePro = new OutrasFormacoes();
            return $results = $ePro->listaExperiencias($idusuario);
        }
            
    }
?>