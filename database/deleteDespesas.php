<?php

include_once("connection.php");

$idDes = $_POST['remDes'];

$queryDes = "DELETE FROM `despesas` WHERE `despesas`.`id`={$idDes}";
$desp = $conn->prepare($queryDes);
$desp->execute();

header("Location: http://localhost/paneDeSerra/despesas.php");

die()
?>