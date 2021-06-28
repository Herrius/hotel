<?php
include'admin/db_connect.php';
 
function get_city($conn , $term){ 
 $query = "SELECT * FROM rooms WHERE Lugar LIKE '%".$term."%' GROUP BY Lugar";
 $result = mysqli_query($conn, $query); 
 $data = mysqli_fetch_all($result,MYSQLI_ASSOC);
 return $data; 
}
 
if (isset($_GET['term'])) {
 $getCity = get_city($conn, $_GET['term']);
 $cityList = array();
 foreach($getCity as $city){
 $cityList[] = $city['Lugar'];
 }
 echo json_encode($cityList);
}
?>