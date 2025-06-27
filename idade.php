<?php
const anoAtual = 2025;

$nascimento = $_POST['nascimento'];

$idade = anoAtual - $nascimento;
$diasVividos = $idade * 365;
$idadeEm2050 = 2050 - $nascimento;

echo "Idade: " . $idade . " anos<br>";
echo "Dias vividos (aproximadamente): " . $diasVividos . " dias<br>";
echo "Idade em 2050: " . $idadeEm2050 . " anos";
?> 