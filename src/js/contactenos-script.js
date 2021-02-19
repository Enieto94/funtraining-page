$("#contactenos").submit(function () {
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
        axios({
            method: 'post',
            url: '../../contactenos/enviar.php',
            headers: {
                'Content-Type': 'application/json'
            },
            data: {
                nombres,
                correo,
                asunto,
                servicio,
                mensaje
            }
        })
            .then(response => response.json() )
            .then(function (data) {
                // swal("¡Gracias!", "Hemos recibido tu información", "success");
                console.log(data);
            })
            .catch(function (error) {
                console.log(error);
            });
    }

});