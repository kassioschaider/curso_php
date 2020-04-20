<?php

require_once 'autoload.php';

use KassioSchaider\Banco\Modelo\Conta\ContaCorrente;
use KassioSchaider\Banco\Modelo\Conta\ContaPoupanca;
use KassioSchaider\Banco\Modelo\Conta\Titular;
use KassioSchaider\Banco\Modelo\CPF;
use KassioSchaider\Banco\Modelo\Endereco;

$conta = new ContaCorrente(
    new Titular(
        new CPF('123.456.789-10'),
        'Kassio',
        new Endereco('Colatina', 'São Silvano', 'Rua 1', 10)
    )
);

$conta->depositar(10000);
$conta->sacar(200);

echo $conta->getSaldo();