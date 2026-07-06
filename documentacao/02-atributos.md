# Atributos (propriedades)

## O que é
**Atributos** são as variáveis que pertencem ao objeto e guardam o seu **estado**
(seus dados). Em PHP eles também são chamados de **propriedades**.

## Como o PHP implementa
Declaramos os atributos dentro da classe com um **modificador de visibilidade**:
- **`public`** — pode ser lido/alterado de qualquer lugar;
- **`protected`** — só dentro da própria classe e das classes filhas;
- **`private`** — só dentro da própria classe.

Podemos (opcionalmente) declarar o **tipo** do atributo (ex.: `string`, `int`, `float`).
Dentro dos métodos, acessamos o atributo do próprio objeto com **`$this->nome`**.

## Exemplo
```php
class Veiculo
{
    public string $marca;       // acessível de fora
    protected int $rodas;       // só a classe e as filhas
    private float $velocidade;  // só esta classe

    public function __construct(string $marca, int $rodas)
    {
        $this->marca      = $marca;   // $this-> = "deste objeto"
        $this->rodas      = $rodas;
        $this->velocidade = 0.0;
    }
}

$c = new Veiculo("Fiat", 4);
echo $c->marca;        // Fiat  (public: ok)
echo $c->velocidade;   // Error: Cannot access private property
```
