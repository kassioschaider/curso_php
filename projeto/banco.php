<?php

require_once 'autoload.php';

use KassioSchaider\Banco\Modelo\CPF;
use KassioSchaider\Banco\Modelo\Endereco;
use KassioSchaider\Banco\Modelo\Conta\Conta;
use KassioSchaider\Banco\Modelo\Conta\Titular;

$endereco = new Endereco('Petrópolis', 'um bairro', 'minha rua', '71B');
$vinicius = new Titular(new CPF('123.456.789-10'), 'Vinicius Dias', $endereco);
$primeiraConta = new Conta($vinicius);
$primeiraConta->depositar(500);
$primeiraConta->sacar(300); // isso é ok

echo $primeiraConta->getNomeTitular() . PHP_EOL;
echo $primeiraConta->getCpfTitular() . PHP_EOL;
echo $primeiraConta->getSaldo() . PHP_EOL;

$patricia = new Titular(new CPF('698.549.548-10'), 'Patricia', $endereco);
$segundaConta = new Conta($patricia);
var_dump($segundaConta);

$outroEndereco = new Endereco('A', 'b', 'c', '1D');
$outra = new Conta(new Titular(new CPF('123'), 'Abcdefg', $endereco));
unset($segundaConta);
echo Conta::getNumeroDeContas();