$('.table').on('click', 'button', function() {
    let text = $(this).attr('id');
    let id = text.replace('edit-btn-', '');
    $('#modal_edit').show();
    $("#btn-salvar-edicao").data("id", id);
    
    $.ajax({
        url: '../actions/lista_questoes.php',
        type: "GET",
        dataType: "json",
        data: { action: "lista-edit", id: id},
        success: function (data) {
            $("#enunciado").val(data.campoEnunciado)
            $("#alt_a").val(data.campoAlternativaA)
            $("#alt_b").val(data.campoAlternativaB)
            $("#alt_c").val(data.campoAlternativaC)
            $("#alt_d").val(data.campoAlternativaD)
            $("#correta").val(data.alternativaCorreta)
            $("#n_questao").val(data.campoNumQuestao)
            
        },
        error: function (err) {
            console.log(err);
        }
    });
});

$("#form_edit").on("submit", function(e) {
    e.preventDefault();
    let id = $('#btn-salvar-edicao').data("id");
    let url = '../actions/edit_questoes.php?action=edit&id=' + id;

    $.ajax({
        url: url,
        type: "POST",
        dataType: "TEXT",
        data:{
            id: id,
            enunciado: $('#enunciado').val(),
            a: $('#alt_a').val(),
            b: $('#alt_b').val(),
            c: $('#alt_c').val(),
            d: $('#alt_d').val(),
            correta: $('#correta').val(),
            num_questao : $('#n_questao').val()
        } 
    ,
        /*
        beforeSend: function () {
            $("#spResultado").html("Processando...");
        },*/

        success: function (data) {
            console.log(data);
        },
        error: function (error) {
            console.log(error);
        },
        complete: function () {}
    });

});