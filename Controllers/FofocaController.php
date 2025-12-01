<?php 

     require_once __DIR__ .  "/../Models/Fofoca.php";

    class FofocaController {
        
        private $fofocaModel;

        public function __construct() {
             $this->fofocaModel = new Fofoca();
        }

        //cadastro da fofoca 
        public function cadastrarFofoca($user_id, $titulo, $mensagem, $imagem) {
            return $this->fofocaModel->cadastrar($user_id, $titulo, $mensagem, $imagem);
        }

        public function listarFofocas() {
            return $this->fofocaModel->listarTodos();
        }
    
    }
?>