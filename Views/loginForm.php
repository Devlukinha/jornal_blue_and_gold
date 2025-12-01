<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Usuário</title>
</head>

<body>
    <div class="container-main">
        <div class="form-cadastro">
            <form method="POST" action="../Public/login.php">
                <label for="email">Email:</label>
                <input type="email" name="campo-email" id="eamil" required>

                <label for="senha">Senha:</label>
                <input type="password" name="campo-senha" id="senha" required>

                <button type="submit">Entrar</button>
            </form>
            <a href="./cadastroForm.php">Não tem conta? Cadastre-se</a>
        </div>

        <div class="image-form">

        </div>
    </div>
</body>

</html>