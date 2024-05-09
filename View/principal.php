<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Enlatados Juarez</title>
    <style>
        /* Definimos que a sidebar terá uma largura de 120px e cor a cord de fundo #222 */
        .w3-sidebar {
            width: 120px;
        }
        /*Define Fonte para todas as tags listadas abaixo*/body,
        h1, h2, h3, h4, h5, h6 {
            font-family: "Montserrat",sans-serif
        }
    </style>
</head>

<body class="w3-light-grey">
    
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
    ?>

<!-- navbar -->

    <nav class="w3-sidebar w3-bar-block w3-center w3-blue ">

        <a href="#home" class="w3-bar-item w3-button w3-block w3-cell w3-hover-light-grey w3-hover-text-cyan w3-text-light-grey">

            <i class="fa-solid fa-house w3-xxlarge"></i>

            <p>HOME</p>

        </a>
    
        <a href="#dPessoais" class="w3-bar-item w3-button w3-block w3-cell w3-hover-light-grey w3-hover-text-cyan w3-text-light-grey">

            <i class="fa-solid fa-address-book w3-xxlarge"></i>
            
            <p>Dados Pessoais</p>
            
        </a>

        <a href="#formacao" class="w3-bar-item w3-button w3-block w3-cell w3-hover-light-grey w3-hover-text-cyan w3-text-light-grey">

            <i class="fa-solid fa-graduation-cap w3-xxlarge"></i>

            <p>Formação</p>
            
        </a>

        <a href="#epProfissional" class="w3-bar-item w3-button w3-block w3-cell w3-hover-light-grey w3-hover-text-cyan w3-text-light-grey">

            <i class="fa-solid fa-briefcase w3-xxlarge"></i>

            <p>Experiência Profissional</p>

        </a>

        <a href="#otFormacoes" class="w3-bar-item w3-button w3-block w3-cell w3-hover-light-grey w3-hover-text-cyan w3-text-light-grey">

            <i class="fa-solid fa-graduation-cap w3-xxlarge"></i>

            <p>Outras Formações</p>
            
        </a>
        
    </nav>

<!-- div mains -->
    <div class="w3-padding-large" id="main">

<!-- header -->

        <header class="w3-container w3-padding-32 w3-center " id="home">

            <h1>

                <img src="Img/Enlatados.png" alt="Logo" class="w3-image" width="50%">

                </br>

            </h1>
            
            <a class="w3-text-cyan" href="http://www.freepik.com">Designed by brgfx / Freepik</a>

            <br>

            <h1 class="w3-text-cyan">SISTEMA DE CURRICULOS</h1>

        </header>

        <br>

<!-- dados pessoais -->

        <div class="w3-padding-large w3-padding-128 w3-content w3-text-grey " id="dPessoais">

            <h2 class="w3-text-cyan">Dados Pessoais</h2>
            <?php
                 $id  = unserialize($_SESSION['Usuario'])->getID();
                 '<br>';
                 $nome  = unserialize($_SESSION['Usuario'])->getNome();
                 '<br>';
                 $cpf = unserialize($_SESSION['Usuario'])->getCPF();
                 '<br> data serializada: ';
                 $data = unserialize($_SESSION['Usuario'])->getDataNascimento();
                 '<br> data formatada: ';
                 $data_formatada = ($data !== null) ? date('Y-m-d', strtotime(str_replace('-', '/', $data))) : '1999-01-01';
                 '<br>';
                 $email = unserialize($_SESSION['Usuario'])->getEmail();
                 '<br>Serializado: <br>';
                // var_dump(unserialize($_SESSION['Usuario']));
            ?>

            <!-- <form action="../Controller/navegacao.php" method="post" class=" w3-row w3-light-grey w3-text-blue w3-margin " style="width:70%;"> -->

            <form action="index.php" method="post" class=" w3-row w3-light-grey w3-text-blue w3-margin " style="width:70%;">
            
                <input class="w3-input w3-border w3-round-large" name="txtID" type="hidden" value="<?php echo $id; ?>">

                <div class="w3-row w3-section">

                    <div class="w3-col" style="width:11%;">

                        <i class="w3-xxlarge fa fa-user"></i>

                    </div>

                    <div class="w3-rest">

                        <input class="w3-input w3-border w3-round-large" name="txtNome" type="text"placeholder="Nome Completo" value="<?php echo $nome;?>">

                    </div>

                    <br>

                    <div class="w3-col" style="width:11%;">

                        <i class="w3-xxlarge fa-solid fa-id-card"></i>

                    </div>

                    <div class="w3-rest">

                        <input class="w3-input w3-border w3-round-large" name="txtCPF" type="text"placeholder="CPF (ex.: 33333333333)" value="<?php echo $cpf;?>">

                    </div>

                    <br>

                    <div class="w3-col" style="width:11%;">

                        <i class="w3-xxlarge fa-solid fa-calendar"></i>

                    </div>

                    <div class="w3-rest">

                        <input class="w3-input w3-border w3-round-large" name="txtData" type="date"  value="<?php echo $data_formatada;
                       ?>">

                    </div>

                    <br>

                    <div class="w3-col" style="width:11%;">

                        <i class="w3-xxlarge fa-solid fa-envelope"></i>

                    </div>

                    <div class="w3-rest">

                        <input class="w3-input w3-border w3-round-large" name="txtEmail" type="text" placeholder="E-mail" value="<?php echo $email;?>">

                    </div>

                    <br>

                    <div class="w3-row w3-section">

                        <div class="w3-center">
                            
                            <button name="btnAtualizar" class="w3-button w3-block w3-margin w3-blue w3-cell w3-round-large" style="width: 90%;">Atualizar</button>

                        </div>

                    </div>

                </div>
            </form>
        </div>

        <br>
<!-- formação -->
        <div class="w3-padding-large w3-padding-128 w3-content w3-text-grey" id="formacao">

            <h2 class="w3-text-cyan">Formação</h2>

            <!-- <form action="../Controller/navegacao.php" method="post" class=" w3-row w3-light-grey w3-text-blue w3-margin" style="width:70%;"> -->
            
            <form action="index.php" method="post" class=" w3-row w3-light-grey w3-text-blue w3-margin" style="width:70%;">

                <div class="w3-row w3-center">

                    <div class="w3-col" style="width:50%;">

                        <h3>Data Inicial</h3>
                        
                    </div>
                    
                    <div class="w3-col" style="width:50%;">

                        <h3>Data Final</h3>

                    </div>
                    
                </div>
                
                <div class="w3-row w3-section">

                    <div class="w3-row w3-section w3-col" style="width:45%;">
                    
                        <div class="w3-col" style="width:15%;">

                            <i class="w3-xxlarge fa fa-calendar"></i>

                        </div>
                        
                        <div class="w3-rest">

                            <input class="w3-input w3-border w3-round-large" name="txtInicioFA" type="date" placeholder="">

                        </div>

                    </div>
                    
                    <div class="w3-row w3-section w3-rest">

                        <div class="w3-col w3-margin-left" style="width:13%;">

                            <i class="w3-xxlarge fa fa-calendar"></i>
                            
                        </div>
                        
                        <div class="w3-rest">

                            <input class="w3-input w3-border w3-round-large" name="txtFimFA" type="date" placeholder="">

                        </div>

                    </div>
                    
                </div>

                <div class="w3-row w3-section">

                    <div class="w3-col" style="width:7%;">

                        <i class="w3-xxlarge fa fa-align-justify"></i>

                    </div>
                    
                    <div class="w3-rest">
                        
                        <input class="w3-input w3-border w3-round-large" name="txtDescFA" type="text" placeholder="Descrição: Ex.: Técnico em Desenvolvimento de Sistemas - Centro Paula Souza">

                    </div>
                </div>
                
                <div class="w3-row w3-section">

                    <div class="w3-center">
                    
                        <button name="btnAddFormacao" class="w3-button w3-block w3-blue w3-cell w3-roundlarge" style="width: 20%;">

                            <i class="w3-xxlarge fa fa-user-plus"></i>

                        </button>

                    </div>

                </div>

            </form>
            
            <div class="w3-container">

                <table class="w3-table-all w3-centered">
                    <thead>
                        <tr class="w3-center w3-blue">
                            <th>Início</th>
                            <th>Fim</th>
                            <th>Descrição</th>
                            <th>Apagar</th>
                        </tr>
                    <thead>
                    <?php
                        $fCon = new FormacaoController();
                        $results = $fCon->gerarLista(unserialize($_SESSION['Usuario'])->getID());
                        if($results != null)
                        while($row = $results->fetch_object())
                        {
                            echo '<tr>';
                            echo '<td style="width: 10%;">'.$row->inicio.'<td>';
                            echo '<td style="width:10%">'.$row->fim.'<td>';
                            echo '<td style="width:65%">'.$row->descricao.'<td>';
                            echo '<td style="width:5%">';
                            echo '<form action="../Controller/navegacao.php" method="post">';
                            echo '<input type="hidden" name="id" value ="'.$row->idformacaoAcademica.'">';
                            echo'<button name="btnExcluirFA" class="w3-button w3-block w3-blue
                            w3-cell w3-round-large">';
                            echo '<i class="fa fa-user-times"></i> </button></td>
                            </form></tr>';
                        }
                    ?>
                </table>
            </div>
        </div>

        <br>

<!-- exp prof -->
        <div class="w3-padding-large w3-padding-128 w3-content w3-text-grey" id="eProfissional">

            <h2 class="w3-text-cyan">Experiência Profissional</h2>

            <!-- <form action="../Controller/navegacao.php" method="post" class=" w3-row w3-light-grey w3-text-blue w3-margin" style="width:70%;"> -->

            <form action="index.php" method="post" class=" w3-row w3-light-grey w3-text-blue w3-margin" style="width:70%;">

                <div class="w3-row w3-center">

                    <div class="w3-col" style="width:50%;">

                        <h3>Data Inicial</h3>
                        
                    </div>
                    
                    <div class="w3-col" style="width:50%;">

                        <h3>Data Final</h3>

                    </div>
                    
                </div>
                
                <div class="w3-row w3-section">

                    <div class="w3-row w3-section w3-col" style="width:45%;">
                    
                        <div class="w3-col" style="width:15%;">

                            <i class="w3-xxlarge fa fa-calendar"></i>

                        </div>
                        
                        <div class="w3-rest">

                            <input class="w3-input w3-border w3-round-large" name="txtInicioEP" type="date" placeholder="">

                        </div>

                    </div>
                    
                    <div class="w3-row w3-section w3-rest">

                        <div class="w3-col w3-margin-left" style="width:13%;">

                            <i class="w3-xxlarge fa fa-calendar"></i>
                            
                        </div>
                        
                        <div class="w3-rest">

                            <input class="w3-input w3-border w3-round-large" name="txtFimEP" type="date" placeholder="">

                        </div>

                    </div>
                    
                </div>

                <div class="w3-row w3-section">

                    <div class="w3-col" style="width:7%;">

                        <i class="w3-xxlarge fa fa-align-justify"></i>

                    </div>
                    
                    <div class="w3-rest">
                        
                        <input class="w3-input w3-border w3-round-large" name="txtEmpEP" type="text" placeholder="Descrição: Nome da Empresa">

                    </div>
                </div>

                <div class="w3-row w3-section">

                    <div class="w3-col" style="width:7%;">

                        <i class="w3-xxlarge fa fa-align-justify"></i>

                    </div>
                    
                    <div class="w3-rest">
                        
                        <input class="w3-input w3-border w3-round-large" name="txtDescEP" type="text" placeholder="Descrição: Atividades que realizava">

                    </div>
                </div>
                
                <div class="w3-row w3-section">

                    <div class="w3-center">
                    
                        <button name="btnAddEP" class="w3-button w3-block w3-blue w3-cell w3-roundlarge" style="width: 20%;">

                            <i class="w3-xxlarge fa fa-user-plus"></i>

                        </button>

                    </div>

                </div>

            </form>
            
            <div class="w3-container">

                <table class="w3-table-all w3-centered">
                    <thead>
                        <tr class="w3-center w3-blue">
                            <th style="width: 10%;">Início</th>
                            <th style="width: 10%;">Fim</th>
                            <th style="width: 10%;">Empresa</th>
                            <th style="width:65%">Descrição</th>
                            <th style="width:5%">Apagar</th>
                        </tr>
                    <thead>
                    <?php 

                        $ePro = new ExperienciaController();
                        $results = $ePro->gerarLista(unserialize($_SESSION['Usuario'])->getID());
                        if($results != null)
                        while($row = $results->fetch_object())
                        {
                            echo '<tr>';
                            echo '<td style="width: 10%;">'.$row->inicio.'<td>';
                            echo '<td style="width:10%">'.$row->fim.'<td>';
                            echo '<td style="width:10%">'.$row->empresa.'<td>';
                            echo '<td style="width:65%">'.$row->descricao.'<td>';
                            echo '<td style="width:5%">';
                            echo '<form action="../Controller/navegacao.php" method="post">';
                            echo '<input type="hidden" name="id" value="'.$row->idexperienciaprofissional.'">';
                            echo'<button name="btnExcluirEP" class="w3-button w3-block w3-blue
                            w3-cell w3-round-large">';
                            echo '<i class="fa fa-user-times"></i> </button>
                            </form>
                            </td>
                            </tr>';
                        }
                    ?>
                </table>
            </div>
        </div>

        <br>

<!-- ot formaçoes -->
        <div class="w3-padding-large w3-padding-128 w3-content w3-text-grey" id="otFormacoes">

            <h2 class="w3-text-cyan">Outras Formações</h2>

            <!-- <form action="../Controller/navegacao.php" method="post" class=" w3-row w3-light-grey w3-text-blue w3-margin" style="width:70%;"> -->

            <form action="index.php" method="post" class=" w3-row w3-light-grey w3-text-blue w3-margin" style="width:70%;">

                <div class="w3-row w3-center">

                    <div class="w3-col" style="width:50%;">

                        <h3>Data Inicial</h3>
                        
                    </div>
                    
                    <div class="w3-col" style="width:50%;">

                        <h3>Data Final</h3>

                    </div>
                    
                </div>
                
                <div class="w3-row w3-section">

                    <div class="w3-row w3-section w3-col" style="width:45%;">
                    
                        <div class="w3-col" style="width:15%;">

                            <i class="w3-xxlarge fa fa-calendar"></i>

                        </div>
                        
                        <div class="w3-rest">

                            <input class="w3-input w3-border w3-round-large" name="txtInicioOF" type="date" placeholder="">

                        </div>

                    </div>
                    
                    <div class="w3-row w3-section w3-rest">

                        <div class="w3-col w3-margin-left" style="width:13%;">

                            <i class="w3-xxlarge fa fa-calendar"></i>
                            
                        </div>
                        
                        <div class="w3-rest">

                            <input class="w3-input w3-border w3-round-large" name="txtFimOF" type="date" placeholder="">

                        </div>

                    </div>
                    
                </div>

                <div class="w3-row w3-section">

                    <div class="w3-col" style="width:7%;">

                        <i class="w3-xxlarge fa fa-align-justify"></i>

                    </div>
                    
                    <div class="w3-rest">
                        
                        <input class="w3-input w3-border w3-round-large" name="txtDescOF" type="text" placeholder="Descrição: Ex: Cursos Feitos">

                    </div>
                </div>
                
                <div class="w3-row w3-section">

                    <div class="w3-center">
                    
                        <button name="btnAddOF" class="w3-button w3-block w3-blue w3-cell w3-roundlarge" style="width: 20%;">

                            <i class="w3-xxlarge fa fa-user-plus"></i>

                        </button>

                    </div>

                </div>

            </form>
            
            <div class="w3-container">

                <table class="w3-table-all w3-centered">
                    <thead>
                        <tr class="w3-center w3-blue">
                            <th>Início</th>
                            <th>Fim</th>
                            <th>Descrição</th>
                            <th>Apagar</th>
                        </tr>
                    <thead>

                    <?php
                    
                        $otCon = new OutrasExpController();
                        $results = $otCon->gerarLista(unserialize($_SESSION['Usuario'])->getID());
                        if($results != null)
                        while($row = $results->fetch_object())
                        {
                            echo '<tr>';
                            echo '<td style="width: 10%;">'.$row->inicio.'<td>';
                            echo '<td style="width:10%">'.$row->fim.'<td>';
                            echo '<td style="width:65%">'.$row->descricao.'<td>';
                            echo '<td style="width:5%">';
                            echo '<form action="../Controller/navegacao.php" method="post">';
                            echo '<input type="hidden" name="id" value ="'.$row->idoutrasformacoes.'">';
                            echo'<button name="btnExcluirOT" class="w3-button w3-block w3-blue
                            w3-cell w3-round-large">';
                            echo '<i class="fa fa-user-times"></i> </button></td>
                            </form></tr>';
                        }
                    ?>

                </table>
            </div>
        </div>
    
    </div>
     
</body>
</html>