// Ajuster la taille de l'élément ".loading" pour correspondre à la taille de la fenêtre du navigateur
$(".loading").height($(window).height());
$(".loading").width($(window).width());

// Déplacer l'image à l'intérieur de ".loading" vers le bas (75% de la hauteur de ".loading")
$(".loading img").css({
    paddingTop: ($(".loading").height() - $(".loading img").height()) * 0.75
});

// Répéter l'ajustement de taille et de positionnement lors du redimensionnement de la fenêtre
$(window).resize(function () {
    $(".loading").height($(window).height());
    $(".loading").width($(window).width());

    $(".loading img").css({
        paddingTop: ($(".loading").height() - $(".loading img").height()) * 0.75,
        paddingLeft: ($(".loading").width() - $(".loading img").width()) / 2
    });
});

// Cloner un élément ".original" lors d'un clic sur le corps de la page
$("body").on("click", function (e) {
    $(".original").clone(true).appendTo("body").css({
        left: e.pageX - 16,
        top: e.pageY - 16
    }).removeClass("original");
});
