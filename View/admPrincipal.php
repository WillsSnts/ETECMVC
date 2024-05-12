<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Painel de Administração</title>
    <style>
        body, h1, h2, h3, h4, h5, h6 {
            font-family: "Montserrat", sans-serif
        }
    </style>
</head>
<body class="w3-light-grey">

    <?php
        if(!isset($_SESSION)){
            session_start();
        }
    ?>

    <div class="w3-padding-large" id="main">
        
    <header class="w3-container w3-padding-32 w3-center " id="home"><br>
        
        <h1 class="w3-text-white w3-panel w3-cyan w3-round-large">ADMINISTRAÇÃO</h1>
        
        <h1 class="w3-text-white w3-panel w3-cyan w3-round-large">SISTEMA DE CURRICULOS</h1>

    </header>
    
    <form action="index.php" method="post" class="w3-container w3-light-grey w3-text-blue w3-margin w3-center">
        
        <input type="hidden" name="nome_form" value="frmLogAdm" />
        
        <button name="btnListCad" class="w3-button w3-margin w3-blue w3-cell w3-round-large"><br>

            <i class="w3-xxlarge fa-regular fa-address-book"></i><br>
            
            <p class="w3-xlarge">Usuários<br>Cadastrados</p>
        </button>

        <button name="btnListAdmCad" class="w3-button w3-margin w3-blue w3-cell w3-round-large"><br>

            <i class="w3-xxlarge fa-regular fa-address-book"></i><br>
            
            <p class="w3-xlarge">Administradores<br>Cadastrados</p>
        </button>

        <button name="btnSair" class="w3-button w3-margin w3-blue w3-cell w3-round-large"><br>

            <i class="w3-xxlarge fa-solid fa-right-from-bracket"></i><br>
            
            <p class="w3-xlarge"><br>Sair<br></p>
        </button>

    </form>
    
</body>
</html>