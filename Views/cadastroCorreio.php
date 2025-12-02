<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do Correio</title>
</head>

<body>
    <form method="POST" action="../Actions/salvarCorreio.php">

        <label for="">Destinatario</label>
        <input type=" text" name="campo-destinatario" required>

        <label for="">Texto</label>
        <textarea name="campo-mensagem" id=""></textarea>

        <button type="submit">Enviar sua correio elegante</button>
    </form>
</body>

</html>