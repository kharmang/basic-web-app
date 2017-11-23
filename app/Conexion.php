<?php
namespace Tests\Database;
 
// Using Medoo namespace
use Medoo\Medoo;

class Conexion
{
    private static $instance;
    private static $databaseName;

    public $conexion;

    public static function instance($dbName)
    {
        
        if (is_null(self::$instance)) {
            self::$instance = new self($dbName);
        } else if (self::$databaseName != $dbName) {
            self::$instance = new self($dbName);
        }

        return self::$instance;
    }

    public function __construct($dbName)
    {
        self::$databaseName = $dbName;
        // Initialize
        $this->conexion = new Medoo([
            'database_type' => 'mysql',
            'database_name' => $dbName,
            'server' => 'persistence',
            'username' => 'testUser',
            'password' => 'testPass',
            "logging" => true,
            'prefix' => 'test1_',
        ]);

        error_log(__LINE__ . '::$this->conexion->info() = ' . var_export($this->conexion->info(), true));

    }
}
