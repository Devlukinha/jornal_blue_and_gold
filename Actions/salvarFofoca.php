<?php 
    session_start();

     require_once __DIR__ .  "/../Controllers/FofocaController.php";

    if(!isset($_SESSION['user_id'])) {
        die("Você precisa estar logado para publicar uma fofoca");
    }

    $controller = new FofocaController();

    $user_id = $_SESSION['user_id'];
    $titulo = $_POST['campo-titulo'];
    $mensagem = $_POST['campo-mensagem'];

    //upload da Imagem
    $imagemNome = null;
    
    if(isset($_FILES['campo-imagem']) && $_FILES['campo-imagem']['error'] == 0){
        
    $imagemNome = time() . "_" . basename($_FILES['campo-imagem']['name']);
    $uploadDir = __DIR__ . "/../Public/uploads/";

    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }

    $destino = $uploadDir . $imagemNome;

    if (!move_uploaded_file($_FILES['campo-imagem']['tmp_name'], $destino)) {
        echo "Erro ao enviar a imagem!";
        $imagemNome = null; // garante que não será salvo no banco
    }
    } 
    
    
    //salvar fofoca 
    if($controller->cadastrarFofoca($user_id, $titulo, $mensagem, $imagemNome)){
        
        echo "Fofoca cadastrada com sucesso!";
    }
    else {
        echo "Erro ao publicar";
    }
    
?>