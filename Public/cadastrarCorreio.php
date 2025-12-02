<?php 
    
    
    session_start(); // assume que o login armazena $_SESSION['user_id']

    if (!isset($_SESSION['user_id'])) {
        die("Você precisa estar logado para enviar seu correio elegante.");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do Correio</title>
</head>

<body>
    <div class="container-main">
        <div class="form-cadastro">
            <form method="POST" action="../Actions/salvarCorreio.php">
                <label for="nome">Destinatário:</label>
                <input type="text" name="campo-destinatario" id="destina" required>

                <label for="mensagem">Sua mensagem:
                    <textarea name="campo-mensagem" id="mensagem" required></textarea>

                    <button type="submit">Cadastrar</button>
            </form>

        </div>

        <div class="image-form">

        </div>
    </div>
</body>

</html>