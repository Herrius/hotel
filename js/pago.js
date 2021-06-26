var country=document.getElementById("country")
var phone=document.getElementById("phone");
var credit=document.getElementById("credit")
var debit=document.getElementById("debit")
var cc_name=document.getElementById("cc-name")
var cc_number=document.getElementById("cc-number")

const EXPNOMBRE=/^[a-zA-ZÀ-ÿ\s]{1,40}$/;
VISA = /^4[0-9]{3}-?[0-9]{4}-?[0-9]{4}-?[0-9]{4}$/;
MASTERCARD = /^5[1-5][0-9]{2}-?[0-9]{4}-?[0-9]{4}-?[0-9]   {4}$/;
AMEX = /^3[47][0-9-]{16}$/;

function isValidCard(tarjeta) {
    //Se coloca una variable numerica para poder hacer las operaciones
      var numero = 0;
      tarjeta = cc_number.value;
    //Ingresar los datos, si tiene espacios o esta vacio y si no son numeros regresar a prompt
        if (tarjeta === null || (isNaN(tarjeta) === true) ){
          alert('Ingrese un número de tarjeta válido');
          return tarjeta;
          }
    //Se van a iterar caracter numerico por caracter
      for (var j= 0; j< tarjeta.length; j++){
        if (isNaN(tarjeta.charAt(j)) === true)
        numero++
      }
      if (numero > 0){
        alert('El número de tarjeta contiene letras o carácteres especiales, ingrese un número de tarjeta válido.');
      }
      //Despues de validar si los digitos con correcto
      /*Se estara iterando numero a numero, con un array inverso, se estaran sumando y invirtiendo el array
      con los numeros pares*/
        var sum     = 0,
            alt     = false,
            i       = tarjeta.length-1,
            num;
    //Si el numero de caracteres de la tarjeta proporcionada son menores a 13 o mayores a 19
    //la tarjeta se regresa al prompt
        if (tarjeta.length < 13 || tarjeta.length > 19){
            alert('El número de tarjeta tiene que ser mayor a 13 y menor a 19 dígitos.');
        }
    //Mientras los numeros sea mayor o igual a 0 se estara tomando cada caracter
        while (i >= 0){
    //Se estaran tomando cada caracter numerico enteros ingresado en tarjeta
            num = parseInt(tarjeta.charAt(i), 10);
            //Valida que el número sea válido
            if (isNaN(num)){
                return false;
            }
            //Válida el cambio true o false de imparidad
            if (alt) {
                num *= 2;
                if (num > 9){
                    num = (num % 10) + 1;
                }
            }
            //Voltea el bit de paridad
            alt = !alt;
            //Agrega el número
            sum += num;
            //Continúa con el siguiente dígito
            i--;
        }
        //Determina si la tarjeta es válida
        if (sum % 10 === 0 && sum!==0){
          return alert('Tarjeta válida');
        }
          else{
          return alert('Tarjeta inválida');
          }
    
    
    }
    
function ShowSelected()
{
    var card=document.getElementById("card").value;
 
}

function validar(){
    if(country.value==="Escoga uno..."){
        alert("Escoga una codigo de numero telefonico")}
    else if(phone.value===""){
        alert("debe colocar un numero telefonico")
    }
    else if(!(EXPNOMBRE.test(cc_name)) ){
        alert("Coloque un nombre de propietario valido")
    }
    else {
        isValidCard();
        return true
    }
    return false
    // validacion de tarjetas de credito
   
   
}

phone.addEventListener("keypress",soloNumeros,false)
function soloNumeros(e){
    var key = window.event ? e.which : e.keyCode;
    if (key < 48 || key > 57) {
      e.preventDefault();
      alert("Solo se puede escribir numeros")
    }
}

function checkout(){
    validar();
}