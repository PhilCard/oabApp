<?php

    require_once '../inc/db.php';
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') 
    {
        if (
            isset($_POST['enunciado']) && !empty($_POST['enunciado']) &&
            isset($_POST['a']) && !empty($_POST['a']) &&
            isset($_POST['b']) && !empty($_POST['b']) &&
            isset($_POST['c']) && !empty($_POST['c']) &&
            isset($_POST['d']) && !empty($_POST['d']) &&
            isset($_POST['correta']) && !empty($_POST['correta']) &&
            isset($_POST['disciplina']) && isset($_POST['assunto']) &&
            isset($_POST['num_questao']) && isset($_POST['num_questao'])
        ) 
        {
            $idDisc = (int) $_POST['disciplina'];
            $idAss = (int) $_POST['assunto'];
            $enunciado = trim($_POST['enunciado']);
            $a = trim($_POST['a']);
            $b = trim($_POST['b']);
            $c = trim($_POST['c']);
            $d = trim($_POST['d']);
            $correta = trim($_POST['correta']);
            $n_questao = (int) trim($_POST['num_questao']);

            $stmt = $conn->prepare("INSERT INTO questoesOab 
                (idDisciplina, idAssunto, campoEnunciado, campoAlternativaA, campoAlternativaB, campoAlternativaC, campoAlternativaD, alternativaCorreta, campoNumQuestao) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)"); //a interpolação não deve ser feita aqui, preciso deixar os pontos de interrogação para o bind_param agir

            if ($stmt) 
            {
                $stmt->bind_param("iissssssi", $idDisc, $idAss, $enunciado, $a, $b, $c, $d, $correta, $n_questao); //aqui é o campo correto de interpolar

                if ($stmt->execute()) 
                {
                    echo "<p class='sucesso'>Questão cadastrada com sucesso!</p>";
                } 
                else 
                {
                    echo "<p class='erro'>Erro ao inserir: " . htmlspecialchars($stmt->error) . "</p>";
                }

                $stmt->close();
            } 
            else 
            {
                echo "<p class='erro'>Erro ao preparar a query: " . htmlspecialchars($conn->error) . "</p>";
            }
        }
        mysqli_close($conn);

        sleep(2);

        header('Location: ../consultar/index.php');
        exit;
    }
?>