
$(document).ready(function () {
    $("#departamentos").change(function () {
        $("#departamentos option:selected").each(function () {
            elegido = $(this).val();
            $.post("../../utilidades/modelo_provincias.php", {elegido: elegido}, function (data) {
                $("#provincias").html(data);                
            });
            
        });
    })
    $("#provincias").change(function () {
        $("#provincias option:selected").each(function () {
            elegido = $(this).val();
            $.post("../../utilidades/modelo_distritos.php", {elegido: elegido}, function (data) {
                $("#distritos").html(data);
            });
        });
    })
});


