<?php

include_once("connection.php");

$idVen = $_POST['remVenda'];

    $query = "DELETE FROM `vendas` WHERE `vendas`.`id`={$idVen}";
    $stmt = $conn->prepare($query);
    $stmt->execute();

header("Location: http://localhost/paneDeSerra/index.php");
die()
?>