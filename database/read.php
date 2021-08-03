<?php

require_once('./database/connection.php');


$query = "SELECT * FROM vendas";
$stmt = $conn->prepare($query);
$stmt->execute();

?>