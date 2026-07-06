# Tratamento de Exceções

## O que é
**Exceções** são o mecanismo para lidar com **erros em tempo de execução** sem o
programa simplesmente "quebrar". Quando algo dá errado, o código **lança** uma exceção;
outra parte do código a **captura** e decide como reagir.

## Como o PHP implementa
- **`throw new Exception("mensagem")`** lança a exceção;
- **`try { ... }`** delimita o trecho onde o erro pode ocorrer;
- **`catch (Tipo $e) { ... }`** captura a exceção; `$e->getMessage()` traz a mensagem;
- **`finally { ... }`** roda sempre no fim, com erro ou sem erro.

Para criar uma **exceção customizada**, basta uma classe que **`extends Exception`**.
O modelo é bem parecido com o de Java.

## Exemplo
```php
class VelocidadeInvalidaException extends Exception {}  // exceção customizada

function acelerar(int $inc): void {
    if ($inc <= 0) {
        throw new VelocidadeInvalidaException("Incremento precisa ser positivo.");
    }
}

try {
    acelerar(-10);                       // dispara a exceção
} catch (VelocidadeInvalidaException $e) {
    echo "Erro capturado: " . $e->getMessage() . "\n";
} finally {
    echo "finally: sempre executa.\n";
}
// O programa continua normalmente depois do try/catch.
```
