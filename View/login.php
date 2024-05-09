<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Enlatados Juarez</title>
</head>
<body>
    <!-- Pelo controller -->
    <!-- <form action="../Controller/navegacao.php" method="post" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin w3-display-middle" style="width: 50%;"> -->

    <!-- pelo index -->
    <form action="index.php" method="post" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin w3-display-middle" style="width: 50%;">

        <input type="hidden" name="nome_form" value="frmLogin" />

        <h2 class="w3-center">Login</h2>

        <div class="w3-row w3-section">

            <div class="w3-col" style="width:11%"><i class="w3-xxlarge fa fa-user"></i></div>

            <div class="w3-rest">
                <input class="w3-input w3-border w3-round-large" name="txtLogin" type="text" placeholder="Login CPF (ex.: 33333333333)">
            </div>
        </div>

        <div class="w3-row w3-section">

            <div class="w3-col" style="width:11%"><i class="w3-xxlarge fa fa-lock"></i></div>

            <div class="w3-rest">

                <input class="w3-input w3-border w3-round-large" name="txtSenha" type="password"placeholder="Senha">

            </div>

        </div>

        <div class="w3-row w3-section">

            <div class="w3-half">

                <button name="btnLogin" class="w3-button w3-block w3-margin w3-blue w3-cell w3-round-large" style="width: 90%;">Entrar</button>

            </div>

            <div class="w3-half">

                <button name="btnPrimeiroAcesso" class="w3-button w3-block w3-margin w3-blue w3-cell w3-round-large" style="width: 90%">Primeiro Acesso?</button>

            </div>

        </div>
        
    </form>

</body>
</html>