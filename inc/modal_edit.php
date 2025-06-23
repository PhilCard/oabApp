<form action="#" method="POST"> 
  <div id="edit_table" class="edit-questoes">
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
        <button id="edit_save" class="button">Salvar</button>
      </div>
    </div>
  </div>
</form>

<?php //utilizar ajax para pegar o parametro no get ?action=edit&id=variavel_com_id ?>