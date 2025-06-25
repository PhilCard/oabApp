<?php

    require_once '../inc/db.php';

    $sql = "SELECT 
            questoesOab.idQuestoes,
            questoesOab.campoNumQuestao, 
            disciplina.campoDisciplina, 
            assunto.campoAssunto 
        FROM questoesOab 
        JOIN disciplina ON questoesOab.idDisciplina = disciplina.idDisciplina 
        JOIN assunto ON questoesOab.idAssunto = assunto.idAssunto";

    $result = mysqli_query($conn, $sql);

    $lista_tabela_consulta = [];

    while ($row = mysqli_fetch_assoc($result)) {
       
        $lista_tabela_consulta[] = $row;
    }

?>