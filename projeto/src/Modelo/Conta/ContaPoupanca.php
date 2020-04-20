<?php

namespace KassioSchaider\Banco\Modelo\Conta;

class ContaPoupanca extends Conta
{
    public function percentualTarifa(): float
    {
        return 0.03;
    }
}