<?php 
$email = null;

if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
}
?>



<div class="topnav">
  <a class="active" href="http://localhost/tcc/sobre.php">Sobre</a>
  <a href="http://localhost/tcc/compras.php">Menu</a>
  <div class="log">

    <?php
      if(empty($email)){
    ?> 
        <a class="log" href="http://localhost/tcc/login.php">Logar</a>
    <?php    
    }
      else{
    ?>
    <div class="cart">
      <a href="http://localhost/tcc/carrinho.php"><i class="fa-solid fa-cart-shopping"></i></a>
    </div>
    
    <span class="fa-solid fa-user"></span>

    <div class="logemail">
      <span class="log"><?php echo $email;?></span>
    </div>
    <div class="logicon">
      <a href="http://localhost/tcc/logout.php"><span class="fa-solid fa-arrow-right-from-bracket"></span></a>
    </div>
    
     
    <?php
    }
    ?>
  </div>
</div>