<?php
session_start();

?>

<!-- falar sobre o inicio do café-->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sobre nós</title>
    <link rel="icon" href="imagens/logo.ico"/>
    <link rel="stylesheet" type="text/CSS" href="stylessob.css"/>
    <script src="https://kit.fontawesome.com/76a2d9edeb.js" crossorigin="anonymous"></script>

</head>
<body>


<?php include './componentes/header.php';?>

<div class="fundo"></div>


<div class="titulos">
        <h1><em>Sobre nós</em></h1>
</div>

<div class="text" id="sobre1">
  <p> Gabrioche Café é a nova sensação do bairro. Aberta no fim do mês de julho, em plena pandemia, a cafeteria já cativa quem conhece seus sabores, aromas e, principalmente, sua história. Com bebidas quentes e geladas para todos os gostos, diversas opções de salgados para acompanhar e doces para agradar a todos os paladares. Servimos também pratos indianos como opção para o almoço. Somos a única cafeteria em São Paulo com sabores da Índia!
  </p> 
</div>

<div class="fotos" id="foto1">
</div>

<div class="titulos" id="tit2">
        <h2><em>História de Amor</em></h2>
</div>

<div class="text" id="sobre2">
  <p>A história dos proprietários, Gabriella Pitkar uma brasileira e Mandar Pitkar um indiano, começa em dezembro do ano de 2014. Naquela época, os dois não se conheciam, eram solteiros e trabalhavam em um cruzeiro em alto mar, ela como vendedora, ele como segurança. Mandar conta que foi amor à primeira vista, mas como ele é tímido, não conversaram.  Gabriella tinha contrato de seis meses com o cruzeiro, contudo durou apenas cinco dias, por conta de um acidente. Com toda timidez, Mandar não conseguiu pedir informações  ás amigas da gabi, que trabalhavam no navio também, de como acha-lá , por medo de ser inconveniente. Então, por um acaso, Madar encontrou o perfil de Gabriella no Facebook como sugestão de amizade e enviou a solicitação, foi ai que começou o romance dos dois. 
	Em junho de 2018, Mandar e Gabriella transbordaram seu amor e receberam a chegada de sua filha Kanika.  Os dois dizem que no começo foi bem difícil, pois, Mandar teve que parar de trabalhar com cruzeiros, pois teria que passar seis meses fora e somente dois em casa. Gabriella a essa altura trabalhava como assistente executiva em uma advocacia em São Paulo, mas desde antes o casal tinha vontade de abrir uma cafeteria própria, juntando a cultura brasileira e indiana em um local só. Assim, decidiram arriscar, uma vez que, ele já estava parado sem trabalhar fazia alguns meses, vivendo de bicos depois que largou a vida em alto mar. Então, partiram para o tudo ou nada, utilizaram suas reservas e abriram um negócio para chamar de seu. O Gabrioche Café tem uma das histórias mais bonitas de amor, sentimento este que pode ser identificado nos aromas e sabores criativos do estabelecimento.
</p>
</div>

<footer>
  <?php include './componentes/footer.php'; ?>
</footer>

</body>
</html>