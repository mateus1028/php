<?php
	$data = json_decode(file_get_contents("https://skzws1337.000webhostapp.com/retornaSessoes/"));
	
	echo "<pre>";
	print_r($data);
	echo "</pre>";
?>