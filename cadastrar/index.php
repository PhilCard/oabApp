<!DOCTYPE html>
<html lang="en">
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

        <aside class="bg-dark">
            <h2 class="logo"> <img src="../assets/img/logo-top.svg"> OAB App</h2>
            <ul class="nav flex-column">
                <li class="nav-item">
                <a href="../" class="nav-link"> <i class="fas fa-home"> </i> Home</a>
                </li>
                <li class="nav-item">
                <a href="../consultar/" class="nav-link"> <i class="fas fa-search"></i> </i> Consultar</a>
                </li>
                <li class="nav-item">
                <a href="#" class="nav-link"> <i class="fas fa-book"></i> Artigos</a>
                </li>
                <li class="nav-item">
                <a href="config.php" class="nav-link"> <i class="fas fa-cog"> </i> Configurações</a>
                </li>
            </ul>
        </aside>

        <div class="container">
            <div class="content">
                <?php require_once '../form_cad_quest.php'; ?>
            </div>
        </div>
        
        <?php require_once '../inc/modal_assunto.php'; ?>
        <?php require_once '../inc/modal_disciplina.php'; ?>
        
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script src="../assets/js/app.js"></script>
    </body>
</html>