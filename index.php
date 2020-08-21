<?php

require_once('processamento.php');

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2 - Eloísa Carvalho</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body class="bg-dark text-light">
    <main class="container">
        <div class="row justify-content-center">
            <form method="POST" class="col-lg-4 col-md-12 mt-4 float-left">
                <div class="form-group">
                    <label>Digite a quantidade de integrantes</label>
                    <input type="number" class="form-control" id="limite" name="limite" min="1" value="1" required>
                </div>
                <label>Digite os alunos</label>
                <div class="form-inline">
                    <input type="text" class="form-control mr-2" id="adcAluno" name="adcAluno">
                    <button type="button" id="adicionarAluno" class="btn btn-outline-light">Adicionar aluno</button>
                </div>
                <div class="form-group mt-2 text-center">
                    <textarea class="form-control" id="textAreaAlunos" name="textAreaAlunos" rows="4" required
                        readonly></textarea>
                    <button type="button" id="limparAlunos" class="btn btn-outline-danger mt-2">Limpar alunos</button>
                </div>
                <div class="form-group text-center">
                    <button type="submit" name="enviar" class="btn btn-outline-info">Criar grupos</button>
                </div>
            </form>
            <section class="col-lg-8 col-md-12 mt-4 float-left ">
                <div class="card-columns">
                    <?php if(isset($_POST['enviar'])){
                            criarGrupos($_POST['limite'], $_POST['textAreaAlunos']);
                        }?>
                </div>
            </section>
        </div>
    </main>
    <script src="processamento.js"></script>
</body>

</html>