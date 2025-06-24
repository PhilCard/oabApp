<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <title>Cadastro de Questão</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
  </head>
  <body>
    
    <aside class="sidebar">
      <h2 class="logo"> <img src="../assets/img/logo-top.svg"> OAB App</h2>
      <a href="../index.php" class="nav-link"> <i class="fas fa-home"> </i> Home</a>
      <a href="../consultar" class="nav-link"> <i class="fas fa-search"></i> </i> Consultar</a>
      <a href="#" class="nav-link"> <i class="fas fa-book"></i> Artigos</a>
      <a href="../config.php" class="nav-link"> <i class="fas fa-cog"> </i> Configurações</a>
    </aside>
    
    <!-- Área principal -->
    <div class="main">
      <!-- Topbar -->
      <?php require_once '../inc/side_nav_bar.php';?>
      <div id="alert_box" class="" style="display : none;">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
        <strong>Danger!</strong> Indicates a dangerous or potentially negative action.
      </div>
    </div>
    
    <div class="content">
      <?php require_once '../form_cad_quest.php'; ?>
    </div>

    <?php require_once '../inc/modal_assunto.php' ?>
    <?php require_once '../inc/modal_disciplina.php' ?>
    
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/app.js"></script>
  </body>
</html>
