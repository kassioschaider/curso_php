<?php

namespace KassioSchaider\Banco\Modelo\Conta;

use KassioSchaider\Banco\Modelo\CPF;
use KassioSchaider\Banco\Modelo\Pessoa;
use KassioSchaider\Banco\Modelo\Endereco;

class Titular extends Pessoa
{
    private $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }

    public function getEndereco() {
        return $this->endereco;
    }
}