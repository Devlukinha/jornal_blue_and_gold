<?php 
    
    require_once __DIR__ . "/../Controllers/UserController.php";

    $controller = new UserController();
    
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        
        $nome = $_POST['campo-nome'];
        $email = $_POST['campo-email'];
        $senha = $_POST['campo-senha'];

        $mensagem = $controller->cadastrarUsuario($nome, $email, $senha);
        echo $mensagem;
    }

?>