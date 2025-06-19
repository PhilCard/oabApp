<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <title>Consultar</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
  </head>
  <body>

    <aside class="sidebar">
      <h2 class="logo"> <img src="../assets/img/logo-top.svg"> OAB App</h2>
      <a href="../index.html" class="nav-link"> <i class="fas fa-home"> </i> Home</a>
      <a href="../config.php" class="nav-link"> <i class="fas fa-cog"> </i> Configurações</a>
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
    </div>

    <div class="content">
      <div class="search-bar">
        <input type="text" placeholder="Pesquisar disciplina...">
      </div>

      <div class="table-container">
        <table>
          <thead>
            <tr>
              <th>Disciplina</th>
              <th>Assunto</th>
              <th>Data</th>
              <th>Ações</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Direito Constitucional</td>
              <td>Controle de Constitucionalidade</td>
              <td>07/05/2025</td>
              <td>
                <button class="action-btn edit-btn">Editar</button>
                <button class="action-btn delete-btn">Excluir</button>
              </td>
            </tr>
            <tr>
              <td>Ética Profissional</td>
              <td>Prerrogativas do Advogado</td>
              <td>08/05/2025</td>
              <td>
                <button class="action-btn edit-btn">Editar</button>
                <button class="action-btn delete-btn">Excluir</button>
              </td>
            </tr>
            <tr>
              <td>Direito Penal</td>
              <td>Crimes contra a vida</td>
              <td>10/05/2025</td>
              <td>
                <button class="action-btn edit-btn">Editar</button>
                <button class="action-btn delete-btn">Excluir</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <script src="../assets/js/app.js"></script>
  </body>
</html>
