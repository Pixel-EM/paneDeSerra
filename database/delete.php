<?php

include_once("connection.php");

$id = $_POST['remVenda'];

try {
    $query = "DELETE FROM `vendas` WHERE `vendas`.`id`={$id}";
    $stmt = $conn->prepare($query);

    $stmt->execute();
  } catch(PDOException $e) {
    echo "Query failed: " . $e->getMessage();
  }


header("Location: http://localhost/paneDeSerra");
die()
?>