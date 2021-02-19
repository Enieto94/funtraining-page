$("#contactenos").submit(function () {
    event.preventDefault();

    const nombres = $("#nombres").val();
    const correo = $("#nombres").val();
    const asunto = $("#nombres").val();
    const servicio = $("#nombres").val();
    const mensaje = $("#nombres").val();

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
    }else {
        swal("¡Gracias!", "Hemos recibido tu información", "success");
    }

    

    axios({
        method: 'post',
        url: '../../contactenos/enviar.php',
        data: {
            nombres,
            correo,
            asunto,
            servicio,
            mensaje
        }
    })
    .then(function (response) {
        console.log(response);
    })
    .catch(function (error) {
        console.log(error);
    });
});