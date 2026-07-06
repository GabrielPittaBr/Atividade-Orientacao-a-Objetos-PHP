# GUIA DO GRUPO — POO em PHP
> **Arquivo interno. NÃO entregar ao professor.** É a nossa "cola" para estudar e saber o que falar em cada slide.

---

## O que é PHP (introdução rápida)
PHP é uma linguagem de programação criada para a **web**. É a linguagem por trás de
sites gigantes como o **WordPress**, a **Wikipedia** e boa parte da internet.
Normalmente ela roda **no servidor** (gera as páginas que o navegador recebe), mas
também pode rodar como **script direto no terminal** (é assim que vamos demonstrar,
sem precisar de site nem de navegador). PHP é uma linguagem **interpretada**: não
precisa compilar antes, é só rodar o arquivo `.php`.

> **Frase de abertura sugerida:** "PHP é uma das linguagens mais usadas no mundo para
> web, e apesar de ser famosa por sites, ela suporta Programação Orientada a Objetos
> completa — é isso que vamos mostrar rodando ao vivo no terminal."

---

## Roteiro por conceito
Para cada conceito: **o que é** (em linguagem simples) + **o que falar** na hora.

### 1. Classes
**O que é:** a classe é o "molde" ou a "planta" de uma casa. Ela descreve como um tipo
de objeto é, mas ainda não é o objeto em si.
**O que falar:** "Aqui definimos a classe `Veiculo` com a palavra-chave `class`. Repare
que ela ainda está quase vazia — é só o molde. Nos próximos exemplos ela ganha dados e
vira objeto de verdade. Vou rodar e mostrar que o PHP reconhece a classe."

### 2. Atributos
**O que é:** são os dados que o objeto guarda (a marca, a cor, a velocidade). Também
chamados de propriedades.
**O que falar:** "Cada `Veiculo` tem atributos como marca e velocidade. O detalhe
importante é a **visibilidade**: `public` qualquer um acessa, `private` só a própria
classe. Vou provar rodando: dá pra ler a marca de fora, mas quando eu tento ler o
atributo `private` de fora, o PHP bloqueia."

### 3. Instâncias
**O que é:** se a classe é o molde, a instância é o objeto pronto, criado a partir do
molde. De um molde saem vários objetos, cada um com seus dados.
**O que falar:** "Com `new` eu criei três veículos. Acelerei só o primeiro e o segundo.
Repare na saída: cada objeto tem seu próprio estado — o terceiro continua a zero.
Ou seja, são independentes, mesmo vindo da mesma classe."

### 4. Construtores
**O que é:** é um método que roda automaticamente quando o objeto nasce, para já deixar
ele preenchido.
**O que falar:** "O construtor em PHP se chama `__construct`. Mostro as duas formas: a
tradicional, que declara e atribui atributo por atributo, e a moderna do PHP 8, o
**property promotion**, que faz tudo isso numa linha só. Mesmo resultado, muito menos
código."

### 5. Herança
**O que é:** uma classe pode "herdar" de outra, aproveitando o que ela já tem. Carro e
Moto são Veículos, então herdam de `Veiculo`.
**O que falar:** "Uso `extends` para `Carro` e `Moto` herdarem de `Veiculo`. O
`parent::__construct` reaproveita o construtor da classe mãe. Na saída, repare que a
Moto nem reescreveu o método `descrever()` — ela usou o que herdou. Isso é reuso de
código."

### 6. Polimorfismo
**O que é:** "muitas formas". O mesmo comando (`descrever()`) se comporta diferente
dependendo do objeto.
**O que falar:** "Aqui `Veiculo` é uma classe **abstrata**: ela obriga toda filha a ter
o método `descrever()`. Coloquei carros e motos no mesmo array e chamo o **mesmo**
método para todos, num único laço. A mágica: cada um responde do seu jeito. Esse é o
coração do polimorfismo."

### 7. Tratamento de exceções
**O que é:** é como o programa lida com erros sem "quebrar". Ele avisa que deu problema
e a gente decide o que fazer.
**O que falar:** "Se alguém tenta acelerar com valor negativo, eu **lanço** uma exceção
com `throw`. O `try/catch` captura o erro e o programa continua vivo — mostro que ele
segue rodando depois. E criei uma exceção customizada, a
`VelocidadeInvalidaException`, só estendendo a classe `Exception`."

---

## PHP vs Java (o que vale citar para a banca)
Muita gente da banca conhece Java. Estas comparações mostram que dominamos o assunto:

- **Acesso a atributo/método:** em PHP usamos **`$this->atributo`** (seta), enquanto em
  Java é o ponto (`this.atributo`). Variáveis em PHP sempre começam com **`$`**.
- **Criar objeto:** em PHP o **`new`** não exige declarar o tipo da variável
  (`$c = new Carro()`), porque o PHP tem **tipagem dinâmica**. Os tipos (em atributos,
  parâmetros e retornos) são **opcionais**, mas a gente usou para deixar mais parecido
  com Java e mais seguro.
- **Construtor:** em Java o construtor tem o mesmo nome da classe; em PHP é sempre
  **`__construct`**. E o PHP 8 tem o **property promotion**, que declara e atribui os
  atributos direto no construtor — Java não tem isso (só a partir de records, que são
  outra coisa).
- **Herança:** igual a Java, PHP só tem **herança simples** (uma classe estende uma só).
  Interfaces usam **`implements`** e classes abstratas usam **`abstract`**, exatamente
  como em Java.
- **ATENÇÃO — sobrecarga:** Java permite **sobrecarga de método** (vários métodos com o
  mesmo nome e assinaturas diferentes). **PHP NÃO tem** sobrecarga por assinatura desse
  jeito — não dá para ter dois métodos `descrever()` com parâmetros diferentes na mesma
  classe. Vale citar essa ausência, porque é uma diferença real e comum de cair em prova.
- **Exceções:** são bem **parecidas com Java** — mesmo esquema de
  **`try` / `catch` / `finally`** e `throw`. Criar exceção própria é só estender
  `Exception`.

---

## Como demonstrar ao vivo (lembrete)
No terminal, dentro da pasta `php-poo`, rode um por vez enquanto explica cada slide:

```bash
php codigo/01-classes.php
php codigo/02-atributos.php
php codigo/03-instancias.php
php codigo/04-construtores.php
php codigo/05-heranca.php
php codigo/06-polimorfismo.php
php codigo/07-excecoes.php
```

**Dicas de apresentação:**
- Deixe o terminal com fonte grande antes de começar.
- Rode o arquivo **depois** de explicar o conceito, para a saída "fechar" a ideia.
- Se o PHP falhar na hora (não instalado, etc.), abra o **3v4l.org**, cole o código e
  rode online — plano B garantido.
- Cada arquivo é independente: se um der problema, pule para o próximo sem travar.
