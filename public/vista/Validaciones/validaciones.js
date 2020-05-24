var banderaCed = false;
var banderaTel = false;
var banderaCor = false;
var banderaNom = false;
var banderaApe = false;
var banderaCon =false;
var banderaFec = false;

function validarCedula(elemento)
{   
    if(elemento.value.length > 0 && elemento.value.length<11){
            var miAscii = elemento.value.charCodeAt(elemento.value.length-1)
        //console.log(miAscii)
            if(miAscii >= 48 && miAscii <= 57 ){
                var cedula =document.getElementById("cedula").value;
                array = cedula.split( "" );
                num = array.length;
                if ( cedula.length == 10 )
                {
                total = 0;
                digito = (array[9]*1);
                for( i=0; i < (num-1); i++ ) { 
                    mult = 0; 
                    if ( ( i%2 ) != 0 ) 
                    { 
                        total = total + ( array[i] * 1 ); 
                    } 
                    else 
                    { 
                        mult = array[i] * 2; 
                        if ( mult > 9 )
                        total = total + ( mult - 9 );
                        else
                        total = total + mult;
                    }
                }
                    decena = total / 10;
                    decena = Math.floor( decena );
                    decena = ( decena + 1 ) * 10;
                    final = ( decena - total );
                    if ( ( final == 10 && digito == 0 ) || ( final == digito ) ) {
                        
                        console.log("Cedula Verdadera");
                        banderaCed=true;
                        document.getElementById('mensajeCedula').innerHTML = '<br>La cedula es es valida';
                        document.getElementById('mensajeCedula').style.color ='white';
                        document.getElementById('cedula').style.border = '2px chartreuse solid';
                        return true;
                    }
                    else
                    {
                        banderaCed=false;
                        console.log("Cedula Falsa");
                        return false;
                    }
                }
                else
                {
                    document.getElementById('mensajeCedula').innerHTML = '<br>La cedula no es valida';
                    document.getElementById('mensajeCedula').style.color ='red';
                    document.getElementById('cedula').style.border = '2px red solid';
                }
                return true
            }
            else {
                elemento.value = elemento.value.substring(0, elemento.value.length-1)
                return false
            }
        }
        else if(elemento.value.length >10 ){
            elemento.value = elemento.value.substring(0, elemento.value.length-1)
        }
        else {
            return true
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
function validarNombres(nombres){
    arrayNombres = nombres.value.split(" ");
    if (arrayNombres.length<3 ){
        if(nombres.value.length > 0){
                var miAscii = nombres.value.charCodeAt(nombres.value.length-1)
            if((miAscii >= 97 && miAscii <= 122) || (miAscii >= 65 && miAscii <= 90) || miAscii==32){
                    console.log(arrayNombres.length+"Aqiooo");
                    if(arrayNombres.length>1 && miAscii!=32){
                        banderaNom=true;
                        console.log(arrayNombres.length+"X222");
                        document.getElementById('mensajeNombres').innerHTML = '<br>Nombre Valido';
                        document.getElementById('mensajeNombres').style.color ='white';
                        nombres.style.border = '2px chartreuse solid';
                        return true;
                    }
                    else {
                        banderaNom=false;
                        document.getElementById('mensajeNombres').innerHTML = '<br>Nombre No Valido';
                        document.getElementById('mensajeNombres').style.color ='red';
                        nombres.style.border = '2px red solid';
                    }
                    return true
            }else {
                nombres.value = nombres.value.substring(0, nombres.value.length-1)
                    return false
                }
            }else{
            return true
            }
    }else {
        nombres.value = nombres.value.substring(0, nombres.value.length-1)
            return false
        }
}

function validarApellidos(apellidos){
    arrayApellidos = apellidos.value.split(" ");
    if (arrayApellidos.length<3 ){
        if(apellidos.value.length > 0){
                var miAscii = apellidos.value.charCodeAt(apellidos.value.length-1)
            if((miAscii >= 97 && miAscii <= 122) || (miAscii >= 65 && miAscii <= 90) || miAscii==32){
                    console.log(arrayApellidos.length+"Aqiooo");
                    if(arrayApellidos.length>1 && miAscii!=32){
                        banderaApe=true;
                        console.log(arrayApellidos.length+"X222");
                        document.getElementById('mensajeApellidos').innerHTML = '<br>Apellido Valido';
                        document.getElementById('mensajeApellidos').style.color ='white';
                        apellidos.style.border = '2px chartreuse solid';
                        return true;
                    }
                    else {
                        banderaApe=false;
                        document.getElementById('mensajeApellidos').innerHTML = '<br>Apellido No Valido';
                        document.getElementById('mensajeApellidos').style.color ='red';
                        apellidos.style.border = '2px red solid';
                    }
                    return true
            }else {
                apellidos.value = apellidos.value.substring(0, apellidos.value.length-1)
                    return false
                }
            }else{
            return true
            }
    }else {
        apellidos.value = apellidos.value.substring(0, apellidos.value.length-1)
            return false
        }
}


function validarCorreo(correo){
    if (correo.value.length>3){
        if (/^\w+([\.-]?\w+)*@(?:|est)\.(?:|ups)\.(?:|edu)\.(?:|ec)+$/.test(correo.value) || /^\w+([\.-]?\w+)*@(?:|ups)\.(?:|edu)\.(?:|ec)+$/.test(correo.value) ){
                document.getElementById('mensajeCorreo').innerHTML = '<br>El Correo valido';
                document.getElementById('mensajeCorreo').style.color ='white';
                correo.style.border = '2px chartreuse solid';
                banderaCor=true;
                return true;
        } else {
                document.getElementById('mensajeCorreo').innerHTML = '<br>El Correo no es valido';
                document.getElementById('mensajeCorreo').style.color ='red';
                correo.style.border = '2px red solid';
                banderaCor=false;
                return false;
        }
    }
    else{
        document.getElementById('mensajeCorreo').innerHTML = '<br>El Correo no es valido';
        correo.style.border = '2px red solid';
        return false;
    }
}

function validarContraseña(contrasena){
    //arrayApellidos=contraseña.value;
    //var miAscii = contrasena.value.charCodeAt(contrasena.value.length-1);
    if(contrasena.value.length >= 8)
    {		
        var arroba = false;
        var guion = false;
        var dolar = false;
        var mayusculas = false;
        var minusculas =false;
        for(var i = 0;i<contrasena.value.length;i++)
        {
            if(contrasena.value.charCodeAt(i)==64)
            {
                arroba = true;
                //console.log("arroba")
            }
            else if(contrasena.value.charCodeAt(i)==95)
            {
                guion = true;
                //console.log("guin")
            }
            else if(contrasena.value.charCodeAt(i)==36)
            {
                dolar = true;
                //console.log("dolar")
            }
            else if(contrasena.value.charCodeAt(i) >= 97 && contrasena.value.charCodeAt(i) <= 122 )
            {
                mayusculas=true;
                //console.log("mayuscula")
            }
            else if(contrasena.value.charCodeAt(i) >= 65 && contrasena.value.charCodeAt(i) <= 90)
            {
                minusculas=true;
                //console.log("minuscula")
            }
            
        }
        if(arroba == true && guion == true && dolar == true && mayusculas==true && minusculas==true)
        {
            banderaCon=true;
            console.log("Contaseña")
            document.getElementById('mensajeContrasena').innerHTML = '<br>Contraseña valida';
            document.getElementById('mensajeContrasena').style.color='chartreuse';
            contrasena.style.border = '2px chartreuse solid';
            return true;
        }
        else {
            banderaCon=false;
            return false;
        }
    }
    else{
        document.getElementById('mensajeContrasena').innerHTML = '<br>Contraseña no valido';
        document.getElementById('mensajeContrasena').style.color='red';
        contrasena.style.border = '2px red solid';
        return false;
    }
}
function validarFecha(fecha){
    var miAscii = fecha.value.charCodeAt(fecha.value.length-1);
    if(fecha.value.length <11){
            if((miAscii >= 48 && miAscii <= 57) || miAscii ==47){
                arrayFecha = fecha.value.split("/");
                var dia=arrayFecha[0];
                var mes = arrayFecha[1];
                var anio = arrayFecha[2];
                if((dia>0 && dia<32) && (mes>0 && mes<13) && (anio>1900 && anio<2020))
                {
                    banderaFec=true;
                    console.log("Contaseña")
                    document.getElementById('mensajeFecha').innerHTML = '<br>Fecha valida';
                    document.getElementById('mensajeFecha').style.color='white';
                    fecha.style.border = '2px chartreuse solid';
                    return true;
                }
                else {
                    banderaFec=false;
                    
                    document.getElementById('mensajeFecha').innerHTML = '<br>Fecha no valida';
                    document.getElementById('mensajeFecha').style.color='red';
                    fecha.style.border = '2px red solid';
                    return false;
                }
                //console.log(miAscii)
            }
            else {
                fecha.value = fecha.value.substring(0, fecha.value.length-1);
                document.getElementById('mensajeFecha').innerHTML = '<br>Fecha no valida';
                document.getElementById('mensajeFecha').style.color='red';
                fecha.style.border = '2px red solid';
                return false
            }
    }else{
        fecha.value = fecha.value.substring(0, fecha.value.length-1);
    }
}

function botonSubmit(){

    if(banderaCed==true && banderaTel==true && banderaCor==true && banderaNom==true && banderaApe==true && banderaCon==true && banderaFec==true){
        
        alert('Datos Correctos')
    }
    else{
        alert('Datos Incorrectos')
    }
}
