<form id="cadastro_questoes" action="../actions/insert_questoes.php" method="POST">
    <div class="form-group">
        <div class="d-inline-flex w-50">
            <select class="form-control" id="disciplina" name="disciplina">
                <option value="0" disabled selected>Selecione a disciplina</option>
            </select>
            <button class="btn btn-dark" id="btn_disciplina" type="button">+</button>
        </div>
    </div>

    <div class="form-group mt-3">
        <div class="d-inline-flex w-50">
            <select class="form-control" id="assunto" name="assunto">
                <option value="0" disabled selected>Selecione o assunto</option>
            </select>
            <button class="btn btn-dark" id="btn_assunto" type="button">+</button>
        </div>
    </div>

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
    <button type="submit" id="salva" class="btn btn-lg btn-dark">Cadastrar</button>
</form>