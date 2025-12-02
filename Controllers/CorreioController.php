<?php 

    require_once __DIR__ . "/../Models/Correio.php";

    class CorreioController {

        private $correioModel;

        public function __construct() {
            $this->correioModel = new Correio();
        }

        public function cadastrarCorreio($user_id, $destinatario_id, $mensagem) {
            return $this->correioModel->enviarMensagem($user_id, $destinatario_id, $mensagem);
        }

        public function listar() {
            return $this->correioModel->listarMensagens();
        }
    }

?>