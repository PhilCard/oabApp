$('.table-container').on('click', 'button', function() {
    let text = $(this).attr('id');
    let puro_id = text.replace('edit-btn-', '');
    window.location = 'index.php?action=edit&id=' + puro_id;

    /*
    $.ajax({
            url: "action/UsuarioAction.php?req=2",
            type: "GET",
            dataType: "TEXT",
            data: {},
            success: function (data) {
                console.log(data);
                //$("#bqResultado").html(data);
            },
            error: function (error) {
                console.log(error);
            }
        });
    */
});