document.getElementById('cadastro_questoes').addEventListener('submit', function(event) {
    //criar função para centralizar erro de campos, similar vence - perdeu do jokenpo
    let disciplina_cmb = document.getElementById('disciplina').value;
    let enunciado_input = document.getElementById('enunciado').value.trim();
    let alt_a_input = document.getElementById('alt_a').value.trim();
    let alt_b_input = document.getElementById('alt_b').value.trim();
    let alt_c_input = document.getElementById('alt_c').value.trim();
    let alt_d_input = document.getElementById('alt_d').value.trim();
    let correta_cmb = document.getElementById('correta').value.trim();
    let n_questao = document.getElementById('n_questao').value.trim();

    if(disciplina_cmb !== '0')
    {
       if(enunciado_input == '')
        {
            document.querySelectorAll('.text-danger')[0].classList.remove('ativo')
            document.querySelectorAll('.text-danger')[2].classList.add('ativo')
            event.preventDefault();
        }
        else
        {
            document.querySelectorAll('.text-danger')[2].classList.remove('ativo')
        }

        if(alt_a_input == '')
        {
            document.querySelectorAll('.text-danger')[3].classList.add('ativo')
            event.preventDefault();
        }
        else
        {
            document.querySelectorAll('.text-danger')[3].classList.remove('ativo')
        }

        if(alt_b_input =='')
        {
            document.querySelectorAll('.text-danger')[4].classList.add('ativo')
            event.preventDefault();
        }
        else
        {
            document.querySelectorAll('.text-danger')[4].classList.remove('ativo')
        }

        if(alt_c_input == '')
        {
            document.querySelectorAll('.text-danger')[5].classList.add('ativo')
            event.preventDefault();
        }
        else
        {
            document.querySelectorAll('.text-danger')[5].classList.remove('ativo')
        }

        if(alt_d_input == '')
        {
            document.querySelectorAll('.text-danger')[6].classList.add('ativo')
            event.preventDefault();
        }
        else
        {
            document.querySelectorAll('.text-danger')[6].classList.remove('ativo')
        }

        if(correta_cmb == '0')
        {
            document.querySelectorAll('.text-danger')[7].classList.add('ativo')
            event.preventDefault();
        }
        else
        {
            document.querySelectorAll('.text-danger')[7].classList.remove('ativo')
        }

        if(n_questao == '')
        {
            document.querySelectorAll('.text-danger')[8].classList.add('ativo')
            event.preventDefault();
        }
        else
        {
            document.querySelectorAll('.text-danger')[8].classList.remove('ativo')
        }
    }
    else
    {
        document.querySelectorAll('.text-danger')[0].classList.add('ativo')
        event.preventDefault();
    }
});