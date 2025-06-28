<?php

    require_once '../inc/db.php';

    header('Content-Type: application/json');

    $resposta = [];

    if (
        isset($_GET['action']) && $_GET['action'] === "edit" &&
        isset($_POST['id']) &&
        isset($_POST['enunciado']) &&
        isset($_POST['a']) &&
        isset($_POST['b']) &&
        isset($_POST['c']) &&
        isset($_POST['d']) && 
        isset($_POST['num_questao']) &&
        isset($_POST['correta'])
    ) 
    {
        $id = $_POST['id'];
        $enunciado = $_POST['enunciado'];
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];
        $d = $_POST['d'];
        $n_questao = $_POST['num_questao'];
        $resposta_correta = $_POST['correta'];

        
        if (!ctype_digit($id)) 
        {
            http_response_code(400);
            echo json_encode(["erro" => "ID inválido"]);
            exit;
        }

        $sql = "UPDATE questoesOab 
                SET campoEnunciado = ?, campoAlternativaA = ?, campoAlternativaB = ?, campoAlternativaC = ?, campoAlternativaD = ?, alternativaCorreta = ?, campoNumQuestao = ? WHERE idQuestoes = ?";

        $stmt = mysqli_prepare($conn, $sql);

        if ($stmt) 
        {
            mysqli_stmt_bind_param($stmt, 'ssssssii', $enunciado, $a, $b, $c, $d, $resposta_correta, $n_questao, $id);

            if (mysqli_stmt_execute($stmt)) 
            {
                if (mysqli_stmt_affected_rows($stmt) > 0) {}
 
                else 
                {
                    $resposta = ["aviso" => "Nenhuma alteração feita ou ID não encontrado"];
                }
            } 
            else 
            {
                http_response_code(500);
                $resposta = ["erro" => "Falha ao executar o UPDATE"];
            }
            mysqli_stmt_close($stmt);

        } 
        else 
        {
            http_response_code(500);
            $resposta = ["erro" => "Erro na preparação da consulta"];
        }
        mysqli_close($conn);

    } 
    else 
    {
        http_response_code(400);
        $resposta = ["erro" => "Dados incompletos ou requisição inválida"];
    }
    echo json_encode($resposta);
?>
