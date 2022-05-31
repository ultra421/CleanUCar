$( document ).ready(comenzar())

function comenzar(){

    $("#divdesaparecedor").toggle();
    $("#divemergente").toggle();

    $("#Reserv").css({"position":"absolute","height":"79%","left": "-600px"});


//Desplegable lateral
if(screen.width > 600){
    console.log("pantalla lateral");
    lateral();
}else{
    console.log("Pantalla inferior");
    inferior();
}

function lateral(){

$("#Reservpc").show();
$("#ReservContent").click(function(){

    $("#divdesaparecedor").toggle();
    $("#divemergente").toggle(); 
})
$("#divdesaparecedor").click(function(){
    $("#divdesaparecedor").toggle();
    $("#divemergente").toggle();
}) 

}

function inferior(){

    $("#Reservpc").hide();
    $("#")

}

}

// Funcion para actualizar sidebar izquierda info del lavado

function updateLavado(data){
    $("#tituloLavado").html(data.nombre);
    $("#Precio").html(data.precio + "€");
    sessionStorage.setItem("lavado",data.lavado_id);
    console.log(data); 
}

// Abrir fakemap

let abierto = false;
$(fakeMap).click(function(){

    if (abierto == false){
        $("#Reserv").animate({"width":"30%", "left": "0px"});
       
        abierto = true;
    }else{
        $("#Reserv").animate({"width":"0%","left": "-400px"});
        
        abierto = false;
    }

    // Voy a poner aqui lo de ajax para no hacer 2 funciones

    if (abierto == true) {
        console.log("asking for ajax");
        $.ajax({
            type: "POST",
            url: "../../Ajax/getLavadoInfo.php",
            dataType : "json",
            data :{},
            success : function(data) {
                $("#tituloLavado").html(data.nombre);
                $("#Precio").html(data.precio + "€");
                sessionStorage.setItem("lavado",data.lavado_id);
                console.log(data); 
            } 
        });
    }
  
})

$("#masimagenes").click(function(){
    $.ajax({
        type: "POST",
        url: "../../Ajax/getImagen.php",
        dataType : "json",
        data: {},
        success : function(data){
            console.log(data)
            $("#divemergente").append(
                "<img src ='../../Imagenes/lavados/" + data.direccion+"'>"
            )
        }
    })
});

$("#nextLavado").click(function() {
    console.log("asking for next id actual = " + sessionStorage.getItem("lavado"));    
    $.ajax({
        type: "POST",
        url: "../../Ajax/nextLavado.php",
        dataType : "json",
        data: {lavado : sessionStorage.getItem("lavado")},
        success : function(data) {
            // data sera false si no hay mas
            if (data != false) {
                $("#tituloLavado").html(data.nombre);
                $("#Precio").html(data.precio + "€");
                sessionStorage.setItem("lavado",data.lavado_id);
                $("#lavadoID").val(data.lavado_id);
                console.log(data); 
            }  
        },
        error: function(a,b,c) {
            console.log("erorr :((((");
            console.log(a,b,c);
        }
    })
})

$("#previoLavado").click(function() {
    console.log("asking for previo id actual = " + sessionStorage.getItem("lavado"))
    $.ajax({
        type: "POST",
        url: "../../Ajax/prevLavado.php",
        dataType : "json",
        data: {lavado : sessionStorage.getItem("lavado")},
        success : function(data) { 
            // data sera false si no hay mas
            if (data != false) {
                $("#tituloLavado").html(data.nombre);
                $("#Precio").html(data.precio + "€");
                sessionStorage.setItem("lavado",data.lavado_id);
                console.log(data); 
            } 
        },
        error: function(a,b,c) {
            console.log("erorr :((((");
            console.log(a,b,c);
        }
    })
})