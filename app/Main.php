<?php
namespace Tests\App;

require '../vendor/autoload.php';
require 'Conexion.php';
use Tests\Database\Conexion;

class Main
{
    private $db;

    public function __construct()
    {
        $this->db = Conexion::instance("tests");
    }

    public function hello($message)
    {
        echo $message;
    }

    public function saveUser($params)
    {
        $this->db->conexion->insert('user', $params);
    }

}

$main = new Main();
$main->hello('It\'s Work!!!!');

$data = ['name' => 'Laudy', 'email' => 'lalnet4@yahoo.com'];
//$main->saveUser($data);