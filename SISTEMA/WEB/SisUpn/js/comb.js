
$(document).ready(function () {
    $("#marca").change(function () {
        $("#marca option:selected").each(function () {
            elegido = $(this).val();
            $.post("modelos.php", {elegido: elegido}, function (data) {
                $("#modelo").html(data);
            });
        });
    })
});


