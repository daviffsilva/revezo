<?php


class DatabaseUtils
{

    private $conn;

    /**
     * Database constructor.
     */
    public function __construct($config = [])
    {
        $config = [
            'servidor' => 'mysql:dbname=revezo;host=localhost',
            'usuario' => 'root',
            'senha' => ''
        ];
        $this->conn = new PDO($config["servidor"], $config["usuario"], $config["senha"]);
    }

    public function select($query, $params = [], $return = PDO::FETCH_CLASS){
        $sql = $this->conn->prepare($query);
        $sql->execute($params);
        return $sql->fetchAll($return);
    }

    public function insert($values, $table){
        $query = "insert into $table (";
        foreach(array_keys($values) as $col){
            $query .= $col.",";
        }
        $query = substr($query, 0, strlen($query) - 1);
        $query .= ") values (";
        foreach(array_keys($values) as $col){
            $query .= ":".$col.",";
        }
        $query = substr($query, 0, strlen($query) - 1);
        $query = $query.")";

        $sql = $this->conn->prepare($query);
        $sql->execute($values);

        return $sql->rowCount();
    }
}