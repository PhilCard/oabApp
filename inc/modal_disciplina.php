<?php require_once '../actions/select_assunto.php'; ?>
<form action="">
    <div class="modal fade" id="disciplina_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Cadastrar novo assunto</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nova-disciplina">Nova Disciplina</label>
                        <input type="text" id="nova-disciplina" placeholder="Digite a nova disciplina" autocomplete="off">
                        <select class="form-control" id="disciplina">
                            <?php foreach($assuntos as $assunto): ?>
                                <option value="0" disabled selected>Selecione o assunto</option>
                                <option value="<?=$assunto['idAssunto']?>">
                                <?= htmlspecialchars($assunto['campoAssunto'])?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Sair</button>
                    <button type="button" class="btn btn-primary">Cadastrar</button>
                </div>
            </div>
        </div>
    </div>
</form>