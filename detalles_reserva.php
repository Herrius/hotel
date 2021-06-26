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

    <title>Grafico por aula</title>
  </head>
  <body>
  <div class="container register-form">
            <div class="form">
                <div class="note">
                    <p>Ingrese sus datos para continuar con su reservación</p>
                </div>

                <div class="form-content">
                    <div class="row">
                    <h2>Datos generales</h2>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Nombre" value=""/>
                            </div>    
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Apellido" value=""/>
                            </div>
                            
                        </div>
                        <div class="form-group" style="width:50%;">
                           <input type="text" class="form-control" placeholder="Correo electrónico" value=""/>
                        </div>
                        <div class="form-group" style="width:50%;">
                           <input type="text" class="form-control" placeholder="Confirmar correo electrónico" value=""/>
                        </div>
                   
                    
                    </div>
                    <b><p>Para quien es la reserva</p></b>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                          Yo soy el huesped principal
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                          La reserva es para otra persona
                        </label>
                      </div>
                      </br>
                    </br>
                      <div class="div hide">
                      <h2>Datos de cliente</h2>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <input type="text" class="form-control" placeholder="Nombre Completo" value=""/>
                              </div>    
                          </div>
                          <div class="form-group" style="width:50%;">
                            <input type="text" class="form-control" placeholder="Correo electrónico (Opcional)" value=""/>
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
                    <button type="button" class="btnSubmit">Siguiente: Ultimos datos  ></button>
                </div>
            </div>
            </div>
        </div>
  </body>
</html>