<?php 

    require_once __DIR__ .  "/../Config/conexao.php";

    class Fofoca{
        
        private $conexao;

         public function __construct() {
            $this->conexao = new Conexao();
            $this->conexao->conectar();
        }

        public function cadastrar($user_id, $titulo, $mensagem, $imagem) {
            
            $comandoSQL = "INSERT INTO fofocas (user_id, titulo, mensagem, imagem) VALUES (:user_id, :titulo, :mensagem, :imagem)";

            return $this->conexao->executar($comandoSQL, [
            ':user_id' => $user_id,
            'titulo' => $titulo,
            ':mensagem' => $mensagem,
            ':imagem' => $imagem
            ]);
        }

        public function listarTodos() {
    $sql = "
        SELECT f.id, f.titulo, f.mensagem, f.imagem, f.criado_em, u.nome AS autor
        FROM fofocas f
        JOIN users u ON f.user_id = u.id
        ORDER BY f.criado_em DESC
    ";
    $result = $this->conexao->executar($sql);
    if ($result === false) {
        // exibe o erro do PDO para debug
        die("Erro ao listar fofocas");
    }
    return $result;
}

    }

?>