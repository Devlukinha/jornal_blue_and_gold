<?php 

    require_once __DIR__ . "/../Controllers/UserController.php";

    $controller = new UserController();
    
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = $_POST['campo-email'];
        $senha = $_POST['campo-senha'];

    if ($controller->loginUsuario($email, $senha)) {
        echo "Login realizado com sucesso!";
    } else {
        echo "Email ou senha incorretos!";
    }
    }
?>