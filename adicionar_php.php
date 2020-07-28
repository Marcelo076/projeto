<?php
require 'config.php'; 
$name = filter_input(INPUT_POST, 'nome');
$cidade = filter_input(INPUT_POST, 'cidade');
$inf = filter_input(INPUT_POST, 'inf');
$cat = filter_input(INPUT_POST, 'cat');


$pdo->query("INSERT INTO nomes (nome, cidade, inf, cat) VALUES('$name','$cidade','$inf','$cat')") ;

header("Location: index.php");
?>
