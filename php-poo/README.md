# POO em PHP — Exemplos para apresentação

Projeto de demonstração dos **7 conceitos de Programação Orientada a Objetos** em PHP,
todos usando o mesmo domínio: uma classe base `Veiculo` e as subclasses `Carro` e `Moto`.

Cada exemplo é **autossuficiente**: roda sozinho no terminal com o PHP CLI, sem servidor
web, sem XAMPP e sem navegador.

## Conceitos

| # | Conceito | Arquivo de código | Documentação |
|---|----------|-------------------|--------------|
| 01 | Classes                | [codigo/01-classes.php](codigo/01-classes.php)         | [documentacao/01-classes.md](documentacao/01-classes.md) |
| 02 | Atributos              | [codigo/02-atributos.php](codigo/02-atributos.php)     | [documentacao/02-atributos.md](documentacao/02-atributos.md) |
| 03 | Instâncias             | [codigo/03-instancias.php](codigo/03-instancias.php)   | [documentacao/03-instancias.md](documentacao/03-instancias.md) |
| 04 | Construtores           | [codigo/04-construtores.php](codigo/04-construtores.php) | [documentacao/04-construtores.md](documentacao/04-construtores.md) |
| 05 | Herança                | [codigo/05-heranca.php](codigo/05-heranca.php)         | [documentacao/05-heranca.md](documentacao/05-heranca.md) |
| 06 | Polimorfismo           | [codigo/06-polimorfismo.php](codigo/06-polimorfismo.php) | [documentacao/06-polimorfismo.md](documentacao/06-polimorfismo.md) |
| 07 | Tratamento de exceções | [codigo/07-excecoes.php](codigo/07-excecoes.php)       | [documentacao/07-excecoes.md](documentacao/07-excecoes.md) |

## Pré-requisito: instalar o PHP CLI

Você só precisa do **PHP de linha de comando** (não precisa de Apache/servidor).

- **Linux (Debian/Ubuntu):**
  ```bash
  sudo apt update
  sudo apt install php-cli
  ```
- **Windows:** baixe em [windows.php.net/download](https://windows.php.net/download/)
  (versão *Thread Safe* ou *Non Thread Safe*), extraia (ex.: `C:\php`) e adicione essa
  pasta ao `PATH`. Alternativas prontas: XAMPP ou Laragon (só use o `php.exe` deles).
- **macOS:** `brew install php`

Confirme a instalação (precisa ser PHP 8 ou superior):
```bash
php --version
```

## Como rodar cada exemplo

A partir da pasta `php-poo`, rode um arquivo por vez:

```bash
php codigo/01-classes.php
php codigo/02-atributos.php
php codigo/03-instancias.php
php codigo/04-construtores.php
php codigo/05-heranca.php
php codigo/06-polimorfismo.php
php codigo/07-excecoes.php
```

Cada arquivo imprime na tela uma saída que **prova** o conceito.

## Alternativa online (plano B)

Se não der para instalar o PHP na hora da apresentação, use o **[3v4l.org](https://3v4l.org/)**:
cole o conteúdo de qualquer arquivo `.php`, clique em **Run** e o site executa em várias
versões do PHP ao mesmo tempo. Ótimo para não travar a demonstração.

## Estrutura

```
php-poo/
  codigo/            # os 7 exemplos executáveis (.php)
  documentacao/      # explicação de cada conceito (.md) — material do professor
  GUIA-DO-GRUPO.md   # roteiro interno de apresentação (não entregar)
  README.md          # este arquivo
```
