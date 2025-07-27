$(document).ready(function () {
    $.ajax({
        url: "../actions/select_disciplina.php",
        type: "GET",
        dataType: "json",
        success: function (disciplinas) {
            const $selectDisciplina = $("#disciplina");
            const $selectAssunto = $("#assunto");

            // Preenche o select de disciplinas
            $.each(disciplinas, function (index, d) {
                $selectDisciplina.append(
                    $("<option>", {
                        value: d.idDisciplina,
                        text: d.campoDisciplina
                    })
                );
            });
    
            $selectDisciplina.on("change", function () {
                $selectAssunto.empty();

                const selectedId = $(this).val();
                const encontrado = disciplinas.find(d => d.idDisciplina === selectedId);

                if (encontrado) {
                    $selectAssunto.append(
                        $("<option>", {
                            value: encontrado.idAssunto,
                            text: encontrado.campoAssunto
                        })
                    );
                }
            });
        },
        error: function (xhr, status, error) {
            console.error("Erro ao carregar disciplinas:", error);
        }
    });
});


document.getElementById('cadastro_questoes').addEventListener('submit', function(event){ //separar em um script, já que irei usar duas vezes, uma no insert questoes e outra no edit

    let disciplina_cmb = document.getElementById('disciplina').value;
    let assunto_cmb = document.getElementById('assunto').value;
    let enunciado_input = document.getElementById('enunciado').value.trim();
    let alt_a_input = document.getElementById('alt_a').value.trim();
    let alt_b_input = document.getElementById('alt_b').value.trim();
    let alt_c_input = document.getElementById('alt_c').value.trim();
    let alt_d_input = document.getElementById('alt_d').value.trim();
    let correta_cmb = document.getElementById('correta').value.trim();
    let n_questao = document.getElementById('n_questao').value.trim();
    
    //usar classe e [] igual no span close, pegar o array DOM para exibir msg de erro 

    if(!enunciado_input == '')
    {
        if(alt_a_input == '')
        {
            alert('preencher alternativa');
            event.preventDefault();
        }
        else if(alt_b_input =='')
        {
            alert('preencher alternativa');
            event.preventDefault();
        }
        else if(alt_c_input == '')
        {
            alert('preencher alternativa');
            event.preventDefault();
        }
        else if(alt_d_input == '')
        {
            alert('preencher alternativa');
            event.preventDefault();
        }
        else if(correta_cmb == '0')
        {
            alert('selecionar alternativa correta');
            event.preventDefault();
        }

        else if(disciplina_cmb == '0')
        {
            alert('selecionar disciplina');
            event.preventDefault();
        }

        else if(assunto_cmb == '0')
        {
            alert('selecionar assunto');
            event.preventDefault();
        }

        else if(n_questao == '')
        {
            alert('preencher n questão');
            event.preventDefault();
        }
    }
    else
    {
        alert("Por favor, preencha o campo nome.");
        event.preventDefault();
    }

});