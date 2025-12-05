<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Usuário</title>
    <link rel="stylesheet" href="../src/css/login.css?v=1.0">
</head>
<?php if (isset($_GET['msg']) && $_GET['msg'] === 'success'): ?>
<script>
    alert("Login realizado com sucesso!");
</script>
<?php endif; ?>

<?php if (isset($_GET['msg']) && $_GET['msg'] === 'error'): ?>
<script>
    alert("Email ou senha incorretos!");
</script>
<?php endif; ?>
<body>
    <div class="container-main">
        <div class="form-cadastro">
            <img src="../assets/logo-2.png" alt="" width="300px">
            <form method="POST" action="../Public/login.php" class="form">

                <label for="email">Email:</label>
                <input type="email" name="campo-email" id="email" required>

                <label for="senha">Senha:</label>
                <input type="password" name="campo-senha" id="senha" required>

                <button type="submit" class="entrar">Entrar</button>
            </form>
            <a href="./cadastroForm.php" class="link">Não tem conta? Cadastre-se</a>
        </div>

        <div class="image-form">

        </div>
    </div>
</body>

</html>
