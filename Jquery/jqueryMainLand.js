$( document ).ready(comenzar())

function comenzar(){
    let abierto = false;
    $("#divdesaparecedor").toggle();
    $("#divemergente").toggle();

    $("#Reserv").css({"position":"absolute","height":"79%","left": "-400px"});


let muestraLateral=false;



$(window).ready(function(){

    if($(window).width() > 600 && !muestraLateral){
        muestraLateral=true;
        lateral();
    }else if($(window).width() < 600 && muestraLateral){
        muestraLateral=false;
        inferior();
    } 
})


//Desplegable lateral
function lateral(){

    
    $("#fakeMap").click(function(){
        if (abierto == false){
            $("#Reserv").animate({"width":"30%", "left": "0px"});
           
            abierto = true;
        }else{
            $("#Reserv").animate({"width":"0%","left": "-400px"});
            
            abierto = false;
        }
      
    })
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




}
