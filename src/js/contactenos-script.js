(function (i, s, o, g, r, a, m) { i.GoogleAnalyticsObject = r; i[r] = i[r] || function () { (i[r].q = i[r].q || []).push(arguments) }, i[r].l = 1 * new Date(); a = s.createElement(o), m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m) })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga'); ga('create', 'UA-41081843-1', 'auto'); ga('send', 'pageview'); function soloNumeros(e) { tecla = (document.all) ? e.keyCode : e.which; if (tecla == 8) return !0; patron = /^[0-9]*$/; te = String.fromCharCode(tecla); return patron.test(te) }
function soloLetras(e) { tecla = (document.all) ? e.keyCode : e.which; if (tecla == 8) return !0; patron = /^([A-Za-zÑñáéíóúÁÉÍÓÚ ]+)$/; te = String.fromCharCode(tecla); return patron.test(te) }
function soloEmail(e) { tecla = (document.all) ? e.keyCode : e.which; if (tecla == 8) return !0; patron = /^([0-9A-Za-zÑñáéíóúÁÉÍÓÚ.@-_]+)$/; te = String.fromCharCode(tecla); return patron.test(te) }

$("#contactenos").submit(function () {
    $("#nombres", "#asunto", "#servicio","#mensaje").keypress(function (e) {
        return soloLetras(e);
    });
    $("#correo").keypress(function (e) {
        return soloEmail(e);
    });

    $("#btn-enviar").click(function () {
        event.preventDefault();
        enviarForm();
    });
});

function enviarForm() {
    var nombres = $("#nombres").val();
    var correo = $("#correo").val();
    var asunto = $("#asunto").val();
    var servicio = $("#servicio").val();
    var mensaje = $("#mensaje").val();
    if (nombres == "") {
        $("#nombres").notify("Escribe tu nombre", "error", { position: "top right" });
    } else if (correo == "") {
        $("#correo").notify("Escribe tu teléfono", "error", { position: "top right" });
    } else if (asunto == "") {
        $("#asunto").notify("Escribe tu telefono", "error", { position: "top right" });
    } else if (servicio == "") {
        $("#servicio").notify("Escribe tu asunto", "error", { position: "top right" });
    } else if (mensaje == "") {
        $("#mensaje").notify("Escribe tu mensaje", "error", { position: "top right" });
    } else {
        console.log("Correo:");
        var dataSend = { solicitud: "enviarForm", nombres, correo, asunto, servicio, mensaje };
        $.ajax({ url: "../../controller/contactenos-controller.php", data: dataSend, method: "POST", dataType: "JSON", cache: !1 })
            .done(function (sResponse) {
                if (sResponse.respuesta == "ok") {
                    
                    swal(sResponse.content.title, sResponse.content.text, "success");
                    
                } else {
                    swal("Error: " + sResponse.content.title, sResponse.content.text, "success");
                }
            })
            .always(function () {
                reiniciarFormulario();
            });
    }
}
function reiniciarFormulario() {
    $("input").val("");
    $("textarea").val("");
}
