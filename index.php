<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <title>OAB App</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
  </head>

  <body>
  <!-- Sidebar -->
    <aside class="sidebar">
      <h2 class="logo"> <img src="assets/img/logo-top.svg"> OAB App</h2>
      <a href="index.html" class="nav-link"> <i class="fas fa-home"> </i> Home</a>
      <a href="config.php" class="nav-link"> <i class="fas fa-cog"> </i> Configurações</a>
    </aside>

    <!-- Área principal -->
    <div class="main">
      <!-- Topbar -->
      <nav class="navbar">
        <div class="user-menu" id="userMenu">
          <button class="user-button" onclick="toggleMenu()">
            <i class="fas fa-user-circle"></i> Admin
            <i class="fas fa-chevron-down"></i>
          </button>
          <div class="dropdown" id="dropdownMenu">
            <a href="#"><i class="fas fa-user"></i> Perfil: Admin</a>
            <a href="#"><i class="fas fa-sign-out-alt"></i> Sair</a>
          </div>
        </div>
      </nav>

      <!-- Conteúdo -->
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

     

    <script src="assets/js/app.js"></script>
  </body>
</html>
