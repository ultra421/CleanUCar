$( document ).ready(comenzar())

function comenzar(){

    $("#divdesaparecedor").toggle();
    $("#divemergente").toggle();

    $("#Reserv").css({"position":"absolute","height":"79%","left": "-400px"});



$("#ReservContent").click(function(){

    $("#divdesaparecedor").toggle();
    $("#divemergente").toggle();


})


let abierto = false;
$(fakeMap).click(function(){
    if (abierto == false){
        $("#Reserv").animate({"width":"30%", "left": "0px"});
       
        abierto = true;
    }else{
        $("#Reserv").animate({"width":"0%","left": "-400px"});
        
        abierto = false;
    }
  
})
}
