function validarOperadora(operadora){
    var miAscii = operadora.value.charCodeAt(operadora.value.length-1)
    if((miAscii >= 97 && miAscii <= 122) || (miAscii >= 65 && miAscii <= 90)){
        if(operadora.value.length >2){
            document.getElementById('mensajeOperadora').innerHTML = '<br>Operadora valida';
            operadora.style.border = '2px chartreuse solid';
            document.getElementById('mensajeOperadora').style.color ='white';
            //banderaTel=true;
            return true}
        else{
            document.getElementById('mensajeOperadora').innerHTML = '<br>Operadora de Telefono no es valida'
            operadora.style.border = '2px red solid'
            document.getElementById('mensajeOperadora').style.color ='red';
            //banderaTel=false;
            return false
        }
    }
    else {
        operadora.value = operadora.value.substring(0, operadora.value.length-1)
    }
}




function validarTipoTelefono(tipo){
    var miAscii = tipo.value.charCodeAt(tipo.value.length-1)
    if((miAscii >= 97 && miAscii <= 122) || (miAscii >= 65 && miAscii <= 90)){
        if(tipo.value.length >5){
            document.getElementById('mensajeTipTelefono').innerHTML = '<br>Tipo de Telefono valido';
            tipo.style.border = '2px chartreuse solid';
            document.getElementById('mensajeTipTelefono').style.color ='white';
            //banderaTel=true;
            return true}
        else{
            document.getElementById('mensajeTipTelefono').innerHTML = '<br>Tipo de Telefono no es valido'
            tipo.style.border = '2px red solid'
            document.getElementById('mensajeTipTelefono').style.color ='red';
            //banderaTel=false;
            return false
        }
    }
    else {
        tipo.value = tipo.value.substring(0, tipo.value.length-1)
    }

}


function validarTelefono(telefono){
    if(telefono.value.length > 0 && telefono.value.length<11){
        var miAscii = telefono.value.charCodeAt(telefono.value.length-1)
        console.log(miAscii)
        if(miAscii >= 48 && miAscii <= 57){
            if(telefono.value.length == 10){
            document.getElementById('mensajeTelefono').innerHTML = '<br>Telefono valido';
            telefono.style.border = '2px chartreuse solid';
            document.getElementById('mensajeTelefono').style.color ='white';
            banderaTel=true;
            }
            return true
        }
        else {
                telefono.value = telefono.value.substring(0, telefono.value.length-1)
                document.getElementById('mensajeTelefono').innerHTML = '<br>Numero de Telefono no es valido'
                telefono.style.border = '2px red solid'
                banderaTel=false;
                return false
            }
    }
    else if(telefono.value.length >10 ){
        telefono.value = telefono.value.substring(0, telefono.value.length-1)
    }
    else {
        return true
    }
    

}