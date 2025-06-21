<?php

    require_once '../inc/db.php';

    $sql = 'SELECT idAssunto, campoAssunto FROM assunto';
    $result = mysqli_query($conn, $sql);

    $assuntos = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $assuntos[] = $row;
    }

    mysqli_close($conn);
?>