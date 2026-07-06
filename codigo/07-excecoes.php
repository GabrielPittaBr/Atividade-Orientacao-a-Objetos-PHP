<?php
// ============================================================
// 07 - TRATAMENTO DE EXCECOES
// Conceito: EXCECOES sinalizam erros em tempo de execucao.
// Em vez de o programa "quebrar", nos CAPTURAMOS o erro e
// decidimos como reagir, mantendo o programa vivo.
// ============================================================

// Excecao CUSTOMIZADA: basta ESTENDER a classe Exception do PHP.
class VelocidadeInvalidaException extends Exception {}

class Veiculo
{
    private int $velocidade = 0;

    public function __construct(public string $marca) {}

    public function acelerar(int $incremento): void
    {
        // "throw" LANCA uma excecao quando algo invalido acontece.
        if ($incremento <= 0) {
            throw new VelocidadeInvalidaException(
                "Incremento precisa ser positivo (recebido: {$incremento})."
            );
        }
        $this->velocidade += $incremento;
    }

    public function velocidade(): int
    {
        return $this->velocidade;
    }
}

$carro = new Veiculo("Fiat");

// try:     bloco onde um erro PODE acontecer.
// catch:   captura a excecao e evita que o programa quebre.
// finally: SEMPRE executa no final, dando erro ou nao.
try {
    $carro->acelerar(50);
    echo "Acelerou. Velocidade: {$carro->velocidade()} km/h\n";

    $carro->acelerar(-10);                 // isso dispara a excecao
    echo "Esta linha NAO chega a executar.\n";
} catch (VelocidadeInvalidaException $e) {
    echo "Erro capturado: " . $e->getMessage() . "\n";
} finally {
    echo "Bloco finally: sempre roda (ex.: limpeza/fechamento de recursos).\n";
}

echo "\nO programa CONTINUOU normalmente apos o try/catch.\n";
echo "Velocidade final: {$carro->velocidade()} km/h\n";
