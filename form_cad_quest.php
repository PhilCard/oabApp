<form id="cadastro_questoes" action="../actions/insert_questoes.php" method="POST">
  <div class="selects">
    <div class="select-group">
      <label for="disciplina">Disciplina:</label>
      <div class="select-inline row">
        <select id="disciplina" name="disciplina">
          <option value="0" disabled selected>Selecione a disciplina</option>
        </select>
        <button id="btn_disciplina" type="button" class="button">+</button>
      </div>
    </div>

    <div class="select-group">
      <label for="assunto">Assunto:</label>
      <div class="select-inline row">
        <select id="assunto" name="assunto">
          <option value="0" disabled selected>Selecione o assunto</option>
        </select>
        <button id="btn_assunto" type="button" class="button">+</button>
      </div>
    </div>
  </div>

  <div class="enunciado">
    <label for="enunciado">Enunciado:</label>
    <textarea id="enunciado" name="enunciado" rows="4" placeholder="Digite o enunciado da questão..."></textarea>
  </div>

  <div class="alternativas">
    <div>
      <textarea id="alt_a" name="a" placeholder="Alternativa A"></textarea>
    </div>
    <div>
      <textarea id="alt_b" name="b" placeholder="Alternativa B"></textarea>
    </div>
    <div>
      <textarea id="alt_c" name="c" placeholder="Alternativa C"></textarea>
    </div>
    <div>
      <textarea id="alt_d" name="d" placeholder="Alternativa D"></textarea>
    </div>
  </div>

  <div class="alternativa-correta">
    <label for="correta">Alternativa Correta:</label>
    <select id="correta" name="correta">
      <option value="0" disabled selected>Selecione a alternativa correta</option>
      <option value="A">Alternativa A</option>
      <option value="B">Alternativa B</option>
      <option value="C">Alternativa C</option>
      <option value="D">Alternativa D</option>
    </select>
  </div>

  <label> digite o N° da questão: </label>
  <div style="width: 200px;">
    <input id="n_questao" name="num_questao" type="text" placeholder="n° da questão" autocomplete="off"/>
  </div>
  <div class="botoes">
    <button type="submit" id="salva" class="salvar button">Salvar</button>
  </div>
  <div id="text-danger"></div>
</form>