<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do Usuário</title>
</head>

<body>
    <div class="container-main">
        <div class="form-cadastro">
            <form method="POST" action="../Public/cadastro.php">
                <label for="nome">Nome:</label>
                <input type="text" name="campo-nome" id="nome" required>

                <label for="email">Email:</label>
                <input type="email" name="campo-email" id="eamil" required>

                <label for="senha">Senha:</label>
                <input type="password" name="campo-senha" id="senha" required>

                <button type="submit">Cadastrar</button>
            </form>
            <a href="./loginForm.php">Já tem conta? Faça login</a>
        </div>

        <div class="image-form">

        </div>
    </div>
</body>

</html>