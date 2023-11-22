<?php
class Database {
    public $host;
    public $username;
    public $password;
    public $dbname;

    public function __construct($host, $username, $password, $dbname){
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->dbname = $dbname;
        
        try {
            // Se connecter à la base de données
            $this->connectDatabase = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            // Gestion erreur et exception  
            $this->connectDatabase->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connexion réussie"; 
        } catch (PDOException $e) {
            echo "Connexion échoué " . $e->getMessage();
        }
    }   
}
