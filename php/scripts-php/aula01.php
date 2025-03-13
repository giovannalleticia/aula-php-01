<?php

function soma($a, $b) {
    return $a + $b;
}

if (soma(1, 2) == 3) {
    echo 'Teste ok';
}elseif (soma(1, 2) == 4) {
    echo 'Teste ok';
}
else {
    echo 'Teste não ok';

}

class Pessoa {
    public $nome;
    protected $idade;
    private $sexo;

    function falar(){
        echo 'Olá, meu nome é ' . $this->nome;
    }
}

$nome= 'Prof Luiz';
$bool = true;
$idade = 30;
$preco = 12.50;
$nulo = null;

$pessoa = new Pessoa();

$fruits= ['maçã', 'banana', 'laranja'];

$objcts = Array(
    0 => 'maçã',
    'fruta' => 'maçã',
    0 => 'maçã',
);

echo $objcts['fruta'];


echo $fruits[0];

for ($i = 0; $i < count($fruits); $i++) {
    echo $fruits[$i] . '<br>';
}
foreach ($fruits as $fruit) {
    echo $fruit . '<br>';
}
echo $pessoa->nome = $nome;

$pessoa->falar();

echo $nome;



?>