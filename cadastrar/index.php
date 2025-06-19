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
      <form id="cadastro_questoes" action="#" method="POST" class="container">
        <div class="selects">
          <div class="select-group">
            <label for="assunto">Assunto:</label>
            <div class="select-inline row">
              <select id="assunto">
                <option value="0" disabled selected>Selecione o assunto</option>
                <option value="matematica">Matemática</option>
                <option value="portugues">Português</option>
              </select>
              <button id="btn_assunto" type="button" class="button">+</button>
            </div>
          </div>

          <div class="select-group">
            <label for="disciplina">Disciplina:</label>
            <div class="select-inline row">
              <select id="disciplina">
                <option value="0" disabled selected>Selecione a disciplina</option>
                <option value="geometria">Geometria</option>
                <option value="gramatica">Gramática</option>
              </select>
              <button id="btn_disciplina" type="button" class="button">+</button>
            </div>
          </div>
        </div>

        <div class="enunciado">
          <label for="enunciado">Enunciado:</label>
          <textarea id="enunciado" rows="4" placeholder="Digite o enunciado da questão..."></textarea>
        </div>

        <div class="alternativas">
          <div class="alternativa">
            <textarea id="alt_a" placeholder="Alternativa A"></textarea>
          </div>
          <div class="alternativa">
            <textarea id="alt_b" placeholder="Alternativa B"></textarea>
          </div>
          <div class="alternativa">
            <textarea id="alt_c" placeholder="Alternativa C"></textarea>
          </div>
          <div class="alternativa">
            <textarea id="alt_d" placeholder="Alternativa D"></textarea>
          </div>
        </div>

        <div class="alternativa-correta">
          <label for="correta">Alternativa Correta:</label>
          <select id="correta">
            <option value="0" disabled selected>Selecione a alternativa correta</option>
            <option value="A">Alternativa A</option>
            <option value="B">Alternativa B</option>
            <option value="C">Alternativa C</option>
            <option value="D">Alternativa D</option>
          </select>
        </div>

        <div class="botoes">
          <button type="submit" id="salva" class="salvar button">Salvar</button>
        </div>
        <div id="text-danger"></div>
      </form>
    </div>

    <div id="modal_assunto" class="modal1">
      <div class="modal-content">
        <div class="modal-header">
          <span class="close">&times;</span>
          <h2>Cadastrar Novo Assunto</h2>
        </div>
        <div class="modal-body">
          <label for="novo-assunto">Novo Assunto</label>
          <input type="text" id="novo-assunto" placeholder="Ex: Mandado de Segurança">
        </div>
        <div class="modal-footer">
          <button id="salvar_assunto" class="button">Salvar</button>
        </div>
      </div>
    </div>


    <div id="modal_disciplina" class="modal2">
      <div class="modal-content">
        <div class="modal-header">
          <span class="close">&times;</span>
          <h2>Cadastrar Nova disciplina</h2>
        </div>
        <div class="modal-body">
          <label for="Nova disciplina">Nova Disciplina</label>
          <input type="text" id="" placeholder="Ex: Mandado de Segurança">
          <select id="disciplina">
            <option value="">Selecione o assunto</option>
            <option value="constitucional">Direito Constitucional</option>
        </select>
        </div>
        <div class="modal-footer">
          <button id="salvar_disciplina" class="button">Salvar</button>
        </div>
      </div>
    </div>
    <script src="../assets/js/app.js"></script>
  </body>
</html>
