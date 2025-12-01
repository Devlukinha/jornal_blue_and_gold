<?php

    require_once __DIR__ . "/../Controllers/FofocaController.php";

    $controller = new FofocaController();
    $fofocas = $controller->listarFofocas(); // Pega todas as fofocas do banco
?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fofocas Da Semana - Jornal Blue and Gold</title>
    <link rel="stylesheet" href="../src/css/fofocas.css">
    <script src="https://kit.fontawesome.com/14cc984910.js" crossorigin="anonymous" defer></script>
</head>

<body>
    <header class="header">
        <nav class="navbar">
            <img src="../assets/logo.png" alt="logo do jornal blue and gold">
            <div class="navlinks">
                <a href="" class="navlink">Fofocas</a>
                <a href="" class="navlink">Correio Elegante</a>
                <a href="" class="navlink">Lorem Ipsum</a>
                <a href="" class="navlink">Lorem Ipsum</a>
                <a href="" class="navlink">Lorem Ipsum</a>

                <button class="btn-login">Login</button>
            </div>
        </nav>

        <!--home-->
        <div class="home">
            <div class="container-text">
                <h1 class="title">Fofocas</h1>
                <div class="sub-title">
                    <h3 class="sub-title-1">da</h3>
                    <h1 class="sub-title-2">Semana</h1>
                </div>
            </div>

            <button class="btn-postar-fofoca">
                Poste a sua
                <i class="fa-solid fa-arrow-down"></i>
            </button>
        </div>
    </header>

    <main class="container-main">

        <h1 class="title-fofocas">
            Confira as fofocas que estão <span class="span-fofocas">bombando</span> no momento
        </h1>

        <!--Container da fofocas onde fica os cards de cada notícia-->
        <section class="container-fofocas">
            <div class="container-cards-fofocas">
                <div class="cards-fofocas-1">
                    <?php if ($fofocas && is_array($fofocas) && count($fofocas) > 0): ?>

                    <?php foreach ($fofocas as $f): ?>

                    <div class="card">
                        <?php if (!empty($f['imagem'])): ?>
                        <img src="/jornal_blue_and_gold/Public/uploads/<?= htmlspecialchars($f['imagem']) ?>"
                            alt="Imagem da fofoca">

                        <?php endif; ?>

                        <h3><?= htmlspecialchars($f['titulo']) ?></h3>

                        <p><?= htmlspecialchars($f['mensagem']) ?></p>

                        <small>Por: <?= htmlspecialchars($f['autor']) ?> | <?= $f['criado_em'] ?></small>
                    </div>

                    <?php endforeach; ?>
                    <?php else: ?>
                    <p>Nenhuma fofoca encontrada.</p>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    </main>

    <!--Rodapé da página-->
    <?php 
        include_once - "php/Components/footer.php"
    ?>

</body>

</html>