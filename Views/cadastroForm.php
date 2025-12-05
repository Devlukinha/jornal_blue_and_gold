<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do Usuário</title>
    <link rel="stylesheet" href="../src/css/cadastro.css?v=1.0">
</head>
<?php if (isset($_GET['msg']) && $_GET['msg'] === 'success'): ?>
<script>
    alert("Conta criada com sucesso! Faça login.");
</script>
<?php endif; ?>

<?php if (isset($_GET['msg']) && $_GET['msg'] === 'error'): ?>
<script>
    alert("Erro ao criar conta!");
</script>
<?php endif; ?>
<body>

    <div class="container-main">
        <div class="form-cadastro">
            <img src="../assets/logo-2.png" alt="" width="300px">
            <form method="POST" action="../Public/cadastro.php" class="form">
                <label for="nome">Nome:</label>
                <input type="text" name="campo-nome" id="nome" required>

                <label for="email">Email:</label>
                <input type="email" name="campo-email" id="eamil" required>

                <label for="senha">Senha:</label>
                <input type="password" name="campo-senha" id="senha" required>

                <button type="submit" class="cadastrar">Sign in</button>
            </form>
            <a href="./loginForm.php" class="link">Já tem conta? Faça login</a>
        </div>

        <div class="image-form">

        </div>
    </div>
</body>

</html>
