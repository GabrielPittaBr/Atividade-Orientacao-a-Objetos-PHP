<?php
// ============================================================
// index.php — a pagina do mural (formulario + lista de recados)
// Tudo e processado NO SERVIDOR pelo PHP: recebe o formulario,
// cria o objeto, salva no arquivo e devolve o HTML pronto.
// ============================================================

require_once __DIR__ . '/MuralRecados.php';

// Cria o mural apontando para o arquivo de persistencia.
$mural = new MuralRecados(__DIR__ . '/recados.json');
$erro  = null;

// Se a requisicao for POST, o formulario foi enviado.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        // $_POST traz os campos digitados no formulario.
        $mural->adicionar($_POST['autor'] ?? '', $_POST['mensagem'] ?? '');

        // Padrao "PRG": redireciona apos salvar, para que recarregar
        // a pagina NAO reenvie o mesmo recado.
        header('Location: index.php');
        exit;
    } catch (RecadoInvalidoException $e) {
        // Recado invalido: guarda a mensagem para mostrar na tela.
        $erro = $e->getMessage();
    }
}

$recados = $mural->todos();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mural de Recados — PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Mural de Recados</h1>
        <p class="sub">Deixe seu recado. Feito em PHP puro, sem banco de dados.</p>

        <?php if ($erro !== null): ?>
            <!-- Mensagem de erro amigavel, vinda do try/catch -->
            <p class="erro"><?= htmlspecialchars($erro) ?></p>
        <?php endif; ?>

        <form method="post" action="index.php" class="formulario">
            <input type="text" name="autor" placeholder="Seu nome"
                   value="<?= htmlspecialchars($_POST['autor'] ?? '') ?>">
            <textarea name="mensagem" rows="3"
                      placeholder="Sua mensagem"><?= htmlspecialchars($_POST['mensagem'] ?? '') ?></textarea>
            <button type="submit">Enviar recado</button>
        </form>

        <section class="lista">
            <?php if (empty($recados)): ?>
                <p class="vazio">Ainda nao ha recados. Seja o primeiro!</p>
            <?php else: ?>
                <?php foreach ($recados as $r): ?>
                    <!-- htmlspecialchars protege contra HTML malicioso -->
                    <article class="recado">
                        <header>
                            <strong><?= htmlspecialchars($r->autor) ?></strong>
                            <span class="data"><?= htmlspecialchars($r->data) ?></span>
                        </header>
                        <p><?= nl2br(htmlspecialchars($r->mensagem)) ?></p>
                    </article>
                <?php endforeach; ?>
            <?php endif; ?>
        </section>
    </main>
</body>
</html>
