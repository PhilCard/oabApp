<form id="cadastro_questoes" action="../actions/insert_questoes.php" method="POST">
    <div class="form-group">
        <div class="d-inline-flex w-50">
            <select class="form-control" id="disciplina" name="disciplina">
                <option value="0" disabled selected>Selecione a disciplina</option>
            </select>
            <button type="button" class="btn btn-dark" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#disciplina_modal">+</button>
        </div>
        <p class="text-danger">Por favor, preencher campo obrigatório!</p>
    </div>

    <div class="form-group mt-3">
        <div class="d-inline-flex w-50">
            <select class="form-control" id="assunto" name="assunto">
                <option value="0" disabled selected>Selecione o assunto</option>
            </select>
             <button type="button" class="btn btn-dark" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#assunto_modal">+</button>
        </div>
        <p class="text-danger">Por favor, preencher campo obrigatório!</p>
    </div>

    <div class="form-group">
        <label for="enunciado">Enunciado</label>
        <textarea id="enunciado" name="enunciado" class="form-control" id="mensagem" rows="4"></textarea>
        <p class="text-danger">Por favor, preencher campo obrigatório!</p>
    </div>

    <div class="form-group">
        <label for="alt_a">alternativa A</label>
        <textarea class="form-control" id="alt_a" name="a"></textarea>
        <p class="text-danger">Por favor, preencher campo obrigatório!</p>
    </div>

    <div class="form-group">
        <label for="alt_b">alternativa B</label>
        <textarea class="form-control" id="alt_b" name="b"></textarea>
        <p class="text-danger">Por favor, preencher campo obrigatório!</p>
    </div>

    <div class="form-group">
        <label for="alt_c">alternativa C</label>
        <textarea class="form-control" id="alt_c" name="c"></textarea>
        <p class="text-danger">Por favor, preencher campo obrigatório!</p>
    </div>

    <div class="form-group">
        <label for="alt_d">alternativa D</label>
        <textarea class="form-control" id="alt_d" name="d"></textarea>
        <p class="text-danger">Por favor, preencher campo obrigatório!</p>
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
        <p class="text-danger">Por favor, preencher campo obrigatório!</p>
    </div>

    <div class="form-group">
        <label for="n_questao">N° questão</label>
        <input class="form-control" type="text" id="n_questao" name="num_questao" autocomplete="off">
        <p class="text-danger">Por favor, preencher campo obrigatório!</p>
    </div>
    <button type="submit" id="salva" class="btn btn-lg btn-dark">Cadastrar</button>
</form>