<?php

class Database
{
    private static $instance = null;
    private $connection;
    private $host;
    private $user;
    private $pass;
    private $name;

    private function __construct()
    {
        $dotenv = parse_ini_file('C:\Users\thoma\files\coding\projects\RPG grouped\rpgCurrent\config\database.env');

        $this->host = $dotenv['DB_HOST'];
        $this->user = $dotenv['DB_USER'];
        $this->pass = $dotenv['DB_PASS'];
        $this->name = $dotenv['DB_NAME'];

        $this->connect();
    }

    private function connect()
    {
        try {
            $this->connection = mysqli_connect(
                $this->host,
                $this->user,
                $this->pass,
                $this->name
            );
        } catch (Exception $ex) {
            throw new Exception("Database Connection Failed: " . $ex->getMessage());
        }
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    public function getConnection()
    {
        return $this->connection;
    }

    // Prevent cloning of the instance
    private function __clone() {}

    // Prevent unserializing of the instance
    public function __wakeup()
    {
        throw new Exception("Cannot unserialize singleton");
    }
}

// Usage example:
// $db = Database::getInstance();
// $conn = $db->getConnection();
