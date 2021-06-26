var country=document.getElementById("country")
var checkout=document.getElementById("checkout");
var phone=document.getElementById("phone");
var credit=document.getElementById("credit")
var debit=document.getElementById("debit")
var cc_name=document.getElementById("cc-name")
var cc_number=document.getElementById("cc-number")
var msg = "Valor incorrecto";

const EXPNOMBRE=/^[a-zA-ZÀ-ÿ\s]{1,40}$/;
VISA = /^4[0-9]{3}-?[0-9]{4}-?[0-9]{4}-?[0-9]{4}$/;
MASTERCARD = /^5[1-5][0-9]{2}-?[0-9]{4}-?[0-9]{4}-?[0-9]   {4}$/;
AMEX = /^3[47][0-9-]{16}$/;
function validar(){
    if(country.value==="Escoga uno..."){
        alert("Escoga una codigo de numero telefonico")}
    else if(phone.value===""){
        alert("debe colocar un numero telefonico")
    }
    else if(credit.cheked && debit.cheked){   
        alert("Escoga un metodo de pago")
    }
    else if(!(cc_name.value==="") || !(EXPNOMBRE.test(cc_name)) ){
        alert("Coloque un nombre de propietario valido")
    }
    // validacion de tarjetas de credito
   if(luhn(cc_number)){
    if(opt == "VISA" && !codigo.match(VISA)){
        alert(msg);
    }
    if(opt == "MASTERCARD" && !codigo.match(MASTERCARD)){
        alert(msg);
    }
    if(opt == "NARANJA" && !codigo.match(NARANJA)){
        alert(msg);
    }
    if(opt == "CABAL" && !codigo.match(CABAL)){
        alert(msg);
    }
    if(opt == "AMEX" && !codigo.match(AMEX)){
        alert(msg);
    }
    } else {
    alert(msg);
   }
   
}

phone.addEventListener("keypress",soloNumeros,false)
function soloNumeros(e){
    var key = window.event ? e.which : e.keyCode;
    if (key < 48 || key > 57) {
      e.preventDefault();
      alert("Solo se puede escribir numeros")
    }
}

function luhn(value) {
    // Accept only digits, dashes or spaces
    if (/[^0-9-\s]+/.test(value)) return false;
    // The Luhn Algorithm. It's so pretty.
    let nCheck = 0, bEven = false;
    value = value.replace(/\D/g, "");
    for (var n = value.length - 1; n >= 0; n--) {
        var cDigit = value.charAt(n),
        nDigit = parseInt(cDigit, 10);
        if (bEven && (nDigit *= 2) > 9) nDigit -= 9; nCheck +=  nDigit; bEven = !bEven;
    }
    return (nCheck % 10) == 0;
}

  