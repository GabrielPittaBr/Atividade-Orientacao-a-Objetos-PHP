<?php
// ============================================================
// Classe Recado
// Representa UM recado do mural (um registro do livro de visitas).
// Guarda quem escreveu, o texto e quando foi enviado.
// ============================================================

class Recado
{
    // Construtor com "property promotion" (PHP 8): declara e ja
    // atribui os atributos direto nos parametros.
    public function __construct(
        public string $autor,
        public string $mensagem,
        public string $data
    ) {}

    // Recria um Recado a partir de um array (dados vindos do JSON).
    public static function deArray(array $dados): self
    {
        return new self(
            $dados['autor'],
            $dados['mensagem'],
            $dados['data']
        );
    }

    // Converte o Recado em array simples (para gravar no JSON).
    public function paraArray(): array
    {
        return [
            'autor'    => $this->autor,
            'mensagem' => $this->mensagem,
            'data'     => $this->data,
        ];
    }
}
