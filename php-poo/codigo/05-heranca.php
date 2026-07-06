<?php
// ============================================================
// 05 - HERANCA
// Conceito: HERANCA permite que uma classe (filha) reaproveite
// atributos e metodos de outra (mae), adicionando so o que for
// especifico. Assim evitamos repetir codigo.
// ============================================================

class Veiculo
{
    public function __construct(
        public string $marca,
        public int    $rodas
    ) {}

    public function descrever(): string
    {
        return "{$this->marca} com {$this->rodas} rodas";
    }
}

// "extends" indica que Carro HERDA tudo de Veiculo.
class Carro extends Veiculo
{
    public function __construct(string $marca, public int $portas)
    {
        // parent::__construct() chama o construtor da classe MAE,
        // reaproveitando a inicializacao de 'marca' e 'rodas'.
        parent::__construct($marca, 4);
    }

    // Sobrescrevemos descrever(): reaproveitamos o texto da mae
    // (com parent::) e acrescentamos o que e especifico do Carro.
    public function descrever(): string
    {
        return parent::descrever() . " e {$this->portas} portas";
    }
}

class Moto extends Veiculo
{
    public function __construct(string $marca)
    {
        parent::__construct($marca, 2);
    }
    // A Moto NAO redefine descrever(): vai usar o metodo herdado de Veiculo.
}

$carro = new Carro("Fiat", 4);
$moto  = new Moto("Honda");

// 'marca' e 'rodas' vieram da classe mae (Veiculo) sem reescrever!
echo "Carro: " . $carro->descrever() . "\n";
echo "Moto:  " . $moto->descrever()  . "\n";
echo "\nA Moto nao reescreveu descrever(): usou o metodo herdado de Veiculo.\n";
