// Funcion para cargar temporalmente una imagen que selecciona un usuario
function readURL(imgSrc, input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            imgSrc.attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}