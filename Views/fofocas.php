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
    <link rel="stylesheet" href="../src/css/fofocas.css?=v1.0">
    <script src="../src/js/modalFofoca.js" defer></script>
    <script src="https://kit.fontawesome.com/14cc984910.js" crossorigin="anonymous" defer></script>
</head>

<body>
    <?php if(isset($_GET['msg'])): ?>
    <script>
    <?php if($_GET['msg'] == 'success'): ?>
    alert("Fofoca publicada com sucesso!");
    <?php else: ?>
    alert("Erro ao publicar fofoca!");
    <?php endif;?>
    </script>
    <?php endif;?>

    <header class="header">
        <nav class="navbar">
            <img src="../assets/logo.png" alt="logo do jornal blue and gold">
            <div class="navlinks">
                <a href="" class="navlink">Fofocas</a>
                <a href="../Views/correio.php" class="navlink" target="_blank">Correio Elegante</a>
                <a href="../index.php" class="navlink">Home</a>
            
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

            <button class="btn-postar-fofoca" id="abrirModal">
                Poste a sua
                <i class="fa-solid fa-arrow-down"></i>
            </button>

            <div id="modalFofoca" class="modal">


                <form method="POST" action="../Actions/salvarFofoca.php" enctype="multipart/form-data"
                    class="formFofocas">

                    <div class="image-modal">
                        <button id="fecharModal"><i class="fa-solid fa-x"></i></button>
                    </div>

                    <div class="campos">

                        <div class="campo titulo-cp">
                            <label for="titulo">Titulo</label>
                            <input type="text" name="campo-titulo" required id="titulo">
                        </div>

                        <div class="campo">
                            <label for="imagem">Imagem</label>
                            <input type="file" name="campo-imagem" required id="imagem">
                        </div>

                        <div class="campo">
                            <label for="mensagem">Texto</label>
                            <textarea name="campo-mensagem" id="mensagem" required></textarea>
                        </div>

                        <button type="submit" class="enviar-fofoca">Enviar sua fofoca</button>
                    </div>
                </form>
            </div>
        </div>
    </header>

    <main class="container-main">

        <h1 class="title-fofocas">
            Confira as fofocas que estão <span class="span-fofocas">bombando</span> no momento
        </h1>

        <!--Container da fofocas onde fica os cards de cada notícia-->
        <section class="container-fofocas">

            <div class="container-cards-fofocas">


                <?php foreach ($fofocas as $f): ?>

                <div class="card">
                    <?php if (!empty($f['imagem'])): ?>
                    <img src="../Public/uploads/<?= htmlspecialchars($f['imagem']) ?>" alt="Imagem da fofoca">

                    <?php endif; ?>

                    <h3><?= htmlspecialchars($f['titulo']) ?></h3>

                    <p><?= htmlspecialchars($f['mensagem']) ?></p>

                    <small>Postado em: <?= $f['criado_em'] ?></small>
                </div>

                <?php endforeach; ?>

            </div>
        </section>
    </main>

    <!--Rodapé da página-->
    <?php 
        require_once __DIR__ .  "/../Components/footer.php";
    ?>

</body>

</html>
