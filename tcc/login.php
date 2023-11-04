
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css">
    <link rel="stylesheet" href="stylelog.css">
    <link rel="icon" href="imagens/logo.ico"/>
</head>
<body>
<div class="fundo">

</div>
    <form action="logar.php" method="POST">
    <div id="login-container">
        <h1>Login</h1>
     
         <label for="email">E-mail</label>
         <input type="email" name="email" id="email" placeholder="Digite seu e-mail" autocomplete="off">
         <label for="password">Senha</label>
         <input type="password" name="password" id="passwordd" placeholder="Digite sua senha">
         <a href="#" id="forgot">Esqueceu a senha?</a>
         <input type="submit" value="Logar">
    
  <div id="register-container">
         <p>Ainda não tem uma conta?</p>
          <a href="http://localhost/tcc/cadastro.php">Registrar</a> 
          </form>
  </div>
    </div>
    
    
</body>
</html>