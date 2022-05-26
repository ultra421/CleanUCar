$( document ).ready(comenzar())

function comenzar(){

    $("#divdesaparecedor").toggle();
    $("#divemergente").toggle();

    $("#Reserv").css({"position":"absolute","height":"79%","left": "-400px"});


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
            success : function(data){
                $("#tituloLavado").html(data.nombre);
                $("#Precio").html(data.precio + "€");
                console.log(data);
            }
        });
    }
  
})

