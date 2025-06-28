<?php

    require_once '../inc/db.php';

    header('Content-Type: application/json');

    $questoes_oab = [];

    if (isset($_GET['action']) && $_GET['action'] === "lista-edit" && isset($_GET['id'])) {

        $id_list = $_GET['id'];

        if (!ctype_digit($id_list)) {
            http_response_code(400);
            echo json_encode(["erro" => "ID inválido"]);
            exit;
        }

        $sql = 'SELECT * FROM questoesOab WHERE idQuestoes = ?';
        $stmt = mysqli_prepare($conn, $sql);

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, 'i', $id_list);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if ($result && mysqli_num_rows($result) > 0) {
                $questoes_oab = mysqli_fetch_assoc($result);
            } else {
                http_response_code(404);
                $questoes_oab = ["erro" => "Questão não encontrada"];
            }

            mysqli_stmt_close($stmt);
        } else {
            http_response_code(500);
            $questoes_oab = ["erro" => "Erro na preparação da consulta"];
        }

        mysqli_close($conn);
    } else {
        http_response_code(400);
        $questoes_oab = ["erro" => "Requisição inválida"];
    }

    echo json_encode($questoes_oab);
?>
