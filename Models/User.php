<?php 
    require_once __DIR__ .  "/../Config/conexao.php";

    class User {
        
        private $conexao;
        
        public function __construct(){
            $this->conexao = new Conexao();
            $this->conexao->conectar();
        }


        // verifica se já há um email cadastrado
        
        public function verificarEmailExistente($email) {
            $resultado = $this->conexao->executar(
                "SELECT id FROM users WHERE email = ?",
            [$email]
            );

            return count($resultado) > 0;
        }


        // cria um novo usuario 
        public function criarUsuario($nome, $email, $senha) {
            
            //criptografia da senha 
            $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

            return $this->conexao->executar(
                 "INSERT INTO users (nome, email, senha) VALUES (?, ?, ?)",
            [$nome, $email, $senhaHash]
            );
        }

        // autenticacao do usuario
        public function login($email, $senha) {
            $resultado = $this->conexao->executar(
                "SELECT * FROM users WHERE email = ?",
            [$email]
            );

            if(count($resultado) === 0) return false; // usuario nao existe

            $usuario = $resultado[0];
            
            // verificacao da senha 
            if(password_verify($senha, $usuario['senha'])) {
                return $usuario;
            }
            else {
                return false;
            }
        }


        public function listarTodos() {
        return $this->conexao->executar("SELECT id, nome, email FROM users ORDER BY id ASC");
}

    }

?>