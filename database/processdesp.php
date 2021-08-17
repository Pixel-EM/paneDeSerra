<?php

include("connection.php");

$desp = $_POST['tipodespesa'];
$venc = $_POST['datavenc'];
$vencFormat = date("d/m/Y", strtotime($venc));
$valordesp = str_replace(",", ".", $_POST['valordesp']) ;

$query = "INSERT INTO despesas(tipodespesa, vencimento, valor) VALUES ('$desp','$vencFormat','$valordesp')";
$stmt = $conn->prepare($query);
$stmt->execute();

header('Location: http://localhost/paneDeSerra/despesas.php');
die();
