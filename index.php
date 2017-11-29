<?php
$conn = new \PDO("mysql:host=localhost;dbname=teste","root","root");
$qry = "SELECT * FROM `pessoa`";
$retorno = $conn->query($qry);
$pessoas = $retorno->fetchAll();
print_r($pessoas);


echo "<p>Mysqli</p>";
$mysqli = new mysqli("localhost", "root", "root", "teste");
$qry = "SELECT * FROM `pessoa`";

foreach ($q = $mysqli->query($qry) as $p) {
    echo $p['nome']."<br/>";

}
