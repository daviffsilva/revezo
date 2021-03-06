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



    public function select($query, $params = [], $return = PDO::FETCH_CLASS)
    {
        $sql = $this->conn->prepare($query);
        $sql->execute($params);
        return $sql->fetchAll($return);
    }

    public function insert($values, $table)
    {
        $query = "insert into $table (";
        foreach (array_keys($values) as $col) {
            $query .= $col . ",";
        }
        $query = substr($query, 0, strlen($query) - 1);
        $query .= ") values (";
        foreach (array_keys($values) as $col) {
            $query .= ":" . $col . ",";
        }
        $query = substr($query, 0, strlen($query) - 1);
        $query .= ")";
        $sql = $this->conn->prepare($query);
        $sql->execute($values);

        return $sql->rowCount();
    }

    public function alterar()
    {
        if (isset($_POST['Salvar'])) {
            $nome = $_POST["nome"];
            $data_nascimento = $_POST["data_nascimento"];
            if($_POST["senha"] != "") $senha = md5($_POST["senha"]);
            else $senha = $_SESSION["user"]["senha"];

            $sql = $this->conn->prepare("update usuario set nome = ?, data_nascimento = ?, senha = ? where id = ?");

            $sql->execute(array(
                $nome,
                $data_nascimento,
                $senha,
                $_SESSION["user"]["id"]
            ));

            if ($sql->rowCount() > 0) {
                $_SESSION["user"]["nome"] = $nome;
                $_SESSION["user"]["data_nascimento"] = $data_nascimento;
                $_SESSION["user"]["senha"] = $senha;
                header("location: ./");
            } else {
                header("location: ./");
            }
        }
    }
}
