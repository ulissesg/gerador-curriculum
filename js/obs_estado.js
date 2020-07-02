$("#estados").on("change", function () {
    var estadojs = $("#estados").val();
    alert(estadojs);
    $.ajax({
        url: 'seletor_cidade.php',
        type: 'POST',
        data: { estado: estadojs }
    });
});
