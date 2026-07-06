<?php
// ============================================================
// 02 - ATRIBUTOS (propriedades)
// Conceito: ATRIBUTOS guardam o ESTADO do objeto (seus dados).
// Em PHP tambem sao chamados de "propriedades".
// Aqui o destaque e a VISIBILIDADE: public / protected / private.
// ============================================================

class Veiculo
{
    // Cada atributo tem um MODIFICADOR DE VISIBILIDADE:
    public string    $marca;       // public    -> acessivel de qualquer lugar
    protected int    $rodas;       // protected -> so a propria classe e as filhas
    private float    $velocidade;  // private   -> so DENTRO desta classe

    public function __construct(string $marca, int $rodas)
    {
        // $this-> referencia o PROPRIO objeto e acessa seus atributos.
        $this->marca      = $marca;
        $this->rodas      = $rodas;
        $this->velocidade = 0.0;
    }

    public function acelerar(float $incremento): void
    {
        // Mesmo sendo private, aqui DENTRO da classe podemos alterar.
        $this->velocidade += $incremento;
    }

    // Como 'rodas' e 'velocidade' nao sao public, expomos por um metodo.
    public function estado(): string
    {
        return "Marca: {$this->marca} | Rodas: {$this->rodas} | Velocidade: {$this->velocidade} km/h";
    }
}

$c = new Veiculo("Fiat", 4);
$c->acelerar(30);
$c->acelerar(20);

// public: da para ler DIRETO de fora do objeto.
echo "Atributo public (marca) lido de fora: {$c->marca}\n";

// Estado completo (inclui os atributos protegidos/privados, via metodo).
echo $c->estado() . "\n";

// Prova de que 'private' NAO pode ser acessado de fora da classe:
echo "\nTentando ler o atributo private 'velocidade' de fora...\n";
try {
    echo $c->velocidade;                 // isso dispara um Error
} catch (\Error $e) {
    echo "Bloqueado pelo PHP! " . $e->getMessage() . "\n";
}
