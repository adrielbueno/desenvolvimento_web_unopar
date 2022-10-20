<?php

require_once('Gatos.php');
require_once('Leoes.php');

$gato = new Gatos();
$leao = new Leoes();

echo "Gato: <br>";
echo $gato->getDadosGato();

echo "<br>";

echo "Leão: <br>";
echo $leao->getDadosLeao();