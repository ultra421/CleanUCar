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
            if (data.result == true) {
               console.log("aaa");
               window.location = "../PagosRealizados/VerifyPago.php"
            } else {
                console.log("aaa2");
            }
        },
        error: function(a,b,c){
            console.log(a);
            console.log(b);
            console.log(c);
        }

    })

})