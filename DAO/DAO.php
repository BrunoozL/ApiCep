<?php
namespace App\DAO;
use \PDO;

abstract class DAO
{
    protected $conexao;

    public function __construct()
    {        
        $dsn = "mysql:host=localhost:3307;dbname=db_apicep";        
        $this->conexao = new PDO($dsn, 'root', 'etecjau');
    }
}