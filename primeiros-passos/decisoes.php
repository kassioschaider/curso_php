<?php

$idade = 17;
$numeroDePessoas = 2;

echo "Você só pode entrar se tiver a partir de 18 anos ou a partir de 16 anos acompanhado." . PHP_EOL;

if ($idade >= 18) {
    echo "Você tem $idade anos. Você pode entrar sozinho.";
} else if($idade >= 16 && $numeroDePessoas > 1) {
    echo "Você tem $idade anos e está acompanhado. Você pode entrar acompanhado.";
} else {    
    echo "Você só tem $idade anos e está sozinho. Você não pode entrar.";
}

echo PHP_EOL;
echo "Adeus!";
