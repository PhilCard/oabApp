
let modal_1 = document.getElementById("modal_assunto");
let modal_2 = document.getElementById('modal_disciplina')
let modal_assunto = document.getElementById("btn_assunto");
let modal_disciplina = document.getElementById('btn_disciplina');
let span = document.getElementsByClassName("close")[0];
let span2 = document.getElementsByClassName('close')[1];


document.addEventListener("DOMContentLoaded", () => {
    fetch("../actions/select_disciplina.php")
        .then(response => response.json())
        .then(disciplinas => {
            const selectDisciplina = document.getElementById("disciplina");
            const selectAssunto = document.getElementById("assunto");

            disciplinas.forEach(d => {
                const opt = document.createElement("option");
                opt.value = d.idDisciplina;
                opt.textContent = d.campoDisciplina;
                selectDisciplina.appendChild(opt);
            });

            selectDisciplina.addEventListener("change", () => {
                selectAssunto.innerHTML = "";

                const selectedId = selectDisciplina.value;
                const encontrado = disciplinas.find(d => d.idDisciplina === selectedId);

                if (encontrado) {
                    const opt = document.createElement("option");
                    opt.value = encontrado.idAssunto; // 👈 Envia o ID
                    opt.textContent = encontrado.campoAssunto; // 👈 Mostra o nome
                    selectAssunto.appendChild(opt);
                } else {
                    selectAssunto.innerHTML = "<option>Selecione uma disciplina primeiro</option>";
                }
            });
        })
        .catch(error => {
            console.error("Erro ao carregar disciplinas:", error);
        });
});



// When the user clicks the button, open the modal 
modal_assunto.onclick = function() {
    modal_1.style.display = "block";
}

modal_disciplina.onclick = function()
{
    modal_2.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal_1.style.display = "none";
}

span2.onclick = function() {
    modal_2.style.display = "none";
}







document.getElementById('cadastro_questoes').addEventListener('submit', function(event){

    let enunciado_input = document.getElementById('enunciado').value.trim();
    let alt_a_input = document.getElementById('alt_a').value.trim();
    let alt_b_input = document.getElementById('alt_b').value.trim();
    let alt_c_input = document.getElementById('alt_c').value.trim();
    let alt_d_input = document.getElementById('alt_d').value.trim();
    let correta_cmb = document.getElementById('correta').value.trim();
    let disciplina_cmb = document.getElementById('disciplina').value;
    let assunto_cmb = document.getElementById('assunto').value;

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