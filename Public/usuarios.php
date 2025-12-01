<?php
require_once __DIR__ . "/../Controllers/UserController.php";

// Inicializa Controller e pega todos os usuários
$controller = new UserController();
$usuarios = $controller->listarUsuarios();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Usuários Cadastrados</title>
</head>

<body>
    <h2>Usuários Cadastrados</h2>

    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
        </tr>
        <?php foreach ($usuarios as $user): ?>
        <tr>
            <td><?= $user['id'] ?></td>
            <td><?= $user['nome'] ?></td>
            <td><?= $user['email'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>

</html