<?php 
    require_once __DIR__ . '/../Models/User.php';

    class UserController {

        private $userModel;
        
        public function __construct()  {
            $this->userModel = new User;
            session_start(); // inicia sessao para login
        }

        //metodo p cadastrar usuario 
        public function cadastrarUsuario($nome, $email, $senha) {
            
            if($this->userModel->verificarEmailExistente($email)) {
                return "Este email já está cadastrado no site!";
            }

            $sucesso = $this->userModel->criarUsuario($nome, $email, $senha);
            
            if($sucesso) {
                return "Cadastro realizado com sucesso!";
            }
            else {
                return "Erro ao cadastrar usuário!";
            }
        }

        // login do usuario 
        public function loginUsuario($email, $senha) {
            $usuario = $this->userModel->login($email, $senha);
            
            if($usuario) {
                
                //cria sessao 
            $_SESSION['user_id'] = $usuario['id'];
            $_SESSION['user_nome'] = $usuario['nome'];
            return true;
            }

            else {
                return false;
            }
        }

        public function listarUsuarios() {
         return $this->userModel->listarTodos();
        }


        // encerrar sessao 
        public function encerrarSessao() {
            session_destroy();
        }
    }

?>