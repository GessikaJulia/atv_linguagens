<?php
include("Produto.php");
include("Venda.php");

$venda = new Venda();
$venda->gerarP();
$venda->calcularV();

echo "<br>";
$venda->imprimir();
?>