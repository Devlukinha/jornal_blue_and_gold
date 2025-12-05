<?php 

    require_once __DIR__ . "/../Controllers/UserController.php";

    $controller = new UserController();
    
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = $_POST['campo-email'];
        $senha = $_POST['campo-senha'];

    if ($controller->loginUsuario($email, $senha)) {
         header("Location: ../index.php?msg=success");
         exit;
    } else {
         header("Location: ../Views/loginForm.php?msg=error");
         exit;
    }
    }
?>
