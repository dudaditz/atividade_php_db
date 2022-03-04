<?php

include("conexap.php");
$titulofilme = $_POST["titulofilme"];
$duracaofilme = $_POST ["duracaofilme"];
$valorlocacao = $_POST ["valorlocacao"];
$idcategoria = $_POST ["idcategoria"];

$sqlgravarfilme = mysqli_query($conexao, "insert into tbfilmes
(titulofilme, duracaofilme, valorlocacao, idcategoria)
value('$titulofilme', '$duracaofilme', '$valorlocacao', '$idcategoria')")
or die("Erro ao grvar registro" . mysqli_error($conexao));
header('Location: lista-filmes.php');

?>
