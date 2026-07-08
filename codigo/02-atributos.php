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
    public string    $marca; // public    -> acessivel de qualquer lugar
    protected int    $rodas; // protected -> so a propria classe e as filhas
    private float    $velocidade; // private   -> so DENTRO desta classe

// Pro construtuor, em vez de usar o nome da classe como no Java, usamos o __construct().    
    public function __construct(string $marca, int $rodas)
    {
// $this-> assim como no Java, referencia o PROPRIO objeto e acessa seus atributos.        
        $this->marca = $marca;
        $this->rodas = $rodas;
        $this->velocidade = 0.0;
    }

    public function acelerar(float $incremento): void
    {
// Mesmo sendo private, aqui DENTRO da classe podemos alterar.        
// Isso seria basicamente um setter.        
        $this->velocidade += $incremento;
    }

// Como 'rodas' e 'velocidade' nao sao public, expomos por um metodo.    
    public function estado(): string
    {
        return "Marca: {$this->marca} | Rodas: {$this->rodas} | Velocidade: {$this->velocidade} km/h";
    }
}

$carro1 = new Veiculo("Fiat", 4);
$carro1->acelerar(30);
$carro1->acelerar(20);

// public: da para ler DIRETO de fora do objeto.
echo "Atributo public (marca) lido de fora: {$carro1->marca}\n";

// Estado completo (inclui os atributos protegidos/privados, via metodo).
echo $carro1->estado() . "\n";

// Prova de que 'private' NAO pode ser acessado de fora da classe:
echo "\nTentando ler o atributo private 'velocidade' de fora...\n";
try {
    echo $carro1->velocidade; // isso dispara um Error
} catch (\Error $erro) {
    echo "Bloqueado pelo PHP! {$erro->getMessage()}\n";
}
