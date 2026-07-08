<?php
// ============================================================
// 06 - POLIMORFISMO
// Conceito: objetos de tipos diferentes respondem ao MESMO
// metodo de formas diferentes. Chamamos o mesmo "descrever()"
// e cada classe responde do SEU jeito.
// ============================================================

// Classe ABSTRATA: serve de contrato/base comum e NAO pode ser
// instanciada diretamente (nao existe "new Veiculo()" aqui).
abstract class Veiculo
{
    public function __construct(protected string $marca) {}

    // Metodo ABSTRATO: nao tem corpo. Obriga TODA classe filha
    // a implementar o seu proprio descrever().
    abstract public function descrever(): string;
}

// (Alternativa: em vez de classe abstrata, poderiamos usar uma
//  interface com "implements". A ideia do polimorfismo e a mesma.)

class Carro extends Veiculo
{
    public function descrever(): string
    {
        return "Carro da {$this->marca}: 4 rodas, anda no asfalto.";
    }
}

class Moto extends Veiculo
{
    public function descrever(): string
    {
        return "Moto da {$this->marca}: 2 rodas, desvia do transito.";
    }
}

// Um array tratado como "lista de Veiculo", mas com objetos de tipos diferentes.
$veiculos = [
    new Carro("Fiat"),
    new Moto("Honda"),
    new Carro("Ford"),
];

// O MESMO laco chama o MESMO metodo descrever() em cada objeto...
// ...mas cada um responde conforme a SUA classe. Isso e o polimorfismo.
echo "Percorrendo a lista de veiculos e chamando descrever() em cada um:\n\n";

foreach ($veiculos as $v) {
    echo "- " . $v->descrever() . "\n";
}
