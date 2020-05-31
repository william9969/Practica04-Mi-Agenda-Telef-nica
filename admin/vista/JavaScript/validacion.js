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