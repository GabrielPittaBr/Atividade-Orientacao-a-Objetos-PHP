# Construtores

## O que é
O **construtor** é um método especial que roda **automaticamente** no momento em que o
objeto é criado (`new`). Serve para inicializar o objeto já com um estado válido, ou
seja, com seus atributos preenchidos.

## Como o PHP implementa
Em PHP o construtor tem sempre o nome **`__construct`** (dois underscores). Ele recebe
os parâmetros e atribui aos atributos com `$this->`.

O PHP 8 traz o **Constructor Property Promotion**: ao colocar um modificador de
visibilidade (`public`/`private`/`protected`) direto no parâmetro do construtor, o PHP
já **cria a propriedade e faz a atribuição** sozinho — eliminando o código repetitivo.

## Exemplo
```php
// Forma tradicional
class Veiculo
{
    public string $marca;
    public string $modelo;
    public function __construct(string $marca, string $modelo)
    {
        $this->marca  = $marca;
        $this->modelo = $modelo;
    }
}

// Forma moderna (PHP 8): property promotion
class Carro
{
    public function __construct(
        public string $marca,
        public string $modelo
    ) {}   // atributos declarados e atribuídos automaticamente
}
```
