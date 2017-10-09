<?php
	header('Content-Type: application/json');
	echo file_get_contents("https://www.citibikenyc.com/stations/json");
?>