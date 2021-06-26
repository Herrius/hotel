
expnombre=/^[a-zA-ZÀ-ÿ\s]{1,40}$/;
expcorreo=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3,4})+$/;


function validar() {
    var nombre,apellido,correo,concorreo,nombrecliente,nombrecliente,correocliente;
    nombre=document.getElementById("nombre").value;
    apellido=document.getElementById("apellido").value;
    correo=document.getElementById("correo").value;
    concorreo=document.getElementById("concorreo").value;
    nombrecliente=document.getElementById("nombrecliente").value;
    correocliente=document.getElementById("correocliente").value;

    if(nombre===""|| apellido===""||correo===""||concorreo===""){
        alert("Es necesario que rellene todos los campos obligatorios que estan con este simbolo (*)")
        return false;
    }
    else if(!expnombre.test(nombre)){
        alert("La celda nombres no acepta números ni caracteres especiales")
        return false;
    }
    else if(!expnombre.test(apellido)){
        alert("La celda apellido no acepta números ni caracteres especiales")
        return false;
    }
    else if(expcorreo.test(correo)){
        alert("El correo no es valido")
        return false;
    }
    else if(correo!==concorreo){
        alert("La confirmacion del correo debe ser igual al registrado anteriormente")
        return false;
    }
    else if(expcorreo.test(correocliente)){
        alert("El correo no es valido")
        return false;
    }
    else if(expnombre.test(nombrecliente)){
        alert("El nombre no acepta números ni caracteres especiales")
        return false;
    }


}

