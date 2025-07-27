<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>OABapp | Consultar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
        <link rel="icon" type="image/png" sizes="32x32" href="../assets/img/favicon-32x32.png">
    </head>

    <body>

        <?php require_once '../inc/side_nav.php'; ?>

       <div class="container">
            <div class="content">
                <div class="search-bar">
                    <input type="text" placeholder="Pesquisar disciplina...">
                </div>

                <?php require_once '../actions/lista_consulta.php'; ?>

                <table class="table table-striped table-bordered">
                    <thead>
                         <tr>
                            <th>N° Questão</th>
                            <th>Disciplina</th>
                            <th>Assunto</th>
                            <th>Ações</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach($lista_tabela_consulta as $lista):?>
                        <tr>
                            <td><?=$lista['campoNumQuestao']?></td>
                            <td><?=$lista['campoDisciplina']?></td>
                            <td><?=$lista['campoAssunto']?></td>
                            <td>
                            <button id="edit-btn-<?=$lista['idQuestoes']?>" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal_edit">Editar</button>
                            <button class="btn btn-danger">Excluir</button>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
       </div>
       <?php require_once '../inc/modal_edit.php'; ?> 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script src="../assets/js/edit_questoes.js"></script>
    </body>
</html>