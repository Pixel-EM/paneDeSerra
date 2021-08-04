<?php

include("connection.php");

$produtosJSON = json_decode(file_get_contents("./produtos/produtos.json"), true);
$receitasJSON = json_decode(file_get_contents("./produtos/receitas.json"), true);

//Setando variáveis do preço por unidade de cada receita
[$australiano, $light, $fibraLight, $uvaPassaCanela, $integral, $aveia, $banana, $linhaca, $maca, $ortomolecular] = 0;

// Array com o preço dos INGREDIENTES
// $produtos = [farinhaTrigo] => 0.004 [farinhaCenteio] => 0.012 [farinhaIntegral] => 0.0055
$produtos = array();

// Array com o nome dos ingredientes pra usar como index na associação
// $ingredientes[0] = farinhaTrigo
$ingredientes = array();

// Array associativa com a quantidade em gramas necessária de cada ingrediente
// $receitas['australiano'] = Array ( [farinhaTrigo] => 210 [farinhaCenteio] => 63 [farinhaIntegral] => 8 
$receitas = array();

// Array com os valores calculados
$receitasValor = array();


// Função pra dar push associativo
function array_push_assoc($array, $key, $value){
    $array[$key] = $value;
    return $array;
 };

// Adiciona o index(nome do produto) e o valor por grama(ppg) na array $produtos 
foreach($produtosJSON as $produto => $nome) {
  $produtos = array_push_assoc($produtos, $nome['nome'], $nome['ppg']);
  array_push($ingredientes, $nome['nome']);
};

// Adiciona o index(nome da receita) e os ingredientes necessarios
foreach($receitasJSON as $receita => $nome){
  $receitas = array_push_assoc($receitas, $nome['nome'], $nome['ingredientes']);
};


// Calculando o valor por unidade de cada receita
for ($i=0; $i < 26; $i++) { 

    // Multiplica o valor por grama do ingrediente e multiplica pela quantidade usada. 
    // Faz iteração em todos os ingredientes e adiciona o valor ao final da iteração ao valor guardado na variável

    // $receitas['australiano'][0][$ingredientes[$i]] = iteração dos ingredientes, passa valor(ingrediente) por valor(ingrediente), utilizando sua quantidade
    // $produtos[$ingredientes[$i]]) = puxa o valor da grama do mesmo produto iterado anteriormente e multiplica um pelo outro
    $australiano = $australiano + ($receitas['australiano'][0][$ingredientes[$i]] * $produtos[$ingredientes[$i]]);
        // Adiciona o valor total de custo da receita para uma array com a index associativa(nome da receita) e formata o valor float para 2 decimais
        // Neste caso: 'australiano' = 4.31
        $receitasValor = array_push_assoc($receitasValor, 'australiano', number_format($australiano, 2));
    
    // Repete o processo para todos as receitas
    $light = $light + ($receitas['light'][0][$ingredientes[$i]] * $produtos[$ingredientes[$i]]);
        $receitasValor = array_push_assoc($receitasValor, 'light', number_format($light, 2)); 

    $fibraLight = $fibraLight + ($receitas['fibraLight'][0][$ingredientes[$i]] * $produtos[$ingredientes[$i]]);
        $receitasValor = array_push_assoc($receitasValor, 'fibraLight', number_format($fibraLight, 2));   

    $uvaPassaCanela = $uvaPassaCanela + ($receitas['uvaPassaCanela'][0][$ingredientes[$i]] * $produtos[$ingredientes[$i]]);
        $receitasValor = array_push_assoc($receitasValor, 'uvaPassaCanela', number_format($uvaPassaCanela, 2));   

    $integral = $integral + ($receitas['integral'][0][$ingredientes[$i]] * $produtos[$ingredientes[$i]]);
        $receitasValor = array_push_assoc($receitasValor, 'integral', number_format($integral, 2));   

    $aveia = $aveia + ($receitas['aveia'][0][$ingredientes[$i]] * $produtos[$ingredientes[$i]]);
        $receitasValor = array_push_assoc($receitasValor, 'aveia', number_format($aveia, 2)); 

    $banana = $banana + ($receitas['banana'][0][$ingredientes[$i]] * $produtos[$ingredientes[$i]]);
        $receitasValor = array_push_assoc($receitasValor, 'banana', number_format($banana, 2));   

    $linhaca = $linhaca + ($receitas['linhaca'][0][$ingredientes[$i]] * $produtos[$ingredientes[$i]]);
        $receitasValor = array_push_assoc($receitasValor, 'linhaca', number_format($linhaca, 2)); 

    $maca = $maca + ($receitas['maca'][0][$ingredientes[$i]] * $produtos[$ingredientes[$i]]);
        $receitasValor = array_push_assoc($receitasValor, 'maca', number_format($maca, 2));   

    $ortomolecular = $ortomolecular + ($receitas['ortomolecular'][0][$ingredientes[$i]] * $produtos[$ingredientes[$i]]);
        $receitasValor = array_push_assoc($receitasValor, 'ortomolecular', number_format($ortomolecular, 2));
};

// Coleta a receita escolhida pelo cliente
$tipoPao = filter_input(INPUT_POST, 'tipopao', FILTER_SANITIZE_STRING);
// Coleta a quantidade selecionada
$qnt = intval(filter_input(INPUT_POST, 'qnt', FILTER_SANITIZE_STRING));
// Coleta o nome do cliente
$nomeCliente = filter_input(INPUT_POST, 'nomecliente', FILTER_SANITIZE_STRING);
// Data em que o submit foi efetuado
$data = date("d/m/Y");
// Coleta o preço final de venda colocado
$precoVenda = (filter_input(INPUT_POST, 'precovenda', FILTER_SANITIZE_STRING) * $qnt);
// Calcula o valor de custo multiplicando o valor final(baseado na receita) e multiplicando pela quantidade
$precoCusto = ($receitasValor[$tipoPao]) * $qnt;


$query = "INSERT INTO vendas(receita, cliente, data, precoVenda, precoCusto) VALUES ('$tipoPao','$nomeCliente','$data','$precoVenda','$precoCusto')";
$stmt = $conn->prepare($query);
$stmt->execute();


// Redirecionar o usuário pra página inicial depois de executar a query
header('Location: http://localhost/paneDeSerra');
die();