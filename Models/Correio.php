<?php 

    require_once __DIR__ .  "/../Config/conexao.php";

    class Correio {
        
        private $conexao;

        public function __construct() {
            $this->conexao = (new Conexao())->conectar();

            if(!$this->conexao) {
              die("Erro: não conseguiu conectar ao banco.");
        }
         }

         

        // funcao p enviar msg 
        public function enviarMensagem($user_id, $destinatario, $mensagem) {
            
            try {
                $comandoSQL = "INSERT INTO correio_elegante (user_id, destinatario, mensagem)
                VALUES (:user_id, :destinatario, :mensagem)";

             $stmt = $this->conexao->prepare($comandoSQL);
             
            return $stmt->execute([
            ':user_id' => $user_id,
            ':destinatario' => $destinatario,
            ':mensagem' => $mensagem
        ]);
            }

            catch(PDOException $e) {
                echo "Erro ao enviar mensagem: " . $e->getMessage();
                return false;
            }
        }

        // funcao p listar msgs 
        
          public function listarMensagens() {
        $sql = "SELECT c.id, c.destinatario, c.mensagem, c.criado_em, u.nome AS remetente
                FROM correio_elegante c
                JOIN users u ON u.id = c.user_id
                ORDER BY c.criado_em DESC";
        
        $stmt = $this->conexao->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    }

?>