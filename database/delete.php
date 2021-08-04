<?php

include_once("connection.php");

$idVen = $_POST['remVenda'];
$idDes = $_POST['remDes'];


    $query = "DELETE FROM `vendas` WHERE `vendas`.`id`={$idVen}";
    $stmt = $conn->prepare($query);
    $stmt->execute();

    $queryDes = "DELETE FROM `despesas` WHERE `despesas`.`id`={$idDes}";
    $desp = $conn->prepare($queryDes);
    $desp->execute();




header("Location: http://localhost/paneDeSerra/despesas.php");
die()
?>