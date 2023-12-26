$(document).ready(function () {

    $("#parar").click(function (event) {
        $("#trabajo").prop('checked', "false");
    });

    $("#procesar").click(function (event) {
        if ($("#trabajo").prop('checked'))
            eliminar();
    });

    function continuar() {
        setTimeout(function () {
            if ($("#trabajo").prop('checked'))
                eliminar();
        }, 5000);
    }

    function eliminar() {

        var parametros = {
            "desde": $("#desde").val(),
            "cuantos": $("#cuantos").val()
        };

        $.ajax({
            data: parametros,
            url: 'isisToMYSQL.php',
            dataType: 'html',
            type: 'post',
            cache: false,
            success: function (data) {

                $("#desde").val(parseInt($("#desde").val()) + parseInt($("#cuantos").val()));

                $("#res").html($("#res").html() + data);
                continuar();
            },
            error: function (xhr, status, error) { alert("NO CERRAR ESTE MENSAJE! - INFORMAR A INFORMATICA: delete item - parametros - " + xhr + " - " + status + " - " + error); }
        });
    }



});