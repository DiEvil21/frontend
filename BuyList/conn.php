<?php
	$conn = new mysqli("localhost", "ck05169_task", "Dimon210401", "ck05169_task");
	
	if(!$conn){
		die("Error: Cannot connect to the database");
	}
?>