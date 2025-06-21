<?php require_once '../actions/select_assunto.php'; ?>
<form action="#" method="POST">
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
          <?php foreach($assuntos as $assunto): ?>
            <option value="0" disabled selected>Selecione o assunto</option>
            <option value="<?=$assunto['idAssunto']?>">
              <?= htmlspecialchars($assunto['campoAssunto'])?>
            </option>
          <?php endforeach; ?>
        </select>
      </div>
      <div class="modal-footer">
        <button id="salvar_disciplina" class="button">Salvar</button>
      </div>
    </div>
  </div>
</form>