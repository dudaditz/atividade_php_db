<?php

$servidor = "localhost";
$usuario ="root";
$senha = "bancodedados";
$banco = "bdlocadora";

$conexao = mysqli_connect($servidor,$usuario, $senha,$banco) or die ("Não foi possivel conectar-se ao servidor." . mysqli_connect_error());
    if(isset($conexao)){
        echo "Banco de dados selecionado com sucesso.";
    }


?>