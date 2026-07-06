<?php
// ============================================================
// 01 - CLASSES
// Conceito: uma CLASSE e o "molde" (o projeto/planta) a partir
// do qual criamos objetos. Aqui definimos o minimo possivel:
// so a estrutura. Atributos e instancias vem nos proximos arquivos.
// ============================================================

// A palavra-chave para definir uma classe em PHP e "class".
// Por convencao, o nome da classe comeca com letra maiuscula (PascalCase).
class Veiculo
{
    // Por enquanto a classe esta quase "vazia": sem atributos e sem
    // construtor. Ela so tem UM comportamento (metodo) simples,
    // apenas para provarmos que a classe existe e funciona.
    public function buzinar(): string
    {
        return "Bi-bi!";
    }
}

// ---- Prova de que a classe (o molde) existe ----

// class_exists() confirma que o PHP registrou a definicao da classe.
echo "A classe 'Veiculo' foi definida? ";
echo class_exists('Veiculo') ? "sim\n" : "nao\n";

// Criamos um objeto so para mostrar o TIPO dele.
// (o conceito de "instancia" e detalhado no arquivo 03)
$v = new Veiculo();
echo "Tipo do objeto criado: " . get_class($v) . "\n";
echo "Chamando um metodo da classe: " . $v->buzinar() . "\n";
