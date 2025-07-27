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