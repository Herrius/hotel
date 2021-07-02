<header class="masthead">
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-10 align-self-end mb-4" style="background: #0000002e;">
                    <h1 class="text-uppercase text-white font-weight-bold">Pago</h1>
                <hr class="divider my-4" />
            </div>
            
        </div>
    </div>
</header>
<?php
  $nombre=$_POST["nombre"];
  $apellido=$_POST["apellido"];
  $email=$_POST["email"];
  $time=$_POST["time"];
?>
<!-- bloque de espacio -->
<section class="page-section"></section>
<!-- contenido de la pagina web -->
<div class="container">
    <h4><?php echo $nombre." ".$apellido;?></h4>
    <p><?php print($email."|".$time)?></p>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">N°</th>
        <th scope="col">Habitacion</th>
        <th scope="col">Camas</th>
        <th scope="col">Tipo de habitacion</th>
        <th scope="col">Precio</th>
        </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row">1</th>
        <td>
		<div id="player-name"></div>
		<script>
		document.getElementById('player-name').innerHTML = 
     sessionStorage.getItem('habitacion');
		</script></td>
        <td>
		<div id="camasl"></div>
		<script>
		document.getElementById('camasl').innerHTML = 
     sessionStorage.getItem('camas');
		</script></td>
        <td><div id="tipodehabitacion"></div>
		<script>
		document.getElementById('tipodehabitacion').innerHTML = 
     sessionStorage.getItem('tipodehabitacion');
		
		
		</script>
        
        </td>
        <td ><div id="precio"></div>
		<script>
		document.getElementById('precio').innerHTML = 
     sessionStorage.getItem('precio');
		</script></td>
        </tr>
		<tr><td>
		<div id="total"></div>
		<script>
		document.getElementById('total').innerHTML ="Total: $"+ 
      parseInt(sessionStorage.getItem('habitacion'))* sessionStorage.getItem('precio');
		
		
		</script> <td></tr>
    </tbody>
    </table> 
	
</div>
<div class="container">
<form class="needs-validation" novalidate>
        <div class="row g-3">
          
           
            <button onclick="">Reservar</button>

          </div>

          

          <hr class="my-4">

          <h4 class="mb-3">Payment</h4>

          <select class="form-select" id="card" onchange="ShowSelected();" required>
            <option value="Visa" >Visa</option>
            <option value="Mastercard">Mastercard</option>
            <option value="Amex">Amex</option>
          </select>

          <div class="row gy-3">
            <div class="col-md-6">
              <label for="cc-name" class="form-label">Nombre del propietario</label>
              <input type="text" class="form-control" id="cc-name" placeholder="" required>
              <small class="text-muted">Full name as displayed on card</small>
              <div class="invalid-feedback">
                Name on card is required
              </div>
            </div>

            <div class="col-md-6">
              <label for="cc-number" class="form-label">Numero de la tarjeta</label>
              <input type="text" class="form-control" id="cc-number" placeholder="" required>
              <div class="invalid-feedback">
                Credit card number is required
              </div>
            </div>

            <div class="col-md-3">
              <label for="cc-expiration" class="form-label">Fecha de vencimiento</label>
              <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
              <div class="invalid-feedback">
                Expiration date required
              </div>
            </div>

            <div class="col-md-3">
              <label for="cc-cvv" class="form-label">CVV</label>
              <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
              <div class="invalid-feedback">
                Security code required
              </div>
            </div>
            <div class="col-md-6">
                <div class="container">
                    <span class="payment-icon payment-icon--visa"></span>
                    <span class="payment-icon payment-icon--master"></span>
                    <span class="payment-icon payment-icon--american-express"></span>
                    <span class="payment-icon payment-icon--discover"></span>
                </div>
            </div>
          </div>

          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" type="submit" onclick="checkout()">Continue to checkout</button>
        </form>
</div>
<script src="js/pago.js"></script>