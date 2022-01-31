
function validarFormulario() {
    var verificar = true;
    var expRegnombre = /^[A-Za-zÁáÉéÍíÓóÚúÜüÑñ]{1,}([\s][A-Za-zÁáÉéÍíÓóÚúÜüÑñ]{1,})+$/;
    var expRegPais = /^[a-záéíóúñ\s]*$/i;
    var expRegEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
    var expRegUrl = /^(http|https|ftp)+\:+\/\/+(www\.|)+[a-z0-9\-\.]+([a-z\.]|)+\.[a-z]{2,4}$/i;
    var expRegTelefono = /^([0-9]\s*)*$/;
    var formulario = document.getElementById("formulario");
    var nombre = document.getElementById("nombre");
    var registro = document.getElementById("registro");
    var pais = document.getElementById("telefono");
    var email = document.getElementById("carrera");
    var webSite = document.getElementById("web-site");
    var telefono = document.getElementById("telefono");
    var comentario = document.getElementById("comentario");
    if (!nombre.value) {
        alert("Escriba sus nombre por favor.");
        nombre.focus();
        verificar = false;
        return false;
    } else if (nombre.value.split(" ").length < 2) {
        alert("Esciba sus nombre completos por favor.");
        nombre.focus();
        verificar = false;
        return false;
    } else if (!expRegnombre.exec(nombre.value)) {
        alert("Este campo admite letras de la a-zA-Z, ÁáÉéÍíÓóÚúÜüÑñ y no admite espacios en blanco al final.");
        nombre.focus();
        verificar = false;
        return false;
    } else if (!registro.value) {
        alert("Escriba su direcci\u00F3n por favor.");
        registro.focus();
        verificar = false;
        return false;
    } else if (!pais.value) {
        alert("Escriba el nombre del pa\u00EDs que nos visita por favor.");
        pais.focus();
        verificar = false;
        return false;
    } else if (!expRegPais.exec(pais.value)) {
        alert("Escriba de que pa\u00EDs nos visita sin n\u00FAmeros ni caracteres especiales como [+ * , . - _ { } ...].");
        pais.focus();
        verificar = false;
        return false;
    } else if (!email.value) {
        alert("Escriba su email por favor.");
        email.focus();
        verificar = false;
        return false;
    } else if (!expRegEmail.exec(email.value)) {
        alert("Escriba un email valido por favor.");
        email.focus();
        verificar = false;
        return false;
    } else if ((webSite.value != "") && !expRegUrl.exec(webSite.value)) {
        alert("Escriba un formato de sitio web valido por favor.");
        webSite.focus();
        verificar = false;
        return false;
    } else if (!telefono.value) {
        alert("Escriba un n\u00famero de tel\u00E9fono por favor.");
        telefono.focus();
        verificar = false;
        return false;
    } else if (!expRegTelefono.exec(telefono.value)) {
        alert("el campo tel\u00E9fono admite n\u00FAmeros y espacios en blanco.");
        telefono.focus();
        verificar = false;
        return false;
    } else if (!comentario.value) {
        alert("el campo comentarios es requerido");
        comentario.focus();
        verificar = false;
        return false;
    } else if (comentario.value.length > 1000) {
        alert("El campo comentarios no puede tener mas de 1000 caracteres.");
        comentario.focus();
        verificar = false;
        return false;
    }

    if (verificar == true) {
        document.formulario.submit();
    }
}




window.alert = function(titulo, descricao) {
    // do something here
    $('.alerta').find('.titulo').html(titulo);
    $('.alerta').find('.descricao').html(descricao);
    $('.alerta').stop(true, true).fadeIn(1000);
};

$('.fechar').on('click', function() {
    $('.alerta').stop(true, true).fadeOut(1000);
});

window.setTimeout(function() {
    //console.log('Inscripción Exitosa');
    alert('Inscripción Exitosa', ':)');
}, 2000);


function alerta() {
    alert("Inscripción Exitosa");
}