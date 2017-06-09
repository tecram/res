<h1 style="margin: 50px auto; width: 398px;">Exportar Formularios de Contacto</h1>
<?php
if(is_user_logged_in()){
global $wpdb;
$sql="SELECT * FROM contact";
$listado=$wpdb->get_results($sql, ARRAY_A);

$cuenta=0;
$campos="";
foreach ($listado as $registro) {
	
	if($cuenta==0){
    echo "<table style='width:100%'><tr>";
  }else{
    echo "<tr>";
  }

	foreach ($registro as $key => $value) {
		if($cuenta==0){
	    	echo "<th style='border-bottom: 1px solid #000000;'>".strtoupper($key)."</th>";
	    	$campos.="<td style='border-bottom: 1px solid #000000;'>".nl2br($value)."</td>";
	    }else{
	      echo "<td style='border-bottom: 1px solid #000000;vertical-align: top;'>".nl2br($value)."</td>";
	    }
	}

	if($cuenta==0){
    echo "</tr>$campos";
  }else{
    echo "</tr>";
  }

	$cuenta++;
}

}
?>
</table>
<p><a href="../wp-content/themes/res/admin/exporter.php" target="_BLANK" style="display: block; width: 100px; text-align: center; font-size: 24px; text-decoration: none; color: #EEEEEE; background-color: #000000;">Export</a></p>