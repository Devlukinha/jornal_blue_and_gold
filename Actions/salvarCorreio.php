<?php 
    
    session_start();

    require_once __DIR__ . "/../Controllers/CorreioController.php";

        if (!isset($_SESSION['user_id'])) {
            die("Você precisa estar logado para enviar um correio elegante.");
        }

         $user_id = $_SESSION['user_id'];
         $destinatario = $_POST['campo-destinatario'];
         $mensagem = $_POST['campo-mensagem'];

        $controller = new CorreioController();

        if ($controller->cadastrarCorreio($user_id, $destinatario, $mensagem)) {
             header("Location: ../Views/correio.php?msg=success");
        } else {
             header("Location: ../Views/correio.php?msg=error");
        }
           

?>