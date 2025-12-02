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
            ':titulo' => $titulo,
            ':mensagem' => $mensagem,
            ':imagem' => $imagem
            ]);
        }

        public function listarTodos() {
            $sql = " SELECT id, titulo, mensagem, imagem, criado_em
            FROM fofocas
            ORDER BY criado_em DESC ";
            
            $pdo = $this->conexao->conectar();
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
             
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

    }

?>