<?php
// ============================================================
// 03 - INSTANCIAS (objetos)
// Conceito: uma INSTANCIA e um objeto concreto criado a partir
// da classe. Da mesma classe (molde) criamos varios objetos, e
// CADA UM tem o seu PROPRIO estado, independente dos demais.
// ============================================================

class Veiculo
{
    // Usamos o construtor moderno do PHP 8 (detalhado no arquivo 04).
    public function __construct(
        public string $marca,
        public string $cor,
        public int    $velocidade = 0
    ) {}

    public function acelerar(int $incremento): void
    {
        $this->velocidade += $incremento;
    }

    public function estado(): string
    {
        return "{$this->marca} ({$this->cor}) a {$this->velocidade} km/h";
    }
}

// A palavra-chave "new" cria uma INSTANCIA (um objeto) da classe.
$v1 = new Veiculo("Fiat",  "vermelho");
$v2 = new Veiculo("Honda", "preto");
$v3 = new Veiculo("Ford",  "branco");

// Cada objeto e independente: mexer em um NAO afeta os outros.
$v1->acelerar(80);
$v2->acelerar(40);
// $v3 continua parado

echo "Objeto 1: " . $v1->estado() . "\n";
echo "Objeto 2: " . $v2->estado() . "\n";
echo "Objeto 3: " . $v3->estado() . "\n";

// Prova de que sao objetos DIFERENTES na memoria:
echo "\nv1 e v2 sao o mesmo objeto? " . ($v1 === $v2 ? "sim" : "nao") . "\n";
echo "Cada instancia guardou seu proprio estado.\n";
