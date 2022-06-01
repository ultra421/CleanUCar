$("#mainContent > a").click(function(e){
    e.preventDefault();
    console.log("going to pay");
    console.log(sessionStorage.getItem("lavado"));
    $.ajax({
        type: "POST",
        url: "../../Ajax/uploadPago.php",
        dataType : "JSON",
        data: {lavadoID : sessionStorage.getItem("lavado")},
        success : function(data) {
            console.log(data)
            if (data.error) {
                console.log("error en el insert");
            } else {
                console.log("aaa");
                window.location = "../PagosRealizados/VerifyPago.php"
            }
        },
        error: function(a,b,c){
            console.log(a);
            console.log(b);
            console.log(c);
        }

    })

})