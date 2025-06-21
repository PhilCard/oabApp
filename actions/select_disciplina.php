<?php 

    require_once '../inc/db.php';

    $sql = "SELECT 
            disciplina.idDisciplina, 
            disciplina.campoDisciplina, 
            assunto.idAssunto, 
            assunto.campoAssunto 
        FROM disciplina
        JOIN assunto ON disciplina.idAssunto = assunto.idAssunto";

    $result = mysqli_query($conn, $sql);

    $disciplinas = [];

    while ($row = mysqli_fetch_assoc($result)) {
    $disciplinas[] = $row;
    }

    mysqli_close($conn);

    header('Content-Type: application/json');
    echo json_encode($disciplinas);

    /*
   if(mysqli_num_rows($result) > 0)
   {
        while($row = mysqli_fetch_assoc($result))
        {
            echo 'id :' . $row['idDisciplina'] . '<br />' . 'campoDisciplina :' . $row['campoDisciplina'] . '<br />' . 'idAssunto :' . $row['idAssunto'] . '<br />';
        }
   }
   else
   {
        echo "0 results";
   }
    */
?>