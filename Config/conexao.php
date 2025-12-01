<?php 

    class Conexao {
        
        //info dados do bd blue and gold
        
        private $host = "localhost";
        private $port = 3306;
        private $database = "blue_gold";
        private $username = "root";
        private $password = "";
        private $pdo;

        // metodo p desconectar
        public function desconectar() {
            $this->pdo = null;
        }

        // metodo p conectar 
        public function conectar() {
            
            try {
                $this->pdo = new PDO (
                    "mysql:host={$this->host};
                     port={$this->port};
                     dbname={$this->database};
                     charset=utf8mb4",
                    
                     $this->username,
                     $this->password
                );

                // config PDO
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
                $this->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

                return $this->pdo; // PDO pronto pra usar nos models
            }

            catch(PDOException $e) {
                
                die("Falha ao se conectar ao bando de dados: " . $e->getMessage());
            }
        }

        // metodo para executar queries 
        
        public function executar($query, $params = []) {
            
            try {
                
                $queryPreparada = $this->pdo->prepare($query);
                $queryPreparada->execute($params);

                // retorno de resultados só para SELECt
                if(stripos($query, "SELECT") === 0) {
                    return $queryPreparada->fetchAll();
                }

                // retorno de resultados para INSERT, UPDATE, DELETE
                return true;
            }

            catch (PDOException $e) {
                echo "Erro ao executar query: " . $e->getMessage();
                return false;
            }
        }
        
    }

?>