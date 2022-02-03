consoleText(['Verano 3/2021', 'Support', 'C.I.Sistemas', 'C.I.Infromatica', 'C.I-Redes y Telecomunicaciones', 'Aprende +'], 'text', ['#fffff', 'rebeccapurple', 'lightblue']);



function consoleText(words, id, colors) {
    if (colors === undefined) colors = ['#fff'];
    var visible = true;
    var con = document.getElementById('console');
    var letterCount = 1;
    var x = 1;
    var waiting = false;
    var target = document.getElementById(id)
    target.setAttribute('style', 'color:' + colors[0])
    window.setInterval(function() {

        if (letterCount === 0 && waiting === false) {
            waiting = true;
            target.innerHTML = words[0].substring(0, letterCount)
            window.setTimeout(function() {
                var usedColor = colors.shift();
                colors.push(usedColor);
                var usedWord = words.shift();
                words.push(usedWord);
                x = 1;
                target.setAttribute('style', 'color:' + colors[0])
                letterCount += x;
                waiting = false;
            }, 1000)
        } else if (letterCount === words[0].length + 1 && waiting === false) {
            waiting = true;
            window.setTimeout(function() {
                x = -1;
                letterCount += x;
                waiting = false;
            }, 2000)
        } else if (waiting === false) {
            target.innerHTML = words[0].substring(0, letterCount)
            letterCount += x;
        }
    }, 220)
    window.setInterval(function() {
        if (visible === true) {
            con.className = 'console-underscore hidden'
            visible = false;

        } else {
            con.className = 'console-underscore'

            visible = true;
        }
    }, 800)
}


function mostrarError(msj) {
    $("#mensaje").text(msj);
    $("#tipo").addClass("fa-times").removeClass("fa-check");
    $(".mostrar-mensaje").removeClass("correcto").addClass("error show");
}


window.alert = function(titulo, descricao) {
    // do something here
    $('.alerta').find('.titulo4').html(titulo);
    $('.alerta').find('.descricao').html(descricao);
    $('.alerta').stop(true, true).fadeIn(50000);
};

$('.fechar').on('click', function() {
    $('.alerta').stop(true, true).fadeOut(50000);
});

window.setTimeout(function() {
    //console.log('Inscripción Exitosa');
    alert('Inscripción Exitosa', ':)');
}, 200);


function alerta() {
    alert("Inscripción Exitosa");
}