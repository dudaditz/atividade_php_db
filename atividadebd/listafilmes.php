<?php
include_once("conexap.php");

echo "<h1>Selecionando registros usando FOR</H1>";

$sqlRegistros = mysqli_query($conexao, "select * from tbfilmes");
$num_linhas = mysqli_num_rows($sqlRegistros);
    for($i=0; $i<$num_linhas; $i++){
        
        $dados = mysqli_fetch_array($sqlRegistros);
        $idfilme = $dados["idfilme"];
        $titulofilme = $dados["titulofilme"];
        $duracaofilme = $dados ["duracaofilme"];
        $valorlocacao = $dados ["valorlocacao"];
        echo "Código: $idfilme | Título: $titulofilme |  Duração: $duracaofilme | Valor: $valorlocacao <br>";
        
    }






?>