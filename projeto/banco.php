<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';

$primeiraConta = new Conta(new Titular('123.456.789-10', 'Vinicius Dias'));

$primeiraConta->depositar(500);
$primeiraConta->sacar(300); // isso é ok

echo $primeiraConta->getNomeTitular() . PHP_EOL;
echo $primeiraConta->getCpfTitular() . PHP_EOL;
echo $primeiraConta->getSaldo() . PHP_EOL;

$segundaConta = new Conta(new Titular('698.549.548-10', 'Patricia'));
var_dump($segundaConta);

$outra = new Conta(new Titular('123', 'Abcdefg'));
echo Conta::getNumeroDeContas();