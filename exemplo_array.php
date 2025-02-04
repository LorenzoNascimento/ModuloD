<?php

$nome = [
    'pessoa1' => [
        'nome' => 'Leonardo',
        'idade' => '32',
        'cidade' => 'Capão da canoa'
    ],
    200 => [
        'nome' => 'Caio',
        'idade' => 28,
        'cidade' => 'Cidrera'
    ]
];

echo '<pre>';
print_r($nome);
echo '</pre>';

echo $nome['pessoa1']['idade'];
echo '<pre>';
print_r($nome);
echo '</pre>';

echo $nome[200]['idade'];
