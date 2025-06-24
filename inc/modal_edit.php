<form action="#" method="POST"> 
  <div id="modal_edit" class="edit-questoes">
    <div class="modal-content" style="width:60%">
      <div class="modal-header">
        <span class="close">&times;</span>
        <h2>Editar questão</h2>
      </div>

      <div class="modal-body">
        
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
        <div id="text-danger"></div>
      </div>

      <div class="modal-footer">
        <div class="botoes">
          <button type="submit" id="salva" class="salvar button">Salvar</button>
        </div>
      </div>
    </div>
  </div>
</form>

<?php //utilizar ajax para pegar o parametro no get ?action=edit&id=variavel_com_id ?>