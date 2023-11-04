<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro</title>
    <link rel="stylesheet" type="text/CSS" href="stylecad.css">
    <link rel="icon" href="imagens/logo.ico"/>
</head>
<body>

<div class="fundo">

</div>

<div id="main-container">
    <h1>Cadastre-se</h1>
    
    <?php
        if (isset($_GET['erros'])) {
            $erros = $_GET['erros'];
            if (!empty($erros)) {
    ?>
    <div>
        <ul>
            <?php
                foreach($erros as $erro) {
            ?>
                    <li><?php echo $erro; ?></li>
            <?php
                }
            ?>
        </ul>
    </div>
    <?php
            }
        }
    ?>

    <form id="register-form" action="gravalog.php" method="POST">
        <div class="full-box">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" placeholder="Digite seu e-mail">
        </div>
        <div class="half-box space">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" placeholder="Digite seu nome">
        </div>
        <div class="half-box">
            <label for="lastname">Sobrenome</label>
            <input type="text" name="lastname" id="lastname" placeholder="Digite seu sobrenome">
        </div>
        <div class="half-box space">
            <label for="passwordd">Senha</label>
            <input type="password" name="password" id="passwordd" placeholder="Digite sua senha">
        </div>
        <div class="half-box">
            <label for="passconfirmation">Confirmar senha</label>
            <input type="password" name="password_confirmation" id="passconfirmation" placeholder="Confirme sua senha">
        </div>
        <div class="full-box">
            <input type="submit" id="enviar" value="Registrar">
            <div id="register-container">
         <p>Já tem uma conta?</p>
         <a href="http://localhost/tcc/login.php">Logar</a>

        </div>

    <p class="error"></p>
  </form>
</div>

</body>
</html>