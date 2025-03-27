<?php

class DB {
    private $HOST = 'wagnerweinert.com.br';
    private $USER = 'tads24_giovanna';
    private $PASSWORD = 'tads24_giovanna';
    private $DB = 'tads24_giovanna';
    private $PORT = 3306;
    private $CHARSET = "utf8mb4";
    private $conn;

    public function getConnection() {
        $this->conn = new PDO("mysql:host=$this->HOST;dbname=$this->DB;charset=$this->CHARSET;port=$this->PORT", $this->USER, $this->PASSWORD);
        return $this->conn;
    }
}

$database = new DB();


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];

    $conn = $database->getConnection();
    $query = "INSERT INTO pessoa_php   (nome, idade) VALUES (?, ?)";

    $stmt
        = $conn->prepare($query);

        $stmt->bindParam(1, $nome);
        $stmt->bindParam(2, $idade);
        $result = $stmt->execute();

    echo $result;
}


$pessoas = [
    ['nome' => 'Alice', 'idade' => 30],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>PHP!!</title>
</head>
<body>
    <h1>Aula 2 PHP</h1>


    <form action="index.php" method="post">
        Nome: <input type="text" name="nome"><br>
        Idade: <input type="number" name="idade"><br>
        <button type="submit">Enviar</button>
    </form>


    <table>
        <tr>
        <th>Nome</th>
        <th>Idade</th>
        </tr>
        <?php
            // echo var_dump($pessoas);
            if (isset($pessoas) && is_array($pessoas)) {
                foreach($pessoas as $pessoa) {
                    echo "<tr>";
                    echo "<td>".$pessoa['nome']."</td>";
                    echo "<td>".$pessoa['idade']."</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='2'>Nenhuma pessoa cadastrada.</td></tr>";
            }
        ?>

    </table>
</body>
</html>