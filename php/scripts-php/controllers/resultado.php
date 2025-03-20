<?php
if (isset($_POST['nome']) && isset($_POST['idade']) && is_array($_POST)) {
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];

}

// echo "Nome: $nome<br>";
// echo "Idade: $idade<br>";

$pessoas = [
    ['nome' => 'Alice', 'idade' => 30],
];

?>