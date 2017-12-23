$(document).ready(Ini);
var db = $( "#divContent" );
// variables de links
var lda, lca, lpr, lma, lof;
// variables de comandos
var lSalir;

lda = $( "#lnkDatos" );
lca = $( "#lnkCategoria" );
lpr = $( "#lnkProductos" );
lma = $( "#lnkMarcas" );
lof = $( "#lnkOfertas" );

function Ini(){
    //db.load("view/categoria.php");
    //$( ".category" ).html("Categorías");
    //db.effect( 'slide' , '', 1000, null );
} 

function mostrarPantalla(v){
    switch(v){
        case 'general': 
            db.load("./view/vGeneral.php");
            $( ".category" ).html("Controla el contenido del Slider, datos principales y clientes.");
            hideMenu();
            break;
        case 'categoria': 
            db.load("./view/vCategoria.php");
            $( ".category" ).html("Controla el contenido de las categorías");
            hideMenu();
            break;
        case 'producto': 
            db.load("./view/vProducto.php");
            $( ".category" ).html("Controla el contenido de los productos");
            hideMenu();
            break;
        case 'marca': 
            db.load("./view/vMarca.php");
            $( ".category" ).html("Controla el contenido de las marcas");
            hideMenu();
            break;
        case 'oferta': 
            db.load("./view/vOferta.php");
            $( ".category" ).html("Controla el contenido de las ofertas");
            hideMenu();
            break;
    }
}

function hideMenu(){
    if($(window).width() <= 991){
        $toggle = $('.navbar-toggle');
        $('html').removeClass('nav-open');
        $('#bodyClick').remove();
        setTimeout(function(){
            $toggle.removeClass('toggled');
         }, 400);
    }
}

function cerrar_sesion(){
    $.ajax({
        data:  {"op" : "cerrar_sesion"},
        url:   './controller/C_Usuario.php',
        type:  'post',
        success:  function(response) {
            //ezBSAlert({ headerText: "Atención", messageText: response, alertType: "success" });
            Redirect("./");
        },
        error: function(){
            ezBSAlert({ headerText: "Error :(", messageText: "Problemas de conexión para cerrar sesión", alertType: "danger" }); 
        }
    });
}

function Redirect (url) {
    var ua        = navigator.userAgent.toLowerCase(),
        isIE      = ua.indexOf('msie') !== -1,
        version   = parseInt(ua.substr(4, 2), 10);

    // Internet Explorer 8 and lower
    if (isIE && version < 9) {
        var link = document.createElement('a');
        link.href = url;
        document.body.appendChild(link);
        link.click();
    }

    // All other browsers
    else { window.location.href = url; }
}