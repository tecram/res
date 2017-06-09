<?php
require('../../../../wp-load.php');
if(is_user_logged_in()){
global $wpdb;
$sql="SELECT * FROM contact";
$listado=$wpdb->get_results($sql, ARRAY_A);

$archivo="Name;Last Name;Address;Email;Country;City;Phone;Comment\n";

foreach ($listado as $value) {
	//$comentario=str_replace("\n", "\r\n", $value["comment"]);
	
	$archivo.=utf8_decode($value["name"]).";".utf8_decode($value["lastname"]).";".utf8_decode($value["address"]).";".$value["email"].";".$value["country"].";".$value["city"].";".$value["phone"].";\"".utf8_decode($value["comment"])."\";"."\n";
}
header("Content-Description: File Transfer"); 
header("Content-Type: application/force-download"); 
header("Content-Disposition: attachment; filename=mail-export.csv"); 
echo $archivo;
}else{
	header("location:/");
}
 ?>