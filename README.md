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

A partir da raiz do projeto, rode um arquivo por vez:

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

## Demonstração final: PHP no backend web (mural de recados)

Além dos 7 conceitos isolados, a pasta [site-demo/](site-demo/) traz um **mini site**
funcional: um mural de recados (livro de visitas) onde o visitante envia nome + mensagem
por um formulário e o recado aparece na lista, persistido em `recados.json`.

**Por que esta demo?** Ela mostra o PHP no seu **uso natural — backend web**: com
pouquíssimo código e **um único comando** (`php -S localhost:8000`) já temos um servidor
recebendo um formulário, processando no servidor e devolvendo HTML pronto. O mesmo em Java
exigiria bem mais configuração (servlet/Spring, build, servidor de aplicação). E, para
manter a coerência com o resto da apresentação, **ainda usamos POO**: as classes `Recado`
(um recado) e `MuralRecados` (carrega, valida, adiciona e salva os recados) — inclusive com
`try/catch` para tratar o envio de nome/mensagem vazios.

Como rodar:

```bash
cd site-demo
php -S localhost:8000
```

Depois abra **http://localhost:8000** no navegador. Não precisa de Apache/XAMPP: o servidor
embutido do PHP já dá conta.

## Estrutura

```
.
  codigo/            # os 7 exemplos executáveis (.php)
  documentacao/      # explicação de cada conceito (.md) — material do professor
  site-demo/         # mini site (mural de recados): PHP no backend web
  GUIA-DO-GRUPO.md   # roteiro interno de apresentação (não entregar)
  README.md          # este arquivo
```
