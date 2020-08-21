<?php
function criarGrupos($qntIntegrantes, $alunos)
{
    $alunos = explode(';', $alunos);
    array_pop($alunos);
    shuffle($alunos);

    $qntAlunos = count($alunos);

    if (($qntAlunos % 2) != 0 && $qntAlunos != 1) {
        $qntAlunos--;
    }

    $qntGrupos = $qntAlunos / $qntIntegrantes;
    $grupo = [];

    for ($i = 0; $i < $qntGrupos; $i++) {
        for ($x = 0; $x < $qntIntegrantes; $x++) {
            if (isset($alunos[$x + ($i * $qntIntegrantes)])) {
                $grupo['grupo' . ($i + 1)][$x] = $alunos[$x + ($i * $qntIntegrantes)];
            }
        }
    }

    if ((count($alunos) % 2) != 0 && $qntAlunos != 1 && is_int($qntGrupos)) {
        if ($qntIntegrantes == 1) {
            $grupo['grupo' . ($i + 1)][$x] = end($alunos);
        } else {
            $grupo['grupo' . ($i)][$x] = end($alunos);
        }
    }

    $contador = 1;
    foreach ($grupo as $indice) {
        echo '<div class="card text-white bg-info"><div class="card-body"><h5 class="card-title">Grupo ' . $contador . '</h5><p class="card-text">';
        foreach ($indice as $nome) {
            echo "<li>{$nome}</li>";
        }
        echo '</p></div></div>';

        $contador++;
    }
}
