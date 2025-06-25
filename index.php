<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <title>OAB App</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-32x32.png">
  </head>

  <body>
  <!-- Sidebar -->
    <aside class="sidebar">
      <h2 class="logo"> <img src="assets/img/logo-top.svg"> OAB App</h2>
      <a href="index.php" class="nav-link"> <i class="fas fa-home"> </i> Home</a>
      <a href="consultar/" class="nav-link"> <i class="fas fa-search"></i> </i> Consultar</a>
      <a href="#" class="nav-link"> <i class="fas fa-book"></i> Artigos</a>
      <a href="config.php" class="nav-link"> <i class="fas fa-cog"> </i> Configurações</a>
    </aside>

    <div class="main">
      <!-- Topbar -->
      <?php require_once 'inc/side_nav_bar.php';?>

      <div class="content">
        <h1>Bem-vindo ao OAB App</h1>
        
        <div class="cards-container">
          <div class="card">
            <a href="cadastrar/"> 
              <img src="assets/img/publicar.png" alt="Imagem 1">
              <h3>Cadastrar questões</h3>
              <p>Cadastre uma nova disciplina e questões</p>
            </a>
          </div>
          
          <div class="card">
            <a href="consultar/">
              <img src="assets/img/consultar.png" alt="Imagem 2">
              <h3>Consultar questões</h3>
              <p>Consulte questões cadastradas anteriormente</p>
            </a>
          </div>

          <div class="card">
            <img src="assets/img/artigo.png" alt="Imagem 3">
            <h3>Artigos</h3>
            <p>Verifique novos artigos</p>
          </div>
        </div>

      </div>
    </div>
    <script src="assets/js/main.js"></script>
  </body>
</html>
