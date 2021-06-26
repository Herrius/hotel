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
                                             <input type="text" name="city" id="search_city" placeholder="" class="form-control" required>  
    
                                             <script>
											$(document).ready(function() {
  var dateInput = $('input[name="date"]'); // Our date input has the name "date"
  
  dateInput.datepicker({
    format: 'yyyy-mm-dd',
    
    todayHighlight: true,
    autoclose: true,
    startDate: truncateDate(new Date()) // <-- THIS WORKS
  });

  $('#date').datepicker('setStartDate', truncateDate(new Date())); // <-- SO DOES THIS
});

function truncateDate(date) {
  return new Date(date.getFullYear(), date.getMonth(), date.getDate());
}
												 
											

    </script>
	
	 <script>
											$(document).ready(function() {
  var dateInput = $('input[name="date_out"]'); 
 
  dateInput.datepicker({
     format: 'yyyy-mm-dd',
 
    todayHighlight: true,
    autoclose: true,
    startDate: truncateDate(new Date()) // <-- THIS WORKS
  });

  $('#date_out').datepicker('setStartDate', truncateDate(new Date())); 
});

function truncateDate(date) {
  return new Date(date.getFullYear(), date.getMonth(), date.getDate());
}
												 
											

    </script>
                    						</div>
                                            <div class="col-md-3">
                    							<label for="">Check-in Date</label>
                    							<input class="form-control" id="date" name="date"  type="text" />
                    						</div>
                    						<div class="col-md-3">
                    							<label for="">Check-out Date</label>
                    							<input type="text" class="form-control datepicker" name="date_out" id="date_out" autocomplete="off" required>
                    						</div>
                                            <div class="col-md-3">
                    									</div>
                                            <div class="col-md-3">
                    							<label for="">Adultos</label>
                    							<input class="form-control" type="number" value="1" min="1" onkeypress="return false;" required>
                    						</div>

                                              <div class="col-md-3">
                    							<label for="">Niños</label>
                    							<input class="form-control" type="number" value="0" min="0"  onkeypress="return false;" required>
                    						</div>

                                             <div class="col-md-3">
                    							<label for="">Habitacion</label>
                    							<input class="form-control" type="number" value="1" min="1" onkeypress="return false;" required>
                    						</div>
                    						
                    						<div class="col-md-3">
                    							<br>
                    							<button class="btn-btn-block btn-primary mt-3">Check Availability</button>
                    						</div>

                    					</div>
                    				</form>
                                    <script type="text/javascript">
  $(function() {
     $( "#search_city" ).autocomplete({
       source: 'ajax-city-search.php',
     });
  });
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
