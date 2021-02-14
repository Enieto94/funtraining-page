
$("#btn-enviar").click(function () {
    event.preventDefault();
    if ($("#nombres").val() == "") {
        $("#nombres").notify("El campo no debe ir vacío", { position: "right" });
    } else if ($("#correo").val() == "") {
        $("#correo").notify("El campo no debe ir vacío", { position: "right" });
    } else if ($("#asunto").val() == "") {
        $("#asunto").notify("El campo no debe ir vacío", { position: "right" });
    } else if ($(".servicio").val() == "") {
        $(".servicio").notify("El campo no debe ir vacío", { position: "right" });
    } else if ($("#mensaje").val() == "") {
        $("#mensaje").notify("El campo no debe ir vacío", { position: "right" });
    }else {
        swal("Gracias por registrar sus datos", "Será redireccionado en breve...", "success");
        document.contactenos.submit();
    }
});