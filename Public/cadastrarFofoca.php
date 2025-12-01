<?php 

    session_start(); // assume que o login armazena $_SESSION['user_id']

    if (!isset($_SESSION['user_id'])) {
    die("Você precisa estar logado para publicar uma fofoca.");
    }

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar fofoca</title>
</head>

<body>
    <form method="POST" action="../Actions/salvarFofoca.php" enctype="multipart/form-data">

        <label for="">Titulo</label>
        <input type="text" name="campo-titulo" required>

        <label for="">Texto</label>
        <input type="text" name="campo-mensagem" required>

        <label for="">Imagem</label>
        <input type="file" name="campo-imagem" required>

        <button type="submit">Enviar sua fofoca</button>
    </form>
</body>

</html>