<?php

declare(strict_types=1);

class ContaBanco
{
    private $banco;
    private $nomeTitular;
    private $numeroAgencia;
    private $numeroConta;
    private $saldo;

    public function __construct(
        $banco,
        $nomeTitular,
        $numeroAgencia,
        $numeroConta,
        $saldo
        ) {
        $this-> banco = $banco;
        $this-> nomeTitular = $nomeTitular;
        $this-> numeroAgencia = $numeroAgencia;
        $this-> numeroConta = $numeroConta;
        $this-> saldo = $saldo;      
    } 
    
    public function obterSaldo(): string
    {
        return 'Seu saldo atual é: ' . $this->saldo;
    }

    public function depositar($valor)
    {
        $this->saldo += $valor;
        return 'Depósito de R$ ' . $valor . ' realizado com sucesso!';
    }

    public function sacar($valor)
    {
        $this->saldo -= $valor;
        return 'Saque de R$ ' . $valor . ' realizado com sucesso!';
    }
}
$conta = new ContaBanco(
    'Banco do Brasil',
    'Lucilia Seraidarian',
    '0723',
    '50374-1',
    '300.00',
);

echo($conta->obterSaldo()); // mostrará saldo atual
echo PHP_EOL; //dar quebra de linha, pode-se usar também o '\n'
echo $conta->depositar(100.50); //valor de entrada na função de depositar
echo PHP_EOL; //dar quebra de linha, pode-se usar também o '\n'
echo($conta->obterSaldo()); //deverá retornar a soma do saldo + valor de entrada
echo PHP_EOL;
echo $conta->sacar(150.05);
echo PHP_EOL;
echo($conta->obterSaldo()); 

