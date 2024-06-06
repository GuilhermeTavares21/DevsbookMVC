<?php
namespace core;

use \src\Config;

class Database {
    private static $_pdo = null;


    public static function getInstance() {
        if(!isset(self::$_pdo)) {
            try {
                self::$_pdo = new \PDO('mysql:host=127.0.0.1;port=3308;dbname=devsbook', 'root', '');
                // Configurar o PDO para lançar exceções em caso de erro
                self::$_pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            } catch (\PDOException $e) {
                // Tratar erros de conexão
                die('Connection failed: ' . $e->getMessage());
            }
        }
        return self::$_pdo;
    }

    private function __construct() { }
    private function __clone() { }
    private function __wakeup() { }
}