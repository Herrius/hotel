<?php 

$link = mysqli_connect('localhost','root','1234');


mysqli_select_db($link, "hotel");

$tildes = $link->query("SET NAMES 'utf8'"); //Para que se inserten las tildes correctamente

mysqli_query($link, "INSERT INTO checked(ref_no, room_id, name, contact_no, date_in, date_out, booked_cid, status, date_updated) VALUES ('Pedro2', 'Gómez Gómez', 'C/ Buenaventura 54', '699887766', 35, 1.98)");


mysqli_close($link); // Cerramos la conexion con la base de datos

echo 'Los datos han sido insertados en la base de datos';

?>