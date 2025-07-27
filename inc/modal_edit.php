<form id="form_edit" action="#" method="post">

    <div class="modal fade" id="modal_edit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Editar questão</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                
                <div class="form-group">
                    <label for="Enunciado">Enunciado</label>
                    <textarea id="enunciado" name="enunciado" class="form-control" id="mensagem" rows="4"></textarea>
                </div>

                <div class="form-group">
                    <label for="">alternativa A</label>
                    <textarea class="form-control" id="alt_a" name="a"></textarea>
                </div>

                <div class="form-group">
                    <label for="">alternativa B</label>
                    <textarea class="form-control" id="alt_b" name="b"></textarea>
                </div>

                <div class="form-group">
                    <label for="">alternativa C</label>
                    <textarea class="form-control" id="alt_c" name="c"></textarea>
                </div>

                <div class="form-group">
                    <label for="">alternativa D</label>
                    <textarea class="form-control" id="alt_d" name="d"></textarea>
                </div>

                <div class="form-group">
                    <label for="correta">Alternativa Correta:</label>
                    <select class="form-control" id="correta" name="correta">
                        <option value="0" disabled selected>Selecione a alternativa correta</option>
                        <option value="A">Alternativa A</option>
                        <option value="B">Alternativa B</option>
                        <option value="C">Alternativa C</option>
                        <option value="D">Alternativa D</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="usuario">N° questão</label>
                    <input class="form-control" type="text" id="n_questao" name="num_questao" autocomplete="off">
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Sair</button>
                <button type="submit" id="btn-salvar-edicao" class="btn btn-primary">Salvar edição</button>
            </div>
            </div>
        </div>
    </div>

</form>