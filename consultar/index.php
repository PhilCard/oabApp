<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <title>Consultar</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/img/favicon-32x32.png">
  </head>
  <body>

    <aside class="sidebar">
      <h2 class="logo"> <img src="../assets/img/logo-top.svg"> OAB App</h2>
      <a href="../index.php" class="nav-link"> <i class="fas fa-home"> </i> Home</a>
      <a href="index.php" class="nav-link"> <i class="fas fa-search"></i> </i> Consultar</a>
      <a href="#" class="nav-link"> <i class="fas fa-book"></i> Artigos</a>
      <a href="../config.php" class="nav-link"> <i class="fas fa-cog"> </i> Configurações</a>
    </aside>

    <div class="main">
      <!-- Topbar -->
      <?php require_once '../inc/side_nav_bar.php';?>
    </div>

    <div class="content">
      <div class="search-bar">
        <input type="text" placeholder="Pesquisar disciplina...">
      </div>

      <?php require_once '../actions/lista_consulta.php'; ?>
      
      <div class="table-container">
        <table>
          <thead>
            <tr>
              <th>N° Questão</th>
              <th>Disciplina</th>
              <th>Assunto</th>
              <th>Ações</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($lista_tabela_consulta as $lista):?>
              <tr>
                <td><?=$lista['campoNumQuestao']?></td>
                <td><?=$lista['campoDisciplina']?></td>
                <td><?=$lista['campoAssunto']?></td>
                <td>
                  <button id="edit-btn-<?=$lista['idQuestoes']?>" class="action-btn edit-btn">Editar</button>
                  <button class="action-btn delete-btn">Excluir</button>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
    <?php require_once '../inc/modal_edit.php'; ?>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/edit_quest.js"></script>
    <!--<script src="../assets/js/app.js"></script>-->
  </body>
</html>
