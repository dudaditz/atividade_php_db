EDITAR-FILME.PHP
<!doctype html>
<html>
<head><meta charset="utf-8">
<title>Gerencia Registro</title>
</head>
<body>
<h1> Locadora IFPR</h1>
<?php
include("menu.php");
?>
<form name="form1" action="atualizar-filme.php?" method="post">
<input type="hidden" name="idFilme" value="<?php echo $idFilme;?>">
<p>
<label>Tidulo:</label>
<input type="text" name="tituloFilme" value="<?php echo $tituloFilme; ?>">
</p>
<p>
<label>Duração:</label>
<input type="text" name="duracaoFilme" value="<?php echo $duracaoFilme; ?>">
</p>
<p>
<label>Valor: R$ </label>
<input type="text" name="valorLocacao" value="<?php echo $valorLocacao; ?>">
</p>
<p><label>Categoria </label>
<select name="idCategoria">
<option value='<?php echo $idCategoria;?>'><?php echo $nomeCategoria;?></option>
<?php
$rsCategoria = mysqli_query($conexao,"select * from tbCategorias");
$linhas = mysqli_num_rows($rsCategoria);
for($i=0;$i<$linhas;$i++){
$dados = mysqli_fetch_array($rsCategoria);
$idCategoria = $dados["idCategoria"];
$nomeCategoria = $dados["nomeCategoria"];
echo "<option value = '$idCategoria'>$nomeCategoria</option>";
}
?>
</select>
</p>
<p>
<input type="submit" name="opcao" value="Atualizar">
</p>
</form>
</body>
</html>