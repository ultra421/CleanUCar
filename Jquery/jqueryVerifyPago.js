var lastPagoID = 0;
var funcDisabled = false;

$("#cargarPagos").click(function() {
    console.log("let sgoo")

    if (funcDisabled) {
        return false;
    }

    $.ajax({
        type: "POST",
        url: "../../Ajax/cargarPagos.php",
        dataType : "JSON",
        data: {lastPagoID : lastPagoID},
        success: function (data) {
            console.log(data);
            if (data.error) { // si da error
                $("#pagos").append(
                    "<h2>No quedan mas pagos</h2>"
                )
                $("#cargarPagos").prop("disabled",true)
                funcDisabled = true
            } else {
                lastPagoID = data.pago_id
                $("#pagos").append(
                    "<div class = deskQR id = pago" + data.pago_id + "></div>"
                )
                $("#pago" + data.pago_id).html(`
                    <h2>Pago verificado</h2>
                    <h3>En: ` + data.nombre + `</h3>
                    <h4>Fecha: ` + data.fecha + `</h4>
                    <a href = "../Review/reviewForm.php">Subir una reseña</a>
                `)
            }
        },
    })
})

/*<div class = deskQR>
            <h2>Pago verificado</h2>
            <h3>En: Lorem Ipsum</h3>
            <img src = "../../Imagenes/qr-code.png">
            <a href = "../Review/reviewForm.php">Subir una reseña</a>
        </div> */