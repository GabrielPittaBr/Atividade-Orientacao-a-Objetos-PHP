# Instâncias (objetos)

## O que é
Uma **instância** é um objeto concreto criado a partir de uma classe. A classe é o
molde; a instância é o produto. Da mesma classe podemos criar vários objetos, e cada
um tem o **seu próprio estado**, independente dos demais.

## Como o PHP implementa
Usamos a palavra-chave **`new`** seguida do nome da classe e `()` para criar a
instância: `new Veiculo(...)`. O resultado é guardado numa variável. Cada `new` gera
um objeto **distinto** na memória — o operador `===` mostra que dois objetos diferentes
não são iguais mesmo tendo dados parecidos.

## Exemplo
```php
$v1 = new Veiculo("Fiat",  "vermelho");
$v2 = new Veiculo("Honda", "preto");

$v1->acelerar(80);   // mexe só no v1
$v2->acelerar(40);   // mexe só no v2

echo $v1->estado();          // Fiat (vermelho) a 80 km/h
echo $v2->estado();          // Honda (preto) a 40 km/h
echo ($v1 === $v2) ? "sim" : "nao";  // nao (objetos diferentes)
```
