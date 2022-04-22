$("#slider").slick({
    dots: true,
    slidesToShow: 2,
    slidesToScroll: 2,
    autoplay: true,
    prevArrow: "<span>previ</span>",
    responsive: [
        {
            breakpoint: 800,
            settings: {
                slidesToScroll: 1,
                slidesToShow: 1
            }
        }
    ]
});

$("#formulari1").validate({
    focusCleanup: true,
    rules: {
        nombre: {
            minlength: 2,
            maxlength: 10
        },
        hermanos: {
            required: true,
            range: [0, 10]
        }
    },
    messages: {
        nombre: {
            required: "<b class='error'>requerido</b>",
            minlength: "<span>mínimo 2 letras</span>",
            maxlength: "máximo 10 letra"
        }
    }
});
$("#formulari1").valid();