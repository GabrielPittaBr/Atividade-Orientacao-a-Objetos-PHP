# Herança

## O que é
**Herança** é quando uma classe (filha) reaproveita os atributos e métodos de outra
(mãe), podendo acrescentar o que for específico. Isso evita repetir código e cria uma
relação do tipo "é um" (um Carro **é um** Veículo).

## Como o PHP implementa
Usamos a palavra-chave **`extends`**: `class Carro extends Veiculo`. A filha passa a ter
tudo que é `public`/`protected` da mãe. Para reaproveitar o construtor (ou qualquer
método) da mãe, chamamos **`parent::__construct(...)`** ou `parent::metodo()`.
O PHP só permite **herança simples** (uma classe estende no máximo uma outra).

## Exemplo
```php
class Veiculo
{
    public function __construct(public string $marca, public int $rodas) {}
    public function descrever(): string
    {
        return "{$this->marca} com {$this->rodas} rodas";
    }
}

class Carro extends Veiculo            // Carro HERDA de Veiculo
{
    public function __construct(string $marca, public int $portas)
    {
        parent::__construct($marca, 4);  // reusa o construtor da mãe
    }
    public function descrever(): string
    {
        return parent::descrever() . " e {$this->portas} portas";
    }
}

echo (new Carro("Fiat", 4))->descrever(); // Fiat com 4 rodas e 4 portas
```
