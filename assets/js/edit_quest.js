$('.table-container').on('click', 'button', function() {
    let text = $(this).attr('id');
    let puro_id = text.replace('edit-btn-', '');
    //window.location = 'index.php?action=lista-edit&id=' + puro_id;
    //let url = "../actions/lista_questoes.php?action=lista-edit&id=" + puro_id;
    $('#modal_edit').show();
    $.ajax({
        url: '../actions/lista_questoes.php',
        type: "GET",
        dataType: "json",
        data: { action: "lista-edit", id: puro_id},
        success: function (data) {
            console.log(data)
            $("#enunciado").val(data.campoEnunciado)
            $("#alt_a").val(data.campoAlternativaA)
            $("#alt_b").val(data.campoAlternativaB)
            $("#alt_c").val(data.campoAlternativaC)
            $("#alt_d").val(data.campoAlternativaD)
            $("#correta").val(data.alternativaCorreta)
        },
        error: function (err) {
            console.log(err);
        }
    });
});

$(".close").eq(0).on("click", function () {
  $('#modal_edit').hide();
});


//padronizar nome quest ou questions
//criar botão salvar-edit
//criar ajax para post