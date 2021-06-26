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
?>
<!-- bloque de espacio -->
<section class="page-section"></section>
<!-- contenido de la pagina web -->
<div class="container">
    <h4><?php echo $nombre;?></h4>
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
        <td>
          <select class="form-select" id="room" required>
            <option>Simple</option>
            <option>Lujoso</option>
          </select>
        </td>
        <td>$120</td>
        </tr>
    </tbody>
    </table> 
</div>
<div class="container">
<form class="needs-validation" novalidate>
        <div class="row g-3">
            <div class="col-md-2">
                <label for="code_phone" class="form-label">Codigo de pais</label>
            </div>
            <div class="col-md-4">
                <select class="form-select" id="country" required>
                    <option>Escoga uno...</option>
                    <option>Afganistán	93</option>
                    <option>Albania	355</option>
                    <option>Alemania	49</option>
                    <option>Angola	244</option>
                    <option>Antigua y Barbuda	1</option>
                    <option>Antillas Holandesas	599</option>
                    <option>Arabia Saudita	966</option>
                    <option>Argelia	213</option>
                    <option>Argentina	54</option>
                    <option>Armenia	374</option>
                    <option>Aruba	297</option>
                    <option>Australia	61</option>
                    <option>Austria	43</option>
                    <option>Azerbaiyán	994</option>
                    <option>Bangladés	880</option>
                    <option>Bélgica	32</option>
                    <option>Belice	501</option>
                    <option>Benín	229</option>
                    <option>Bielorrusia	375</option>
                    <option>Bolivia	591</option>
                    <option>Bosnia y Herzegovina	387</option>
                    <option>Botsuana	267</option>
                    <option>Brasil	55</option>
                    <option>Brunéi	673</option>
                    <option>Bulgaria	359</option>
                    <option>Burkina Faso	226</option>
                    <option>Burundi	257</option>
                    <option>Bután	975</option>
                    <option>Cabo Verde	238</option>
                    <option>Camboya	855</option>
                    <option>Camerún	237</option>
                    <option>Catar	974</option>
                    <option>Chad	235</option>
                    <option>Chequia	420</option>
                    <option>Chile	56</option>
                    <option>China	86</option>
                    <option>Chipre	357</option>
                    <option>Colombia	57</option>
                    <option>Comoras	269</option>
                    <option>Congo	242</option>
                    <option>Corea	82</option>
                    <option>Corea del Norte	850</option>
                    <option>Costa de Marfil	225</option>
                    <option>Costa Rica	506</option>
                    <option>Croacia	385</option>
                    <option>Cuba	53</option>
                    <option>Diego García	246</option>
                    <option>Dinamarca	45</option>
                    <option>Dominica	1</option>
                    <option>Ecuador	593</option>
                    <option>Egipto	20</option>
                    <option>El Salvador	503</option>
                    <option>Emiratos Árabes Unidos	971</option>
                    <option>Eritrea	291</option>
                    <option>Escocia	44</option>
                    <option>Eslovaquia	421</option>
                    <option>Eslovenia	386</option>
                    <option>España	34</option>
                    <option>Estonia	372</option>
                    <option>Etiopía	251</option>
                    <option>Filipinas	63</option>
                    <option>Finlandia	358</option>
                    <option>Fiyi	679</option>
                    <option>Francia	33</option>
                    <option>Gabón	241</option>
                    <option>Gales	44</option>
                    <option>Gambia	220</option>
                    <option>Georgia	995</option>
                    <option>Ghana	233</option>
                    <option>Gibraltar	350</option>
                    <option>Grecia	30</option>
                    <option>Groenlandia	299</option>
                    <option>Guadalupe	590</option>
                    <option>Guatemala	502</option>
                    <option>Guayana Francesa	594</option>
                    <option>Guinea	224</option>
                    <option>Guinea Ecuatorial	240</option>
                    <option>Guinea-Bissau	245</option>
                    <option>Guyana	592</option>
                    <option>Haití	509</option>
                    <option>Holanda	31</option>
                    <option>Honduras	504</option>
                    <option>HongKong	852</option>
                    <option>Hungría	36</option>
                    <option>India	91</option>
                    <option>Indonesia	62</option>
                    <option>Inglaterra	44</option>
                    <option>Irak	964</option>
                    <option>Irán	98</option>
                    <option>Irlanda	353</option>
                    <option>Irlanda del Norte	44</option>
                    <option>Isla Ascensión	247</option>
                    <option>Isla Norfolk	6723</option>
                    <option>Islandia	354</option>
                    <option>Islas Cook	682</option>
                    <option>Islas Feroe	298</option>
                    <option>Islas Malvinas	500</option>
                    <option>Islas Marshall	692</option>
                    <option>Islas Salomón	677</option>
                    <option>Israel	972</option>
                    <option>Italia	39</option>
                    <option>Japón	81</option>
                    <option>Jordania	962</option>
                    <option>Kazajistán	7</option>
                    <option>Kenia	254</option>
                    <option>Kirguistán	996</option>
                    <option>Kiribati	686</option>
                    <option>Kuwait	965</option>
                    <option>Laos	856</option>
                    <option>Lesoto	266</option>
                    <option>Letonia	371</option>
                    <option>Líbano	961</option>
                    <option>Liberia	231</option>
                    <option>Libia	218</option>
                    <option>Liechtenstein	423</option>
                    <option>Lituania	370</option>
                    <option>Luxemburgo	352</option>
                    <option>Macao	853</option>
                    <option>Macedonia	389</option>
                    <option>Madagascar	261</option>
                    <option>Malasia	60</option>
                    <option>Malaui	265</option>
                    <option>Maldivas	960</option>
                    <option>Malí	223</option>
                    <option>Malta	356</option>
                    <option>Marruecos	212</option>
                    <option>Martinica	596</option>
                    <option>Mauricio	23</option>
                    <option>Mauritania	222</option>
                    <option>Mayotte	262</option>
                    <option>México	52</option>
                    <option>Micronesia	691</option>
                    <option>Moldavia	373</option>
                    <option>Mónaco	377</option>
                    <option>Mongolia	976</option>
                    <option>Montenegro	382</option>
                    <option>Mozambique	258</option>
                    <option>Myanmar	95</option>
                    <option>Namibia	264</option>
                    <option>Nauru	674</option>
                    <option>Nepal	977</option>
                    <option>Nicaragua	505</option>
                    <option>Níger	227</option>
                    <option>Nigeria	234</option>
                    <option>Niue	683</option>
                    <option>Noruega	47</option>
                    <option>Nueva Caledonia	687</option>
                    <option>Nueva Zelanda	64</option>
                    <option>Omán	968</option>
                    <option>Pakistán	92</option>
                    <option>Palaos	680</option>
                    <option>Palestina	970</option>
                    <option>Panamá	507</option>
                    <option>Papúa Nueva Guinea	675</option>
                    <option>Paraguay	595</option>
                    <option>Perú	51</option>
                    <option>Polinesia Francesa	689</option>
                    <option>Polonia	48</option>
                    <option>Portugal	351</option>
                    <option>Principado de Andorra	376</option>
                    <option>Puerto Rico	1</option>
                    <option>Reino de Bahréin	973</option>
                    <option>Rep. Dominicana	1</option>
                    <option>República Centroafricana	236</option>
                    <option>República Democrática del Congo	243</option>
                    <option>Reunión	262</option>
                    <option>Ruanda	250</option>
                    <option>Rumanía	40</option>
                    <option>Sáhara Occidental	212</option>
                    <option>Samoa	685</option>
                    <option>San Bartolomé	590</option>
                    <option>San Marino	378</option>
                    <option>San Martín	590</option>
                    <option>San Pedro y Miquelón	508</option>
                    <option>Santa Elena	290</option>
                    <option>Santo Tomé y Príncipe	239</option>
                    <option>Satélite Inmarsat	870</option>
                    <option>Satélite Iridium	8816</option>
                    <option>Satélite Thuraya	882 16</option>
                    <option>Senegal	221</option>
                    <option>Serbia	381</option>
                    <option>Seychelles	248</option>
                    <option>Sierra Leona	232</option>
                    <option>Singapur	65</option>
                    <option>Siria	963</option>
                    <option>Somalia	252</option>
                    <option>Sri Lanka	94</option>
                    <option>Suazilandia	268</option>
                    <option>Sudáfrica	27</option>
                    <option>Sudán	249</option>
                    <option>Sudán del Sur	211</option>
                    <option>Suecia	46</option>
                    <option>Suiza	41</option>
                    <option>Surinam	597</option>
                    <option>Tailandia	66</option>
                    <option>Taiwán	886</option>
                    <option>Tanzania	255</option>
                    <option>Tayikistán	992</option>
                    <option>Timor Oriental	670</option>
                    <option>Togo	228</option>
                    <option>Tokelau	690</option>
                    <option>Tonga	676</option>
                    <option>Túnez	216</option>
                    <option>Turkmenistán	993</option>
                    <option>Turquía	90</option>
                    <option>Tuvalu	688</option>
                    <option>Ucrania	380</option>
                    <option>Uganda	256</option>
                    <option>Uruguay	598</option>
                    <option>Uzbekistán	998</option>
                    <option>Vanuatu	678</option>
                    <option>Vaticano	39</option>
                    <option>Venezuela	58</option>
                    <option>Vietnam	84</option>
                    <option>Wallis y Futuna	681</option>
                    <option>Yemen	967</option>
                    <option>Yibuti	253</option>
                    <option>Zambia	260</option>
                    <option>Zimbabue	263</option>

                </select>
            <div class="invalid-feedback">
                Por favor seleccione un codigo de pais valido.
            </div>
            </div>
            <div class="col-md-2">
                <label for="phone" class="form-label">Numero celular</label>
            </div>
            <div class="col-md-4">
              <input type="tel" class="form-control" required id="phone">
            </div>

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