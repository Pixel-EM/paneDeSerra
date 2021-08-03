<?php

include_once("connection.php");

$tipoPao = filter_input(INPUT_POST, 'tipopao', FILTER_SANITIZE_STRING);
$nomeCliente = filter_input(INPUT_POST, 'nomecliente', FILTER_SANITIZE_STRING);
$precoVenda = filter_input(INPUT_POST, 'precovenda', FILTER_SANITIZE_STRING);

$resultVendas = "INSERT INTO vendas (receita, cliente, precoVenda) VALUES ('$tipoPao', '$nomeCliente', '$precoVenda')";
$returnVendas = mysqli_query($conn, $resultVendas);

if(mysqli_insert_id($conn)){
    header("Location: index.php?deucerto");
}
else{
    header("Location: index.php?naodeu");
}