<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <title>OABapp | Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-32x32.png">
  </head>

  <body>
    <?php
    /*
      if(isset($_GET['action']) && $_GET['action'] == "logout"){
          //echo '<p> olaola </p>';
      }implementar no logout*/
    ?>
    <aside class="bg-dark">
      <h2 class="logo"> <img src="assets/img/logo-top.svg"> OAB App</h2>
      <ul class="nav flex-column">
        <li class="nav-item">
          <a href="index.php" class="nav-link"> <i class="fas fa-home"> </i> Home</a>
        </li>
        <li class="nav-item">
          <a href="consultar/" class="nav-link"> <i class="fas fa-search"></i> </i> Consultar</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link"> <i class="fas fa-book"></i> Artigos</a>
        </li>
        <li class="nav-item">
          <a href="config.php" class="nav-link"> <i class="fas fa-cog"> </i> Configurações</a>
        </li>

         <li class="nav-item">
            <a href="index.php?action=logout" class="nav-link"><i class="fas fa-sign-out-alt"></i> Sair</a>
        </li>
        
      </ul>
    </aside>

    <div class="container">
      <h1 class="display-6 text-center mt-5">Bem-vindo ao OAB App</h1>
      <div class="row justify-content-evenly align-items-center mt-5">
          <div class="card">
            <a href="cadastrar/">
              <div class="card-body">
                <img src="assets/img/publicar.png" class="card-img-top"/> <!--testar com uma imagem valida-->
                <h4 class="card-title">Cadastrar</h4>
                <p class="card-text">Cadastro de questões da OAB</p>
              </div>
             </a>
          </div>

          <div class="card">
            <a href="consultar/">
              <div class="card-body">
                <img src="assets/img/consultar.png" class="card-img-top"/> <!--testar com uma imagem valida-->
                <h4 class="card-title">Consultar</h4>
                <p class="card-text">Consulta de questões oab</p>
              </div>
            </a>
          </div>

           <div class="card">
            <a href="">
              <div class="card-body">
                <img src="assets/img/artigo.png" class="card-img-top"/> <!--testar com uma imagem valida-->
                <h4 class="card-title">Artigos</h4>
                <p class="card-text">Artigos de advocacia</p>
              </div>
            </a>
          </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
  </body>
</html>
