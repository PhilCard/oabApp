
document.getElementById('cancel').addEventListener('click', function(){
    window.location = '../index.html';
});

document.getElementById('cadastro_questoes').addEventListener('submit', function(event){

    let = enunciado_input = document.getElementById('enunciado').value.trim();
    let = alt_a_input = document.getElementById('alt_a').value.trim();
    let = alt_b_input = document.getElementById('alt_b').value.trim();
    let = alt_c_input = document.getElementById('alt_c').value.trim();
    let = alt_d_input = document.getElementById('alt_d').value.trim();
    let = correta_cmb = document.getElementById('correta').value.trim();
    let = disciplina_cmb = document.getElementById('disciplina').value;
    let = assunto_cmb = document.getElementById('assunto').value;

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
    }
    else
    {
        alert("Por favor, preencha o campo nome.");
        event.preventDefault();
    }

});