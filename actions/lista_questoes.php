<?php

    require_once '../inc/db.php';

    header('Content-Type: application/json');

    $questoes_oab = [];

    if (isset($_GET['action']) && $_GET['action'] === "lista-edit" && isset($_GET['id'])) {

        $id_list = $_GET['id']; // Ainda inseguro, só para teste

        $sql = 'SELECT * FROM questoesOab WHERE idQuestoes = ' . $id_list;

        $result = mysqli_query($conn, $sql);

        if ($result && mysqli_num_rows($result) > 0) {
            $questoes_oab = mysqli_fetch_assoc($result);
        } else {
            http_response_code(404);
            $questoes_oab = ["erro" => "Questão não encontrada"];
        }

        mysqli_close($conn);
    } else {
        http_response_code(400);
        $questoes_oab = ["erro" => "Requisição inválida"];
    }

    echo json_encode($questoes_oab);
?>
