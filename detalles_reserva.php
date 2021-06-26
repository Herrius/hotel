<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.2.0/chart.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/dreserva.css">
    <script src="js/validar_reserva.js"></script>

    <title>Registro de datos</title>
  </head>
  <body>
  <div class="container register-form">
            <div class="form">
                <div class="note">
                    <p>Ingrese sus datos para continuar con su reservación</p>
                </div>

                <div class="form-content">
                  <form action="" method="POST" id="formulario-reserva" onsubmit="validar()">
                    <div class="row">
                    <h2>Datos generales</h2>
                        
                        <div class="col-md-6">
                            <label for="nombre">Nombres (*)</label>
                            <div class="form-group">
                                <input type="text" id="nombre" class="form-control" name="nombre" value="" required/>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="circlex" viewBox="0 0 16 16">
                                  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
                                </svg>
                                <p class="error">Ingrese correctamente el nombre: No puede contener números ni caracteres especiales</p>
                            </div>    
                        </div>
                        <div class="col-md-6">
                        <label for="apellido">Apellidos (*)</label>
                            <div class="form-group">
                                <input type="text" id="apellido" class="form-control" name="nombre" value="" required/>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="circlex" viewBox="0 0 16 16">
                                  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
                                </svg>
                                <p class="error">Ingrese correctamente el apellido: No puede contener números ni caracteres especiales</p>
                            </div>
                            
                        </div>
                        <div class="form-group" style="width:50%;">
                          <label for="apellido">Correo electrónico  (*)</label>
                           <input type="email" class="form-control" id="correo" value="" required/>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="circlex" viewBox="0 0 16 16">
                                  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
                            </svg>
                            <p class="error">Ingrese correctamente el correo electronico: El formato es correo@correo.com</p>
                        </div>
                        <div class="form-group" style="width:50%;">
                          <label for="apellido"> Confirmar correo electrónico  (*)</label>
                           <input type="email" class="form-control" id="concorreo" value="" required/>
                           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="circlex" viewBox="0 0 16 16">
                                  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
                            </svg>
                            <p class="error">Ingrese el mismo correo electrónico</p>
                        </div>
                        
                        
                    </div>
                    <b><p>Para quien es la reserva</p></b>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" onclick="esconder_div()">
                        <label class="form-check-label" for="flexRadioDefault1">
                          Yo soy el huesped principal
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" onclick="mostrar_div()" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                          La reserva es para otra persona
                        </label>
                      </div>
                      </br>
                    </br>
                      <div class="div hide" id="hide" type="hide">
                      <h2>Datos de cliente</h2>
                          <div class="form-group" style="width:50%;">
                              <input type="text" class="form-control" id="nombrecliente" placeholder="Nombre Completo (*)" value=""/>
                          </div>    

                          <div class="form-group" style="width:50%;">
                            <input type="email" class="form-control" id="correocliente" placeholder="Correo electrónico (Opcional)" value=""/>
                          </div>
                    </div>
                    </br>
                    </br>
                    <h2>Peticiones especiales</h2>
                    <p>Las peticiones especiales no se pueden garantizar, pero el alojamiento hará todo lo posible por satisfacerlas. ¡También puedes enviarnos tu petición especial cuando hayas realizado la reserva!</p>
                    <div class="form-group">
                      <b><label for="exampleFormControlTextarea1">Escribe tus peticiones en inglés o en español. (opcional)</label></b>
                      </br>
                      </br>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                      <label class="form-check-label" for="defaultCheck1">
                      Quiero una habitación tranquila
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                      <label class="form-check-label" for="defaultCheck2">
                      Quiero parking privado gratis en el establecimiento
                      </label>
                    </div>
                    </br>
                    </br>
                    <h2>Tu hora de llegada</h2>
                    <p>Recepción 24 horas – ¡Tendrás ayuda siempre que la necesites!</p>
                    <div class="form-check">
                      <b><label for="inputMDEx1">Añade tu hora de llegada aproximada (Opcional) </label></b>
                      <input type="time" id="inputMDEx1" class="form-control" style="width:12%">
                    </div>
                    </br>
                    </br>
                    <button type="submit" class="btnSubmit">Siguiente: Ultimos datos  ></button>
                  </form>
                </div>
            </div>
          </div>
  </body>
</html>

<script>
  function validar() {
      var nombres,apellidos,correo,concorreo,nombrecliente,nombrecliente,correocliente;
      nombres=document.getElementById("nombre").value;
      apellidos=document.getElementById("apellido").value;
      correo=document.getElementById("correo").value;
      concorreo=document.getElementById("concorreo").value;
      nombrecliente=document.getElementById("nombrecliente").value;
      correocliente=document.getElementById("correocliente").value;
      if(nombres===""){
          alert("El campo nombre está vacio")
          return false;
      }
  }

  function esconder_div(){
    document.getElementById("hide").style.display="none";
  }

  function mostrar_div(){
    document.getElementById("hide").style.display="block";
  }
</script>
