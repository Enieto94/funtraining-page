$("#contactenos").submit(function (event) {
    event.preventDefault();
    const nombres = $("#nombres").val();
    const correo = $("#correo").val();
    const asunto = $("#asunto").val();
    const servicio = $("#servicio").val();
    const mensaje = $("#mensaje").val();

    if (nombres == "") {
        $("#nombres").notify("El campo no debe ir vacío", { position: "right" });
    } else if (correo == "") {
        $("#correo").notify("El campo no debe ir vacío", { position: "right" });
    } else if (asunto == "") {
        $("#asunto").notify("El campo no debe ir vacío", { position: "right" });
    } else if (servicio == "") {
        $("#servicio").notify("El campo no debe ir vacío", { position: "right" });
    } else if (mensaje == "") {
        $("#mensaje").notify("El campo no debe ir vacío", { position: "right" });
    } else {
        swal("¿Correo Enviado!", "Tu solicitud ha sido enviada, ¡Responderemos lo más pronto posible!", "success");
        document.contactenos.submit();
    }

});