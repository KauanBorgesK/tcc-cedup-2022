<?php

// session_destroy();
$sqlProdutosCategoriaNamaste = "SELECT id_produto, nome_produto, preco_produto, desc_produto, path_name from produtos where fk_id_categorias=1";
$resultado=mysqli_query($conn,$sqlProdutosCategoriaNamaste);
?>

<?php while ($linha=mysqli_fetch_array($resultado)) {?> 
    <div id="produto<?php echo $linha['id_produto']?>"  class="modal">
        <h1><?php echo $linha['nome_produto']?></h1>
          <img src="<?php echo $linha ['path_name'] ?>" alt="Chai Latte">
          <p><?php echo $linha['desc_produto']?></p>


        <form method="POST">
            <input type="hidden" name="carrinho[id_produto]" value="<?php echo $linha['id_produto']; ?>" />
            <input type="hidden" name="carrinho[preco_produto]" value="<?php echo $linha['preco_produto']; ?>" />
            <input type="hidden" name="carrinho[nome_produto]" value="<?php echo $linha['nome_produto']; ?>" />
            <div class="coment">
              <textarea cols="25" rows="2" class="coments" placeholder="Comentários" name="carrinho[comentario]" required></textarea>
            </div>
            <div class="botao">
              <button type="submit">Adicionar</button>
              <a href="#" rel="modal:close"></a>
            </div>
        </form>
    </div>

<?php } ?>


<!-- SEGUNDA PARTE -->
<?php 
$sqlProdutosCategoriaCaprichados = "SELECT id_produto, nome_produto, preco_produto, desc_produto, path_name from produtos where fk_id_categorias=2";
$resultado=mysqli_query($conn,$sqlProdutosCategoriaCaprichados);
?>

<?php while ($linha=mysqli_fetch_array($resultado)) {?> 
  <div id="produto<?php echo $linha['id_produto']?>"  class="modal">
    <h1><?php echo $linha['nome_produto']?></h1>
      <img src="<?php echo $linha ['path_name'] ?>" alt="ovomisto">
      <p><?php echo $linha['desc_produto']?></p>

      <form method="POST">
            <input type="hidden" name="carrinho[id_produto]" value="<?php echo $linha['id_produto']; ?>" />
            <input type="hidden" name="carrinho[preco_produto]" value="<?php echo $linha['preco_produto']; ?>" />
            <input type="hidden" name="carrinho[nome_produto]" value="<?php echo $linha['nome_produto']; ?>" />
            <div class="coment">
              <textarea cols="25" rows="2" class="coments" placeholder="Comentários" name="carrinho[comentario]" required></textarea>
            </div>
            <div class="botao">
              <button type="submit">Adicionar</button>
              <a href="#" rel="modal:close"></a>
            </div>
        </form>
  </div>
<?php } ?>

<!-- TERCEIRA PARTE -->
<?php 
$sqlProdutosCategoriaRefrescantes = "SELECT id_produto, nome_produto, preco_produto, desc_produto, path_name from produtos where fk_id_categorias=3";
$resultado=mysqli_query($conn,$sqlProdutosCategoriaRefrescantes);
?>

<?php while ($linha=mysqli_fetch_array($resultado)) {?> 
  <div id="produto<?php echo $linha['id_produto']?>"  class="modal">
    <h1><?php echo $linha['nome_produto']?></h1>
      <img src="<?php echo $linha ['path_name'] ?>" alt="ovomisto">
      <p><?php echo $linha['desc_produto']?></p>

      <form method="POST">
            <input type="hidden" name="carrinho[id_produto]" value="<?php echo $linha['id_produto']; ?>" />
            <input type="hidden" name="carrinho[preco_produto]" value="<?php echo $linha['preco_produto']; ?>" />
            <input type="hidden" name="carrinho[nome_produto]" value="<?php echo $linha['nome_produto']; ?>" />
            <div class="coment">
              <textarea cols="25" rows="2" class="coments" placeholder="Comentários" name="carrinho[comentario]" required></textarea>
            </div>
            <div class="botao">
              <button type="submit">Adicionar</button>
              <a href="#" rel="modal:close"></a>
            </div>
        </form>
  </div>
<?php } ?>

<!-- QUARTA PARTE -->
<?php 
$sqlProdutosCategoriaEspeciais = "SELECT id_produto, nome_produto, preco_produto, desc_produto, path_name from produtos where fk_id_categorias=4";
$resultado=mysqli_query($conn,$sqlProdutosCategoriaEspeciais);

?>  

<?php while ($linha=mysqli_fetch_array($resultado)) {?> 
  <div id="produto<?php echo $linha['id_produto']?>"  class="modal">
    <h1><?php echo $linha['nome_produto']?></h1>
      <img src="<?php echo $linha ['path_name'] ?>" alt="ovomisto">
      <p><?php echo $linha['desc_produto']?></p>

      <form method="POST">
            <input type="hidden" name="carrinho[id_produto]" value="<?php echo $linha['id_produto']; ?>" />
            <input type="hidden" name="carrinho[preco_produto]" value="<?php echo $linha['preco_produto']; ?>" />
            <input type="hidden" name="carrinho[nome_produto]" value="<?php echo $linha['nome_produto']; ?>" />
            <div class="coment">
              <textarea cols="25" rows="2" class="coments" placeholder="Comentários" name="carrinho[comentario]" required></textarea>
            </div>
            <div class="botao">
              <button type="submit">Adicionar</button>
              <a href="#" rel="modal:close"></a>
            </div>
        </form>
  </div>
<?php } ?>

<!-- QUINTA PARTE -->
<?php 
$sqlProdutosCategoriaDeliciosos = "SELECT id_produto, nome_produto, preco_produto, desc_produto, path_name from produtos where fk_id_categorias=5";
$resultado=mysqli_query($conn,$sqlProdutosCategoriaDeliciosos);

?>  

<?php while ($linha=mysqli_fetch_array($resultado)) {?> 
  <div id="produto<?php echo $linha['id_produto']?>"  class="modal">
    <h1><?php echo $linha['nome_produto']?></h1>
      <img src="<?php echo $linha ['path_name'] ?>" alt="ovomisto">
      <p><?php echo $linha['desc_produto']?></p>

      <form method="POST">
            <input type="hidden" name="carrinho[id_produto]" value="<?php echo $linha['id_produto']; ?>" />
            <input type="hidden" name="carrinho[preco_produto]" value="<?php echo $linha['preco_produto']; ?>" />
            <input type="hidden" name="carrinho[nome_produto]" value="<?php echo $linha['nome_produto']; ?>" />
            <div class="coment">
              <textarea cols="25" rows="2" class="coments" placeholder="Comentários" name="carrinho[comentario]" required></textarea>
            </div>
            <div class="botao">
              <button type="submit">Adicionar</button>
              <a href="#" rel="modal:close"></a>
            </div>
        </form>
  </div>
<?php } ?>


<!-- SEXTA PARTE -->
<?php 
$sqlProdutosCategoriaDiversas = "SELECT id_produto, nome_produto, preco_produto, desc_produto, path_name from produtos where fk_id_categorias=6";
$resultado=mysqli_query($conn,$sqlProdutosCategoriaDiversas);

?>  

<?php while ($linha=mysqli_fetch_array($resultado)) {?> 
  <div id="produto<?php echo $linha['id_produto']?>"  class="modal">
    <h1><?php echo $linha['nome_produto']?></h1>
      <img src="<?php echo $linha ['path_name'] ?>" alt="ovomisto">
      <p><?php echo $linha['desc_produto']?></p>

      <form method="POST">
            <input type="hidden" name="carrinho[id_produto]" value="<?php echo $linha['id_produto']; ?>" />
            <input type="hidden" name="carrinho[preco_produto]" value="<?php echo $linha['preco_produto']; ?>" />
            <input type="hidden" name="carrinho[nome_produto]" value="<?php echo $linha['nome_produto']; ?>" />
            <div class="coment">
              <textarea cols="25" rows="2" class="coments" placeholder="Comentários" name="carrinho[comentario]" required></textarea>
            </div>
            <div class="botao">
              <button type="submit">Adicionar</button>
              <a href="#" rel="modal:close"></a>
            </div>
        </form>
  </div>
<?php } ?>

<!-- SETIMA PARTE -->
<?php 
$sqlProdutosCategoriaCasa = "SELECT id_produto, nome_produto, preco_produto,desc_produto, path_name from produtos where fk_id_categorias=7";
$resultado=mysqli_query($conn,$sqlProdutosCategoriaCasa);

?>  

<?php while ($linha=mysqli_fetch_array($resultado)) {?> 
  <div id="produto<?php echo $linha['id_produto']?>"  class="modal">
    <h1><?php echo $linha['nome_produto']?></h1>
      <img src="<?php echo $linha ['path_name'] ?>" alt="ovomisto">
      <p><?php echo $linha['desc_produto']?></p>

      <form method="POST">
            <input type="hidden" name="carrinho[id_produto]" value="<?php echo $linha['id_produto']; ?>" />
            <input type="hidden" name="carrinho[preco_produto]" value="<?php echo $linha['preco_produto']; ?>" />
            <input type="hidden" name="carrinho[nome_produto]" value="<?php echo $linha['nome_produto']; ?>" />
            <div class="coment">
              <textarea cols="25" rows="2" class="coments" placeholder="Comentários" name="carrinho[comentario]" required></textarea>
            </div>
            <div class="botao">
              <button type="submit">Adicionar</button>
              <a href="#" rel="modal:close"></a>
            </div>
        </form>
  </div>
<?php } ?>
    </div>
  </form>
</div>