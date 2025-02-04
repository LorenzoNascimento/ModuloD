<?php

$media = 0;
$maiorNota = null;
$alunos = [];


for ($i = 0; $i < 10; $i++) {
    //Digitar o nome do aluno
    echo ("Informe o nome do " . $i . "° aluno \n");
    $nome = readline();

    //Digitar a nota do aluno
    echo ("Informe a nota do " . $i . "° aluno \n");
    $nota = readline();

    $alunos[] = [
        'nome' => $nome,
        'nota' => $nota
    ];

    $media += $nota;

    if($maiorNota == null){
        $maiorNota = $i;
    }elseif($alunos[$maiorNota]['nota'] < $nota){
        $maiorNota = $i;
    }

    echo "A maior nota da turma é " . $alunos[$maiorNota][$alunos] . " do aluno " .$aluno[$maiorNota]['nome'] . "\n";
    echo "A media da turma é" . $media/4;
}