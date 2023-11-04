<?php
session_start();
include 'conectalog.php';

if (isset($_POST['carrinho'])) {
    $_SESSION['carrinho'] = isset($_SESSION['carrinho'])
        ? $_SESSION['carrinho']
        : [];
    $carrinho = $_POST['carrinho'];
    $id_produto = $carrinho['id_produto'];

    if(isset($_SESSION['carrinho'][$id_produto])){
        $_SESSION['carrinho'][$id_produto]['quantidade']++;
    } else {
        $_SESSION['carrinho'][$id_produto] = [
            'quantidade'=> 1,
            'nome' => $carrinho['nome_produto'],
            'preco'=> $carrinho['preco_produto'],
            'comentario'=> $carrinho['comentario'],
        ];
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>compras</title>

  <link rel="icon" href="imagens/logo.ico"/>
  <link rel="stylesheet" type="text/CSS" href="stylescom.css">

  <script src="https://kit.fontawesome.com/76a2d9edeb.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
 

</head>
<body>


<?php include './componentes/header.php';

$sqlProdutosCategoriaNamaste = "SELECT id_produto, nome_produto, preco_produto, desc_produto, path_name from produtos where fk_id_categorias=1";
$resultado=mysqli_query($conn,$sqlProdutosCategoriaNamaste);

?>
    <div class="fundo"></div>
    <div class="titulos">
      <h1>Cardápio</h1>
    </div>
    
    <div class="titulos">
      <h2>Especialidades da Índia (Namastê!)</h2>
    </div>

<!-- primeira parte -->
<?php while ($linha=mysqli_fetch_array($resultado)) {?>
    <div class="compras">
      <a href="#produto<?php echo $linha['id_produto']?>" rel="modal:open">
            <div class="texto">
              <h4> <?php echo $linha['nome_produto']?></h4>
              <p><?php echo $linha['desc_produto']?></p>
              <p><strong>R$<?php echo $linha['preco_produto']?></strong></p> 
            </div>
            <div class="chai">  
            <img src="<?php echo $linha ['path_name'] ?>" alt="Chai Latte">
              <!-- <img src="./imagens/chai.jpeg" alt="Chai Latte">    -->
            </div>
      </a> 
    </div>
     <?php 
     }

  ?>
    
   
     
    


<!-- segunda parte -->
<?php 
$sqlProdutosCategoriaCaprichados = "SELECT id_produto, nome_produto, preco_produto, desc_produto, path_name from produtos where fk_id_categorias=2";
$resultado=mysqli_query($conn,$sqlProdutosCategoriaCaprichados);

?>
    <div class="titulos">
      <h2>Lanches bem Caprichados!</h2>
    </div>  

<?php while ($linha=mysqli_fetch_array($resultado)) {?> 

      <div class="compras">
        <a href="#produto<?php echo $linha['id_produto']?>" rel="modal:open">
          <div class="texto">
            <h4><?php echo $linha['nome_produto']?></h4>
            <p><?php echo $linha['desc_produto']?></p>
            <p><strong>R$<?php echo $linha['preco_produto']?></strong></p>
          </div>
          <div class="ovomisto">
            <img src="<?php echo $linha ['path_name'] ?>" alt="ovomisto">
          </div>
        </a>
      </div>
   
<?php } ?>


<!-- terceira parte -->
<?php 
$sqlProdutosCategoriaRefrescantes = "SELECT id_produto, nome_produto, preco_produto, desc_produto, path_name from produtos where fk_id_categorias=3";
$resultado=mysqli_query($conn,$sqlProdutosCategoriaRefrescantes);

?>
    <div class="titulos"> 
      <h2>Bebidas Refrescantes</h2>
    </div>

<?php while ($linha=mysqli_fetch_array($resultado)) {?> 

      <div class="compras">
        <a href="#produto<?php echo $linha['id_produto']?>" rel="modal:open">
          <div class="texto">
              <h4><?php echo $linha['nome_produto']?></h4>
            <p><?php echo $linha['desc_produto']?></p>
            <p><strong>R$<?php echo $linha['preco_produto']?></strong></p>
          </div>
          <div class="frappechocolate">
            <img src="<?php echo $linha ['path_name'] ?>" alt="frappechocolate">
          </div>
        </a>
      </div>
    
<?php } ?>

<!-- quarta parte -->
<?php 
$sqlProdutosCategoriaEspeciais = "SELECT id_produto, nome_produto, preco_produto, desc_produto, path_name from produtos where fk_id_categorias=4";
$resultado=mysqli_query($conn,$sqlProdutosCategoriaEspeciais);

?>  
    <div class="titulos">   
      <h2>Bebidas Quentes Especiais</h2>
    </div>

<?php while ($linha=mysqli_fetch_array($resultado)) {?> 

      <div class="compras">
        <a href="#produto<?php echo $linha['id_produto']?>" rel="modal:open">
          <div class="texto">
            <h4><?php echo $linha['nome_produto']?></h4>
            <p><?php echo $linha['desc_produto']?></p>
            <p><strong>R$<?php echo $linha['preco_produto']?></strong></p>
          </div>
          <div class="cafecomleite">
            <img src="<?php echo $linha ['path_name'] ?>" alt="cafecomleite">
          </div>
        </a>
      </div>
   
<?php } ?>

<!-- quinta parte -->
<?php 
$sqlProdutosCategoriaDeliciosos = "SELECT id_produto, nome_produto, preco_produto, desc_produto, path_name from produtos where fk_id_categorias=5";
$resultado=mysqli_query($conn,$sqlProdutosCategoriaDeliciosos);

?>  
    <div class="titulos">   
      <h2>Salgados Deliciosos</h2>
    </div>

<?php while ($linha=mysqli_fetch_array($resultado)) {?>     
    
      <div class="compras">
        <a href="#produto<?php echo $linha['id_produto']?>" rel="modal:open">
          <div class="texto">
            <h4><?php echo $linha['nome_produto']?></h4>
            <p><?php echo $linha['desc_produto']?></p>
            <p><strong>R$<?php echo $linha['preco_produto']?></strong></p>
          </div>
          <div class="folhadoqueijo">
            <img src="<?php echo $linha ['path_name'] ?>" alt="folhadoqueijo">
          </div>
        </a>
      </div>
    
<?php } ?>

<!-- sexta parte -->
<?php 
$sqlProdutosCategoriaDiversas = "SELECT id_produto, nome_produto, preco_produto, desc_produto, path_name from produtos where fk_id_categorias=6";
$resultado=mysqli_query($conn,$sqlProdutosCategoriaDiversas);

?>  
    <div class="titulos">   
      <h2>Bebidas Diversas</h2>
    </div>

<?php while ($linha=mysqli_fetch_array($resultado)) {?>  
    
      <div class="compras">
        <a href="#produto<?php echo $linha['id_produto']?>" rel="modal:open">
          <div class="texto">
            <h4><?php echo $linha['nome_produto']?></h4>
            <p><?php echo $linha['desc_produto']?></p>
            <p><strong>R$<?php echo $linha['preco_produto']?></strong></p>
          </div>
          <div class="agua">
            <img src="<?php echo $linha ['path_name'] ?>" alt="agua">
          </div>
        </a>
      </div>
    
<?php } ?>

<!-- setima parte -->
<?php 
$sqlProdutosCategoriaCasa = "SELECT id_produto, nome_produto, preco_produto, desc_produto, path_name from produtos where fk_id_categorias=7";
$resultado=mysqli_query($conn,$sqlProdutosCategoriaCasa);

?>  
    <div class="titulos">   
      <h2>Para saborear em casa!</h2>
    </div>

<?php while ($linha=mysqli_fetch_array($resultado)) {?>  
    
      <div class="compras">
        <a href="#produto<?php echo $linha['id_produto']?>" rel="modal:open">
          <div class="texto">
            <h4><?php echo $linha['nome_produto']?></h4>
            <p> <?php echo $linha['desc_produto']?></p>
            <p><strong>R$<?php echo $linha['preco_produto']?></strong></p>
          </div>
          <div class="cafemoido">
            <img src="<?php echo $linha ['path_name'] ?>" alt="cafemoido">
          </div>
        </a>
      </div>
    
<?php } ?>
    
<footer>
  <?php include './componentes/footer.php'; ?>
</footer>

  <?php include './componentes/compras/modais.php'; ?>


</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>



</html>

