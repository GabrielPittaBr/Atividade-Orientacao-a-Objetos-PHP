<?php
// ============================================================
// 01 - CLASSES
// Conceito: uma CLASSE e o "molde" (o projeto/planta) a partir
// do qual criamos objetos. Aqui definimos o minimo possivel:
// so a estrutura. Atributos e instancias vem nos proximos arquivos.
// ============================================================

// A palavra-chave para definir uma classe em PHP e "class".
// Por convencao, o nome da classe comeca com letra maiuscula (PascalCase), assim como estavamos aprendendo no Java.
class Veiculo
{
    // Por enquanto a classe esta quase "vazia": sem atributos e sem
    // construtor. Ela so tem UM comportamento (metodo) simples,
    // apenas para provarmos que a classe existe e funciona.
    public function buzinar(): string
    {
        return "bi biiiiiiiiiiiiiiiiiiiiiiiiiiiiiii";
    }
}

// class_exists() confirma que o PHP registrou a definicao da classe.
echo "A classe 'Veiculo' foi definida? ";
echo class_exists('Veiculo') ? "sim\n" : "nao\n";

// Criamos um objeto so para mostrar o TIPO dele.
// Para criar uma variavel se usa o sinal de $ seguido do nome da variavel.
// Como estamos criando uma instancia da classe Veiculo, usamos new Veiculo e o PHP já sabe que o tipo da variavel $v é Veiculo.
$v = new Veiculo();
echo "Tipo do objeto criado: " . get_class($v) . "\n";

// Para chamar o metodo buzinar() dessa instancia que criamos, usamos essa  seta (->) pra acessar o metodo. 
// A seta é usada para acessar atributos e metodos de objetos.
echo "Chamando um metodo da classe: {$v->buzinar()}\n";
