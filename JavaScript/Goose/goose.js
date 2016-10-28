var pointerPosition = 0;
//esto es el puntero
// aqui se supone que pilla un array con todos los div

var divsArray = document.querySelectorAll('div');
var firstdiv = divsArray[divsArray.length-8];

var button = document.getElementById('button');

 function random(){
    var rand = Math.floor((Math.random() * 6) + 1);
    var pos = pointerPosition + rand;
    movePointer(pos); //pos
}

//hay que poner que dependiendo de la pointerPosition se mueva X
//el mueve el que he creado con javascript. hay que darle los estilos a ese
function movePointer(pos){
    var puntero = document.getElementById('pointer');
switch (pos) {
    case 0:
        break;
        case 1:
                var posicion1 = document.getElementById('1');
                posicion1.appendChild(puntero);
                break;
                case 2:
                        var posicion2 = document.getElementById('2');
                        posicion2.appendChild(puntero);
                        break;
                        case 3:
                                var posicion3 = document.getElementById('3');
                                posicion3.appendChild(puntero);
                                break;
                                case 4:
                                        var posicion4 = document.getElementById('4');
                                        posicion4.appendChild(puntero);
                                        break;
                                        case 5:
                                                var posicion5 = document.getElementById('5');
                                                posicion5.appendChild(puntero);
                                                break;
                                                case 6:
                                                        var posicion6 = document.getElementById('6');
                                                        posicion6.appendChild(puntero);
                                                        break;
                                                        case 7:
                                                                var posicion7 = document.getElementById('7');
                                                                posicion7.appendChild(puntero);
                                                                break;
                                                                case 8:
                                                                        var posicion4 = document.getElementById('8');
                                                                        posicion8.appendChild(puntero);
                                                                        break;

}

}
