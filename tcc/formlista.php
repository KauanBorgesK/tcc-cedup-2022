<?php
include 'conectalog.php';

$sql="SELECT id_pessoa, nome, sobrenome, email, senha FROM cadastro";
$resultado = mysqli_query($conn,$sql);
if ($resultado==false) {
	die("Erro: ".mysqli_error($conn));
}
?>
<meta charset="utf-8">
<h2> Lista de Cidades</h2>
<a href="cadastro.php">Novo</a>
<table border="1">
	<tr>
		<th>ID </th>
		<th>Nome</th>
		<th>sobrenome</th>
        <th>email</th>
        <th>senha</th>
		<th colspan="2">Ações</th>
	</tr>
	<?php
        while($item=mysqli_fetch_array($resultado)) {
	?>
         	<tr>
         	<td> <?php echo $item['id_pessoa'];?></td>
         	<td> <?php echo $item['nome'];?> </td>
         	<td> <?php echo $item['sobrenome'];?> </td>
            <td> <?php echo $item['email'];?> </td>
            <td> <?php echo $item['senha'];?> </td>
			<td><a href='formexcluir.php?id=<?php echo $item['id_pessoa'];?>'>Excluir</a></td>
			</tr>
	<?php
		}
	?>
</table>