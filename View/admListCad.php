<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Usuários Cadastrados</title>
</head>
<body>
    <?php
        include_once 'Model/Usuario.php';
        include_once 'Controller/usuarioController.php';
        if(!isset($_SESSION)){
            session_start();
        }
    ?>
    <header class="w3-container w3-padding-32 w3-center " >
        <h1 class="w3-text-white w3-panel w3-cyan w3-round-large">
        Lista de Usuários Cadastrados no Sistema
        </h1>
    </header>
    <div class="w3-padding-128 w3-content w3-text-grey" >
        <div class="w3-container">
            <table class="w3-table-all w3-centered">
                <thead>
                    <tr class="w3-center w3-blue">
                        <th>Código</th>
                        <th>Nome</th>
                        <th>Visualizar</th>
                    </tr>
                </thead>

                <?php
                    $usuario = new UsuarioController();
                    $results = $usuario->gerarLista();
                    if($results != null)

                    while($row = $results->fetch_object()) {
                    echo '<tr>';
                    echo '<td style="width: 1%;">'.$row->idusuario.'</td>';
                    echo '<td style="width: 50%;">'.$row->nome.'</td>';
                    echo '<td style="width: 1%;">';
                    echo '<form action="index.php" method="post">';
                    echo '<input type="hidden" name="cpf" value="'.$row->cpf.'" />';
                    echo '<button name="btnPerfil" class="w3-button w3-block w3-blue
                    w3-cell w3-round-large">';
                    echo '<i class="fa-solid fa-user"></i> </button></td>';
                    echo '</form></tr>';
                    }
                ?>
            </table>
        </div>
    </div>

    <div class="w3-padding-128 w3-content w3-text-grey">
        <form action="index.php" method="post" class="w3-container w3-light-grey w3-textblue w3-margin w3-center" style="width: 30%;">
            <div class="w3-row w3-section">
                <div>
                    <button name="btnVoltar" class="w3-button w3-block w3-margin w3-blue w3-cell w3-roundlarge" style="width: 90%;">Voltar</button>
                </div>
            </div>
        </form>
    </div>
            
    
</body>
</html>