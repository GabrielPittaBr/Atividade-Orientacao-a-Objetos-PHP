# Polimorfismo

## O que é
**Polimorfismo** ("muitas formas") é quando objetos de classes diferentes respondem ao
**mesmo método** de maneiras diferentes. Podemos tratar todos como o tipo base e chamar
o mesmo método, deixando cada objeto responder do seu jeito.

## Como o PHP implementa
Uma classe base define o método (via **classe `abstract`** com um método `abstract`, ou
via **`interface`** com `implements`). As classes filhas fazem o **override**: declaram
um método com a mesma assinatura e um corpo próprio. Uma classe **`abstract`** não pode
ser instanciada e um método `abstract` **obriga** as filhas a implementá-lo. Assim, ao
percorrer um array de objetos e chamar `descrever()`, cada um responde conforme sua classe.

## Exemplo
```php
abstract class Veiculo
{
    public function __construct(protected string $marca) {}
    abstract public function descrever(): string;   // filhas SÃO obrigadas a implementar
}

class Carro extends Veiculo
{
    public function descrever(): string { return "Carro da {$this->marca}: 4 rodas"; }
}
class Moto extends Veiculo
{
    public function descrever(): string { return "Moto da {$this->marca}: 2 rodas"; }
}

$veiculos = [new Carro("Fiat"), new Moto("Honda")];
foreach ($veiculos as $v) {
    echo $v->descrever() . "\n";   // mesmo método, respostas diferentes
}
```
