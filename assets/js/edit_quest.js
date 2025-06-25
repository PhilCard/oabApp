$('.table-container').on('click', 'button', function() {
    let text = $(this).attr('id');
    let id = text.replace('edit-btn-', '');
    $('#modal_edit').show();
    $("#btn-salvar-edicao").data("id", id)
    
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

$(".close").eq(0).on("click", function () {
  $('#modal_edit').hide();
});

$("#form_edit").on("submit", function(e) {
    e.preventDefault();
    let id = $('#btn-salvar-edicao').data("id");
    window.location = 'index.php?action=edit&id=' + id;
});