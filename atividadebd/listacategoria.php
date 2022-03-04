<?php
include_once("conexap.php");

echo "<h1>Selecionando registros usando FOR</h1>";

$sqlRegistros = mysqli_query($conexao, "select * from tbcategoria");
$num_linhas = mysqli_num_rows($sqlRegistros);

    for($i = 0; $i<$num_linhas; $i++){
        $dados = mysqli_fetch_array($sqlRegistros);
        $idcategoria = $dados["idcategoria"];
        $nomecategoria = $dados["nomecategoria"];
        echo "Código: $idcategoria | Categoria: $nomecategoria <br>";

    }



?>