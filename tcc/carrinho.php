
<?php
session_start();
include 'conectalog.php';

if (isset($_GET['id'])) {
    $id_produto = $_GET['id'];
    unset($_SESSION['carrinho'][$id_produto]); 
}
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>carrinho</title>
        <link rel="icon" href="imagens/logo.ico"/>
        <link rel="stylesheet" type="text/CSS" href="stylescart.css"/>
        <script src="https://kit.fontawesome.com/76a2d9edeb.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php include './componentes/header.php';?>

        <div class="fundo"></div>
        <h2>Seu carrinho</h2>
        <div class="tabela">
            <table border="2">
                <thead>
                    <tr>
                        <th>Compras</th>
                        <th>Quantidade</th>
                        <th>Preço</th>
                        <th>Comentario</th>
                        <th colspan="2">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (isset($_SESSION['carrinho'])) {
                        foreach($_SESSION['carrinho'] as $key => $value) {
                        ?>
                        
                                <tr>
                                    <td><em><?php echo ''.$value['nome'].' ' ?></em></td>
                                    <td><em><?php echo ''.$value['quantidade'].' '?></em></td>
                                    <td><em><?php echo ''.($value['quantidade']*$value['preco']).' ' ?></em></td>
                                    <td><em><?php echo ''.$value['comentario'].'</p>'; ' '?></em></td>
                                    <td><a href="?id=<?php echo $key; ?>">Excluir</a></td>
                                </tr>  

                        </div> 
                            <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </body>
</html>