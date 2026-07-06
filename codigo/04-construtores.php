<?php
// ============================================================
// 04 - CONSTRUTORES
// Conceito: o CONSTRUTOR e um metodo especial chamado
// AUTOMATICAMENTE quando usamos "new". Serve para ja criar o
// objeto com um estado valido (com seus dados preenchidos).
// ============================================================

// ---- Forma TRADICIONAL ----
// Passo a passo: 1) declara os atributos, 2) recebe os parametros,
// 3) atribui um por um com $this->.
class Veiculo
{
    public string $marca;
    public string $modelo;
    public int    $ano;

    // Em PHP o construtor SEMPRE se chama __construct (dois underscores).
    public function __construct(string $marca, string $modelo, int $ano)
    {
        $this->marca  = $marca;
        $this->modelo = $modelo;
        $this->ano    = $ano;
    }

    public function ficha(): string
    {
        return "{$this->marca} {$this->modelo} ({$this->ano})";
    }
}

// ---- Forma MODERNA (PHP 8): Constructor Property Promotion ----
// Declaramos os atributos DIRETO nos parametros do construtor.
// O PHP cria a propriedade e ja faz o "$this->x = x" sozinho.
// (Aqui isolamos so o construtor; a heranca fica no arquivo 05.)
class Carro
{
    public function __construct(
        public string $marca,
        public string $modelo,
        public int    $ano
    ) {}

    public function ficha(): string
    {
        return "{$this->marca} {$this->modelo} ({$this->ano})";
    }
}

$v = new Veiculo("Fiat",  "Uno",   2010);
$c = new Carro(  "Honda", "Civic", 2022);

echo "Construtor tradicional   -> " . $v->ficha() . "\n";
echo "Construtor com promotion -> " . $c->ficha() . "\n";
echo "\nAs duas formas produzem o MESMO resultado, mas a tradicional\n";
echo "gasta varias linhas so para declarar e atribuir os atributos.\n";
