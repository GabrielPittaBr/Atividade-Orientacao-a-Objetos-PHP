# Classes

## O que é
Uma **classe** é o modelo (o "molde" ou planta) que define como um tipo de objeto
será: quais dados ele guarda e o que ele sabe fazer. A partir de uma classe podemos
criar vários objetos.

## Como o PHP implementa
Em PHP usamos a palavra-chave **`class`** seguida do nome (por convenção começando
com letra maiúscula). O corpo da classe fica entre chaves `{ }`. Dentro dela declaramos
métodos com **`function`** e definimos o tipo de retorno com `: tipo` (ex.: `: string`).
Uma função utilitária, `class_exists('Nome')`, confirma se a classe foi definida.

## Exemplo
```php
// A palavra-chave "class" define o molde.
class Veiculo
{
    public function buzinar(): string
    {
        return "Bi-bi!";
    }
}

echo class_exists('Veiculo') ? "sim\n" : "nao\n"; // sim
$v = new Veiculo();
echo $v->buzinar();                               // Bi-bi!
```
