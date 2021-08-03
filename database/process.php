<?php

include_once("connection.php");

$tipoPao = filter_input(INPUT_POST, 'tipopao', FILTER_SANITIZE_STRING);
$qnt = intval(filter_input(INPUT_POST, 'qnt', FILTER_SANITIZE_STRING));
$nomeCliente = filter_input(INPUT_POST, 'nomecliente', FILTER_SANITIZE_STRING);
$data = date("d/m/Y");
$precoVenda = (filter_input(INPUT_POST, 'precovenda', FILTER_SANITIZE_STRING) * $qnt);

// Não achei uma maneira de puxar o valor por script, o melhor é criar os scripts de calculo por grama em PHP pra poder usar aqui
// Fiz uma pog com essa array onde hardcodei os valores e parsei em float, pelo menos tá pegando os valores corretos
$receitasCusto = array(
    "australiano" => "4.31",
    'light' => "1.99",
    'fibraLight' => "2.52",
    'uvaPassaCanela' => "2.86",
    'integral' => "2.36",
    'aveia' => "1.89",
    'banana' => "2.24",
    'linhaca' => "2.27",
    'maca' => "2.68",
    'ortomolecular' => "2.46"
);
$precoCusto = ( floatval($receitasCusto[$tipoPao]) * $qnt );

// Não se esqueça que esse sistema está em PDO, então siga esse padrão aqui pra executar a query
// O motivo de ter esses passos pra fazer a query é que PDO é pra segurança, então faríamos nesse meio termo da preparação(entre preparar e executar) a verificação de login, cookie, essas coisas

// A query em si
$query = "INSERT INTO vendas(receita, cliente, data, precoVenda, precoCusto) VALUES ('$tipoPao','$nomeCliente','$data','$precoVenda','$precoCusto')";
// Preparar o PDO com a query(basicamente deixar a query no gatilho e pra aumentar a performance)
$stmt = $conn->prepare($query);
// 
// Código de verificação iria aqui, caso existisse; condicionais de login, hash de encriptação, timeout de cookie, blá blá blá
// 
// Executar a query
$stmt->execute();


// Redirecionar o usuário pra página inicial depois de executar a query
header('Location: http://localhost/paneDeSerra');
die();