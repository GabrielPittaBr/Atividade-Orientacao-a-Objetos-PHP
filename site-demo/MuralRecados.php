<?php
// ============================================================
// Classe MuralRecados
// Responsavel por CARREGAR os recados do arquivo, ADICIONAR
// novos (validando) e SALVAR de volta no arquivo JSON.
// (Sem banco de dados: a persistencia e um arquivo simples.)
// ============================================================

require_once __DIR__ . '/Recado.php';

// Excecao customizada (mesma ideia do exemplo 07 de excecoes):
// usada quando o visitante tenta enviar um recado invalido.
class RecadoInvalidoException extends Exception {}

class MuralRecados
{
    /** @var Recado[] */
    private array $recados = [];

    // Recebe o caminho do arquivo JSON e ja carrega o que existe.
    public function __construct(private string $arquivo)
    {
        $this->carregar();
    }

    // Le o arquivo JSON e reconstroi os objetos Recado.
    private function carregar(): void
    {
        if (!file_exists($this->arquivo)) {
            return; // ainda nao ha arquivo: mural comeca vazio
        }

        $conteudo = file_get_contents($this->arquivo);
        $lista    = json_decode($conteudo, true) ?? [];

        foreach ($lista as $item) {
            $this->recados[] = Recado::deArray($item);
        }
    }

    // Adiciona um novo recado depois de VALIDAR nome e mensagem.
    public function adicionar(string $autor, string $mensagem): void
    {
        $autor    = trim($autor);
        $mensagem = trim($mensagem);

        // Se algo estiver vazio, LANCA a excecao (try/catch no index.php).
        if ($autor === '' || $mensagem === '') {
            throw new RecadoInvalidoException(
                'Preencha o nome e a mensagem antes de enviar.'
            );
        }

        $this->recados[] = new Recado($autor, $mensagem, date('d/m/Y H:i'));
        $this->salvar();
    }

    // Grava TODOS os recados de volta no arquivo JSON.
    private function salvar(): void
    {
        // Transforma cada objeto Recado em array antes de virar JSON.
        $lista = array_map(fn(Recado $r) => $r->paraArray(), $this->recados);

        file_put_contents(
            $this->arquivo,
            json_encode($lista, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)
        );
    }

    // Devolve os recados do mais NOVO para o mais antigo.
    /** @return Recado[] */
    public function todos(): array
    {
        return array_reverse($this->recados);
    }
}
