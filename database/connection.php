<?php
$host = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$host;dbname=paneserra", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

$query = "SELECT * FROM paneserra";
$data = $query->query($query);

foreach($data as $row){
    echo '<tr>'.$row["receita"].'</tr>'
};

?>