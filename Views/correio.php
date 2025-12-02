<?php 
    
    require_once __DIR__ . "/../Controllers/CorreioController.php";
        $controller = new CorreioController();
        $mensagens = $controller->listar();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Correio Elegante</title>
    <link rel="stylesheet" href="../src/css/correio.css?v=1.0">
    <script src="../src/js/modalCorreio.js" defer></script>
    <script src="https://kit.fontawesome.com/14cc984910.js" crossorigin="anonymous" defer></script>
</head>

<body>
    <?php if(isset($_GET['msg'])): ?>
    <script>
    <?php if($_GET['msg'] == 'success'): ?>
    alert("Mensagem enviada com sucesso!");
    <?php else: ?>
    alert("Erro ao publicar mensagem!");
    <?php endif;?>
    </script>
    <?php endif;?>

    <header class="header">
        <nav class="navbar">
            <img src="../assets/logo-2.png" alt="logo do jornal blue and gold">
            <div class="navlinks">
                <a href="../Views/fofocas.php" class="navlink" target="_blank">Fofocas</a>
                <a href="" class="navlink">Correio Elegante</a>
                <a href="" class="navlink">Lorem Ipsum</a>
                <a href="" class="navlink">Lorem Ipsum</a>
                <a href="" class="navlink">Lorem Ipsum</a>

                <button class="btn-login">Login</button>
            </div>
        </nav>
    </header>


    <div class="wrapper">
        <div class="lid one"></div>
        <div class="lid two"></div>
        <div class="envelope">
            <h1>Correio</h1>
            <h2>Elegante</h2>
            <img src="../assets/pomba.png" alt="" class="img-pomba">
        </div>

        <div class="letter">
            <p>
                Um <span class="roxo">bilhete</span> pode virar
                <span class="roxo">história</span>.<br>
                Deixe o <span class="roxo">seu aqui</span>, com amor.
            </p>
        </div>
    </div>


    <main class="container-main">

        <h1 class="title-correio">
            Confira as declarações mais <span class="h1-span">apaixonantes</span> da semana
        </h1>

        <section class="container-correio">

            <div class="container-cards-correio">

                <?php foreach ($mensagens as $m): ?>
                <div class="card">

                    <h4>Para: <?= htmlspecialchars($m['destinatario']) ?></h4>
                    <p><?= htmlspecialchars($m['mensagem']) ?></p>
                    <h4>De: <?= htmlspecialchars($m['remetente']) ?></h4>
                    <small>Enviado em: <?= $m['criado_em'] ?></small>
                </div>
                <?php endforeach; ?>

            </div>

            <button class="btn-postar-correio" id="abrirModal">
                Escreva aqui sua mensagem de amor
            </button>
        </section>

        <div class="modal" id="modalCorreio">
            <form method="POST" action="../Actions/salvarCorreio.php" class="formCorreio">

                <div class="image-modal">
                    <button id="fecharModal"><i class="fa-solid fa-x"></i></button>
                </div>

                <div class="campos">
                    <div class="campo">
                        <label for="">Destinatario</label>
                        <input type=" text" name="campo-destinatario" required>
                    </div>

                    <div class="campo">
                        <label for="">Texto</label>
                        <textarea name="campo-mensagem" id=""></textarea>
                    </div>
                </div>

                <button type="submit" class="enviar-correio">Enviar mensagem</button>
            </form>
        </div>
    </main>


    <!--Rodapé da página-->

</body>

</html>