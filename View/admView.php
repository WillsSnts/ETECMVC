<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Visualizar perfil</title>
</head>
<body>
    <?php
        include_once 'Model/Usuario.php';
        include_once 'Model/Experiencia.php';
        include_once 'Controller/usuarioController.php';
        include_once 'Controller/experienciaController.php';
        if(!isset($_SESSION)){
            session_start();
        }
    ?>
    

    <!-- Dados Pessoais -->
    <div class="w3-padding-large w3-padding-128 w3-content w3-text-grey " id="dPessoais">

        <?php
            $user = new Usuario();
            $results = $user->userInfo($_POST['cpf']);
            if($results != null)
            while($row = $results->fetch_object()) {
                $id = $row->idusuario;
                $nome = $row->nome;
                $cpf = $row->cpf;
                $data = $row->datanascimento;
                $email = $row->email;
            }
        ?>

        <h2 class="w3-text-cyan">Dados Pessoais</h2>
                    
        <div class="w3-row w3-section">

            <div class="w3-col w3-text-blue" style="width:11%;">
                <i class="w3-xxlarge fa fa-user"></i>
            </div>

            <div class="w3-rest w3-text-blue">
                <span style="font-size: 2em;"><?php echo $nome; ?></span>
            </div>

            <br>

            <div class="w3-col w3-text-blue" style="width:11%;">
                <i class="w3-xxlarge fa-solid fa-id-card"></i>
            </div>

            <div class="w3-rest w3-text-blue">
                <span style="font-size: 2em;"><?php echo $cpf; ?></span>
            </div>

            <br>

            <div class="w3-col w3-text-blue" style="width:11%;">
                <i class="w3-xxlarge fa-solid fa-calendar"></i>
            </div>

            <div class="w3-rest w3-text-blue">
                <span style="font-size: 2em;"><?php echo $data; ?></span>
            </div>

            <br>

            <div class="w3-col w3-text-blue" style="width:11%;">
                <i class="w3-xxlarge fa-solid fa-envelope"></i>
            </div>

            <div class="w3-rest w3-text-blue">
                <span style="font-size: 2em;"><?php echo $email; ?></span>
            </div>

        </div>
        
    </div>

    <div class="w3-padding-large w3-padding-128 w3-content w3-text-grey" id="formacao">

        <h2 class="w3-text-cyan">Formação</h2>

        <div class="w3-container">

            <table class="w3-table-all w3-centered">
                <thead>
                    <tr class="w3-center w3-blue">
                        <th style="width: 20%;">Início</th>
                        <th style="width: 20%;">Fim</th>
                        <th style="width: 65%;">Descrição</th>
                    </tr>
                <thead>
                <?php
                    $fCon = new FormacaoController();
                    $results = $fCon->gerarLista($id);
                    if($results != null)
                    while($row = $results->fetch_object())
                    {
                        
                        $inicio = $row->inicio;
                        $fim = $row->fim;
                        $desc = $row->descricao;
                    }
                ?>
                <tr>
                    <td style="width:10%;"><?php echo $inicio; ?></td>
                    <td style="width:10%;"><?php echo $fim; ?></td>
                    <td style="width:65%;"><?php echo $desc; ?></td>
                </tr>
            </table>
        </div>
    
    </div>

    <div class="w3-padding-large w3-padding-128 w3-content w3-text-grey" id="eProfissional">

        <h2 class="w3-text-cyan">Experiência Profissional</h2>

        <div class="w3-container">

            <table class="w3-table-all w3-centered">
                <thead>
                    <tr class="w3-center w3-blue">
                        <th style="width: 10%;">Início</th>
                        <th style="width: 10%;">Fim</th>
                        <th style="width: 10%;">Empresa</th>
                        <th style="width:65%">Descrição</th>
                    </tr>
                <thead>
                <?php 

                    $ePro = new ExperienciaProfissional();
                    $results = $ePro->listaExperiencias($id);
                    if($results != null)
                    while($row = $results->fetch_object())
                    {
                        $EPinicio = $row->inicio;
                        $EPfim = $row->fim;
                        $EPemp = $row->empresa;
                        $EPdesc = $row->descricao;
                    }
                ?>
                <tr>
                    <td style="width: 10%;"><?php echo empty($EPinicio) ? "NF" : $EPinicio; ?></td>
                    <td style="width:10%"><?php echo empty($EPfim) ? "NF" : $EPfim; ?></td>
                    <td style="width:10%"><?php echo empty($EPemp) ? "NF" : $EPemp;  ?></td>
                    <td style="width:65%"><?php echo empty($EPdesc) ? "NF" : $EPdesc;  ?></td>
                </tr>
            </table>
        </div>
    
    </div>

    <div class="w3-padding-large w3-padding-128 w3-content w3-text-grey" id="otFormacoes">

        <h2 class="w3-text-cyan">Outras Formações</h2>

        <div class="w3-container">

            <table class="w3-table-all w3-centered">
                <thead>
                    <tr class="w3-center w3-blue">
                        <th>Início</th>
                        <th>Fim</th>
                        <th>Descrição</th>
                    </tr>
                <thead>

                <?php
                
                    $otCon = new OutrasExpController();
                    $results = $otCon->gerarLista(unserialize($_SESSION['Usuario'])->getID());
                    if($results != null)
                    while($row = $results->fetch_object())
                    {
                        $OTinicio = $row->inicio;
                        $OTfim = $row->fim;
                        $OTdesc = $row->descricao;
                    }
                ?>
                <tr>
                <td style="width: 10%;"><?php echo empty($OTinicio) ? "NF" : $OTinicio; ?></td>
                <td style="width:10%"><?php echo empty($OTfim) ? "NF" : $OTfim; ?></td>
                <td style="width:10%"><?php echo empty($OTdesc) ? "NF" : $OTemp;  ?></td>
                </tr>

            </table>
        </div>
    </div>
    
    <div class="w3-padding-128 w3-content w3-text-grey">
        <form action="index.php" method="post" class="w3-container w3-light-grey w3-textblue w3-margin w3-center" style="width: 30%;">
            <div class="w3-row w3-section">
                <div>
                    <button name="btnVoltarList" class="w3-button w3-block w3-margin w3-blue w3-cell w3-roundlarge" style="width: 90%;">Voltar</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>