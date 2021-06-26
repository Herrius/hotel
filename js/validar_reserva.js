const expresiones = {
	nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
}

function validar() {
    var nombre,apellido,correo,concorreo,nombrecliente,nombrecliente,correocliente;
    nombre=document.getElementById("nombre").value;
    apellido=document.getElementById("apellido").value;
    correo=document.getElementById("correo").value;
    concorreo=document.getElementById("concorreo").value;
    nombrecliente=document.getElementById("nombrecliente").value;
    correocliente=document.getElementById("correocliente").value;
     console.log(nombres);
    if(nombre===""|| apellido===""||correo===""||concorreo===""){
        alert("Es necesario que rellene todos los campos obligatorios que estan con este simbolo (*)")
        return false;
    }
    else if(expresiones.nombre.test(nombre)){
        alert("El nombre no acepta números ni caracteres especiales")
    }
    else if(expresiones.nombre.test(apellido)){
        alert("El apellido no acepta números ni caracteres especiales")
    }
    else if(expresiones.correo.test(correo)){
        alert("El correo no es valido")
    }
    else if(concorreo!==correo){
        alert("El correo no es valido")
    }
    else if(expresiones.correo.test(correocliente)){
        alert("El correo no es valido")
    }
    else if(expresiones.nombre.test(nombrecliente)){
        alert("El nombre no acepta números ni caracteres especiales")
    }


}

