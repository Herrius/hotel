 <!-- Masthead-->
        <header class="masthead">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end mb-4">
                    	<div class="card" id="filter-book">
                    		<div class="card-body">
                    			<div class="container-fluid">
                    				<form action="index.php?page=list" id="filter" method="POST">
                                                                            
                                     
                                        
                    					<div class="row">
                                            
                                            <div class="col-md-3">
                                              <label for="">¿ A que lugar?</label>
                                             <input type="text" name="search_city" id="search_city" placeholder="" class="form-control" required>  
    
                                             <script>
											  var getDate = function (input) {
													return new Date(input.date.valueOf());
												}
																							$(document).ready(function() {
												  var dateInput = $('input[name="date"]'); // Our date input has the name "date"
												  var dateInputF = $('input[name="date_out"]'); 
												 
												  
												  console.log(Date.now());
												  dateInput.datepicker({
													format: 'yyyy-mm-dd',
													
													todayHighlight: true,
													autoclose: true,
													
													startDate: truncateDate(new Date()) // <-- THIS WORKS
													
												  }).on('changeDate',
													function (selected) {
														$('#date_out').datepicker('setStartDate', getDate(selected));
														var checkin= document.getElementById("date").value;
														var checkout= document.getElementById("date_out").value;
														
														if(checkin>checkout){
															console.log("cumple");
															$('#date_out').datepicker('setDate', checkin);
														}

														
														
													});

												  $('#date').datepicker('setStartDate', truncateDate(new Date())); // <-- SO DOES THIS
												});

												function truncateDate(date) {
												  return new Date(date.getFullYear(), date.getMonth(), date.getDate());
												}
											
												
											
											
											</script>
	
										
                    						</div>
                                            <div class="col-md-3">
                    							<label for="">Check-in Date</label>
                    							<input class="form-control" id="date" name="date"  type="text" onkeypress="return false;" autocomplete="off" required/>
                    						</div>
                    						<div class="col-md-3">
                    							<label for="">Check-out Date</label>
                    							<input type="text" class="form-control datepicker" name="date_out" id="date_out" autocomplete="off" onkeypress="return false;" autocomplete="off" required>
                    						</div>
                                            <div class="col-md-3">
                    									</div>
                                            <div class="col-md-3">
                    							<label for="">Adultos</label>
                    							<input class="form-control" type="number" value="1" min="1" id="camas" onkeypress="return false;" required>
                    						</div>

                                              <div class="col-md-3">
                    							<label for="">Niños</label>
                    							<input class="form-control" type="number" value="0" min="0" id="camas2"  onkeypress="return false;" required>
                    						</div>

                                             <div class="col-md-3">
                    							<label for="">Habitacion</label>
                    							<input class="form-control" type="number" value="1" min="1"id="habitacion" onkeypress="return false;" required>
                    						</div>
                    						
                    						<div class="col-md-3">
                    							<br>
                    							<button id="boton" class="btn-btn-block btn-primary mt-3" onclick="myFunction()">Check Availability</button>
                    						</div>

                    					</div>
                    				</form>
                                    <script type="text/javascript">
									
										var limite=20;	
											
									  $(function() {
										 $( "#search_city" ).autocomplete({
										   source: 'ajax-city-search.php',
										 });
										 
										 
									  });
									  
									  $('#camas').change(function(){
										  var adultos = document.getElementById("camas").value;
										  var ninos=document.getElementById("camas2").value;
										  var habitacion=document.getElementById("habitacion").value;
										  var camas= parseInt(adultos)+parseInt(ninos);
										  
										  console.log(camas);
										   document.getElementById("camas").max=limite-parseInt(ninos);
										    document.getElementById("camas2").max=limite-parseInt(adultos);
												if(camas<=4){
												    document.getElementById("habitacion").value = 1;
											   }
											   else if(camas>4 && camas<=limite){
												   var habitaciones;
												   
												   habitaciones=camas/4;
												   if(habitaciones>parseInt(habitaciones)){
												      habitaciones=parseInt(habitaciones)+1;
												   
												   }else{
													  habitaciones=parseInt(habitaciones)
												   }
												  
												   document.getElementById("habitacion").value = habitaciones;
												   document.getElementById("habitacion").min=habitaciones;
												   document.getElementById("habitacion").max=camas;
												   console.log(habitacion);
											   }
											   else if(camas>limite){
												   console.log("cumple");
												   document.getElementById("habitacion").max=limite;
												  
												   
											   }
											});
											
											 $('#camas2').change(function(){
										  var adultos = document.getElementById("camas").value;
										  var ninos=document.getElementById("camas2").value;
										  var habitacion=document.getElementById("habitacion").value;
										  var camas= parseInt(adultos)+parseInt(ninos);
										  console.log(camas);
										   document.getElementById("camas").max=limite-parseInt(ninos);
										    document.getElementById("camas2").max=limite-parseInt(adultos);
												if(camas<=4){
												    document.getElementById("habitacion").value = 1;
											   }
											   else if(camas>4 && camas<=limite){
												   var habitaciones;
												    habitaciones=camas/4;
												   if(habitaciones>parseInt(habitaciones)){
												      habitaciones=parseInt(habitaciones)+1;
												   
												   }else{
													  habitaciones=parseInt(habitaciones)
												   }
												  
												   document.getElementById("habitacion").value = habitaciones;
												   document.getElementById("habitacion").min=habitaciones;
												   document.getElementById("habitacion").max=camas;
												  
												   console.log(habitacion);
											   }
											   else if(camas> limite){
												   document.getElementById("habitacion").max=limite;
												 
												    document.getElementById("camas2").max=limite-parseInt(adultos);
											   }
											});


									</script>

											<script>
										function myFunction() {
											var adultos = document.getElementById("camas").value;
											var ninos=document.getElementById("camas2").value;
											var habitacion=document.getElementById("habitacion").value;
											var camas= parseInt(adultos)+parseInt(ninos);
											
											
											
											
											
										  
										  sessionStorage.setItem('habitacion',habitacion);
										  console.log(sessionStorage.getItem('habitacion'));
										 
										  sessionStorage.setItem('camas',camas);
										  console.log(sessionStorage.getItem('camas'));
										  
										}
										</script>
                    			</div>
                    		</div>
                    	</div>
                    </div>
                    
                </div>
            </div>
        </header>
	<section class="page-section">
        </section>
	<div id="portfolio">
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                	<?php 
                	include'admin/db_connect.php';
                	$qry = $conn->query("SELECT * FROM  room_categories order by rand() ");
                	while($row = $qry->fetch_assoc()):
                	?>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="#">
                            <img class="img-fluid" src="assets/img/<?php echo $row['cover_img'] ?>" alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-30"><?php echo "$ ".number_format($row['price'],2) ?> per day</div>
                                <div class="project-name"><?php echo $row['name'] ?></div>
                            </div>
                        </a>
                    </div>
                	<?php endwhile; ?>

                </div>
            </div>
        </div>
