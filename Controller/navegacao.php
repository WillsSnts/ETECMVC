<?php
    // include_once '../Model/Usuario.php';
    // include_once '../Model/Experiencia.php';
    // include_once '../Model/Formacao.php';
    // include_once '../Model/OutrasForms.php';
    // include_once '../Controller/usuarioController.php';
    // include_once '../Controller/formacaoController.php';
    // include_once '../Controller/experienciaController.php';
    // include_once '../Controller/outrasExpController.php';


    // if(!isset($_SESSION))
    // {
    //     session_start();
    // }

    // switch($_POST){

    //     // caso nulo mostrar tela de login
    //     case isset($_POST[null]):
    //         include_once '../View/login.php'; 
    //         break;

    //     // caso btnPrimeiroAcesso
    //     case isset($_POST['btnPrimeiroAcesso']):

    //         include_once '../View/primeiroAcesso.php';


    //         break;

    //     // Cadastro
    //     case isset($_POST['btnCadastrar']):
    //         require_once '../Controller/usuarioController.php';
    //         $uController = new UsuarioController();
            
    //         if($uController->inserir(
    //             $_POST['txtNome'],
    //             $_POST['txtCPF'],
    //             $_POST['txtEmail'],
    //             $_POST['txtSenha']
    //         ))
    //         {
    //             include_once '../View/cadastroRealizado.php';
    //         }
    //         else
    //         {
    //             include_once '../View/cadastroNaoRealizado.php';
    //         }
    //         break;

    //     // Atualizar
    //     case isset($_POST['btnAtualizar']):

    //         require_once '../Controller/usuarioController.php';

    //         $uController = new UsuarioController();
            
    //         if($uController->atualizar(
    //             $_POST['txtNome'],
    //             $_POST['txtCPF'],
    //             date('Y-m-d', strtotime(str_replace('/', '-',$_POST['txtData']))),
    //             $_POST['txtEmail'],
    //             $_POST['txtID']))
    //         {
    //             include_once '../View/atualizacaoRealizada.php';
    //         }
    //         else
    //         {
    //             include_once '../View/operacaoNaoRealizada.php';
    //         }

    //         break;

    //     // cad realizado
    //     case isset($_POST['btnCadRealizado']):
    //         include_once '../View/login.php';
    //         break;
        
    //     // cad não realizado
    //     case isset($_POST['btnCadNaoRealizado']):
    //         include_once '../View/login.php';
    //         break;

    //     // att realizado
    //      case isset($_POST['btnAtualizacaoCadastro']):
    //         include_once '../View/principal.php';
    //         break;
        
    //     // att não realizado
    //     case isset($_POST['btnOperacaoNRealizada']):
    //         include_once '../View/principal.php';
    //         break;
            
    //     // Login
    //     case isset($_POST['btnLogin']):
    //         require_once '../Controller/usuarioController.php';

    //         $uController = new UsuarioController();

    //         if($uController->login($_POST['txtLogin'], $_POST['txtSenha'])){
    //             include_once '../View/principal.php';
    //         }
    //         else
    //         {
    //             include_once '../View/cadastroNaoRealizado.php';
    //         }
    //         break;
        
    //     // Add Formação
    //     case isset($_POST['btnAddFormacao']):

    //         require_once '../Controller/formacaoController.php';
    //         include_once '../Model/Usuario.php';

    //         $fController = new FormacaoController();

    //         if($fController->inserir(
    //             date('Y-m-d', strtotime($_POST['txtInicioFA'])),
    //             date('Y-m-d', strtotime($_POST['txtFimFA'])),
    //             $_POST['txtDescFA'],
    //             unserialize($_SESSION['Usuario'])->getID()) != false)
    //         {
    //             include_once '../View/informacaoExcluida.php';
    //         }
    //         else
    //         {
    //             include_once '../View/operacaoNaoRealizada.php';
    //         }
    //         break;
        
    //     // Adicionar  Formação  realizado
    //     case isset($_POST['btnInfInserir']):
    //         include_once '../View/principal.php';
    //         break;

    //     // excluir Formação
    //     case isset($_POST['btnExcluirFA']):
    //         require_once '../Controller/formacaoController.php';
    //         include_once '../Model/Usuario.php';

    //         $fController = new FormacaoController();
            
    //         if($fController->remover($_POST['id'])== true) {
    //             include_once '../View/informacaoExcluida.php';
    //         }
    //         else
    //         {
    //             include_once '../View/operacaoNaoRealizada.php';
    //         }
    //         break;
        
    //     // Adicionar  Formação  realizado
    //     case isset($_POST['btnInfExcluir']):
    //         include_once '../View/principal.php';
    //         break;
        
    //     // Add Experiencias
    //     case isset($_POST['btnAddEP']):
    //         require_once '../Controller/experienciaController.php';
    //         include_once '../Model/Usuario.php';

    //         $eController = new ExperienciaController();

    //         if($eController->inserir(
    //             date('Y-m-d', strtotime($_POST['txtInicioEP'])),
    //             date('Y-m-d', strtotime($_POST['txtFimEP'])),
    //             $_POST['txtEmpEP'],
    //             $_POST['txtDescEP'],
    //             unserialize($_SESSION['Usuario'])->getID()) 
    //             != false)
    //         {
    //             include_once '../View/informacaoInserida.php';
    //         }
    //         else
    //         {
    //             include_once '../View/operacaoNaoRealizada.php';
    //         }
    //         break;
        
    //     // Adicionar  Formação  realizado
    //     case isset($_POST['btnInfInserir']):
    //         include_once '../View/principal.php';
    //         break;

    //     // excluir Formação
    //     case isset($_POST['btnExcluirEP']):
    //         require_once '../Controller/experienciaController.php';
    //         include_once '../Model/Usuario.php';

    //         $epController = new ExperienciaController();
            
    //         if($epController->remover($_POST['id'])== true) {
    //             include_once '../View/informacaoExcluida.php';
    //         }
    //         else
    //         {
    //             include_once '../View/operacaoNaoRealizada.php';
    //         }
    //         break;
        
    //     // Adicionar  Formação  realizado
    //     case isset($_POST['btnInfExcluir']):
    //         include_once '../View/principal.php';
    //         break;

    //     // Add Outras Experiencias
    //     case isset($_POST['btnAddOF']):
    //         require_once '../Controller/outrasExpController.php';
    //         include_once '../Model/Usuario.php';

    //         $otController = new OutrasExpController();

    //         if($otController->inserir(
    //             date('Y-m-d', strtotime($_POST['txtInicioOF'])),
    //             date('Y-m-d', strtotime($_POST['txtFimOF'])),
    //                            $_POST['txtDescOF'],
    //             unserialize($_SESSION['Usuario'])->getID()) 
    //             != false)
    //         {
    //             include_once '../View/informacaoInserida.php';
    //         }
    //         else
    //         {
    //             include_once '../View/operacaoNaoRealizada.php';
    //         }
    //         break;
        
    //     // Adicionar  Formação  realizado
    //     case isset($_POST['btnInfInserir']):
    //         include_once '../View/principal.php';
    //         break;

    //     // excluir Formação
    //     case isset($_POST['btnExcluirOT']):
    //         require_once '../Controller/outrasExpController.php';
    //         include_once '../Model/Usuario.php';

    //         $otController = new OutrasExpController();
            
    //         if($otController->remover($_POST['id'])== true) {
    //             include_once '../View/informacaoExcluida.php';
    //         }
    //         else
    //         {
    //             include_once '../View/operacaoNaoRealizada.php';
    //         }
    //         break;
        
    //     // Adicionar  Formação  realizado
    //     case isset($_POST['btnInfExcluir']):
    //         include_once '../View/principal.php';
    //         break;
            
    // }
?>
<?php
    include_once 'Model/Usuario.php';
    include_once 'Model/Experiencia.php';
    include_once 'Model/Formacao.php';
    include_once 'Model/OutrasForms.php';
    include_once 'Controller/usuarioController.php';
    include_once 'Controller/formacaoController.php';
    include_once 'Controller/experienciaController.php';
    include_once 'Controller/outrasExpController.php';


    if(!isset($_SESSION))
    {
        session_start();
    }

    switch($_POST){

        // caso nulo mostrar tela de login
        case isset($_POST[null]):
            include_once 'View/login.php'; 
            break;

        // caso btnPrimeiroAcesso
        case isset($_POST['btnPrimeiroAcesso']):

            include_once 'View/primeiroAcesso.php';

            break;

        // Cadastro
        case isset($_POST['btnCadastrar']):
            require_once 'Controller/usuarioController.php';
            $uController = new UsuarioController();
            
            if($uController->inserir(
                $_POST['txtNome'],
                $_POST['txtCPF'],
                $_POST['txtEmail'],
                $_POST['txtSenha']
            ))
            {
                include_once 'View/cadastroRealizado.php';
            }
            else
            {
                include_once 'View/cadastroNaoRealizado.php';
            }
            break;

        // Atualizar
        case isset($_POST['btnAtualizar']):

            require_once 'Controller/usuarioController.php';

            $uController = new UsuarioController();
            
            if($uController->atualizar(
                $_POST['txtNome'],
                $_POST['txtCPF'],
                date('Y-m-d', strtotime(str_replace('/', '-',$_POST['txtData']))),
                $_POST['txtEmail'],
                $_POST['txtID']))
            {
                include_once 'View/atualizacaoRealizada.php';
            }
            else
            {
                include_once 'View/operacaoNaoRealizada.php';
            }

            break;

        // cad realizado
        case isset($_POST['btnCadRealizado']):
            include_once 'View/login.php';
            break;
        
        // cad não realizado
        case isset($_POST['btnCadNaoRealizado']):
            include_once 'View/login.php';
            break;

        // att realizado
         case isset($_POST['btnAtualizacaoCadastro']):
            include_once 'View/principal.php';
            break;
        
        // att não realizado
        case isset($_POST['btnOperacaoNRealizada']):
            include_once 'View/principal.php';
            break;
            
        // Login
        case isset($_POST['btnLogin']):
            require_once 'Controller/usuarioController.php';

            $uController = new UsuarioController();

            if($uController->login($_POST['txtLogin'], $_POST['txtSenha'])){
                include_once 'View/principal.php';
            }
            else
            {
                include_once 'View/cadastroNaoRealizado.php';
            }
            break;
        
        // Add Formação
        case isset($_POST['btnAddFormacao']):

            require_once 'Controller/formacaoController.php';
            include_once 'Model/Usuario.php';

            $fController = new FormacaoController();

            if($fController->inserir(
                date('Y-m-d', strtotime($_POST['txtInicioFA'])),
                date('Y-m-d', strtotime($_POST['txtFimFA'])),
                $_POST['txtDescFA'],
                unserialize($_SESSION['Usuario'])->getID()) != false)
            {
                include_once 'View/informacaoExcluida.php';
            }
            else
            {
                include_once 'View/operacaoNaoRealizada.php';
            }
            break;
        
        // Adicionar  Formação  realizado
        case isset($_POST['btnInfInserir']):
            include_once 'View/principal.php';
            break;

        // excluir Formação
        case isset($_POST['btnExcluirFA']):
            require_once 'Controller/formacaoController.php';
            include_once 'Model/Usuario.php';

            $fController = new FormacaoController();
            
            if($fController->remover($_POST['id'])== true) {
                include_once 'View/informacaoExcluida.php';
            }
            else
            {
                include_once 'View/operacaoNaoRealizada.php';
            }
            break;
        
        // Adicionar  Formação  realizado
        case isset($_POST['btnInfExcluir']):
            include_once 'View/principal.php';
            break;
        
        // Add Experiencias
        case isset($_POST['btnAddEP']):
            require_once 'Controller/experienciaController.php';
            include_once 'Model/Usuario.php';

            $eController = new ExperienciaController();

            if($eController->inserir(
                date('Y-m-d', strtotime($_POST['txtInicioEP'])),
                date('Y-m-d', strtotime($_POST['txtFimEP'])),
                $_POST['txtEmpEP'],
                $_POST['txtDescEP'],
                unserialize($_SESSION['Usuario'])->getID()) 
                != false)
            {
                include_once 'View/informacaoInserida.php';
            }
            else
            {
                include_once 'View/operacaoNaoRealizada.php';
            }
            break;
        
        // Adicionar  Formação  realizado
        case isset($_POST['btnInfInserir']):
            include_once 'View/principal.php';
            break;

        // excluir Formação
        case isset($_POST['btnExcluirEP']):
            require_once 'Controller/experienciaController.php';
            include_once 'Model/Usuario.php';

            $epController = new ExperienciaController();
            
            if($epController->remover($_POST['id'])== true) {
                include_once 'View/informacaoExcluida.php';
            }
            else
            {
                include_once 'View/operacaoNaoRealizada.php';
            }
            break;
        
        // Adicionar  Formação  realizado
        case isset($_POST['btnInfExcluir']):
            include_once 'View/principal.php';
            break;

        // Add Outras Experiencias
        case isset($_POST['btnAddOF']):
            require_once 'Controller/outrasExpController.php';
            include_once 'Model/Usuario.php';

            $otController = new OutrasExpController();

            if($otController->inserir(
                date('Y-m-d', strtotime($_POST['txtInicioOF'])),
                date('Y-m-d', strtotime($_POST['txtFimOF'])),
                               $_POST['txtDescOF'],
                unserialize($_SESSION['Usuario'])->getID()) 
                != false)
            {
                include_once 'View/informacaoInserida.php';
            }
            else
            {
                include_once 'View/operacaoNaoRealizada.php';
            }
            break;
        
        // Adicionar  Formação  realizado
        case isset($_POST['btnInfInserir']):
            include_once 'View/principal.php';
            break;

        // excluir Formação
        case isset($_POST['btnExcluirOT']):
            require_once 'Controller/outrasExpController.php';
            include_once 'Model/Usuario.php';

            $otController = new OutrasExpController();
            
            if($otController->remover($_POST['id'])== true) {
                include_once 'View/informacaoExcluida.php';
            }
            else
            {
                include_once 'View/operacaoNaoRealizada.php';
            }
            break;
        
        // Adicionar  Formação  realizado
        case isset($_POST['btnInfExcluir']):
            include_once 'View/principal.php';
            break;
            
    }
?>


   


   