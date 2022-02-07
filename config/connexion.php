<?php
	$conex=new mysqli("localhost","root","","enset");
	if ($conex->connect_error) {
            die("Connection failed: " . $conex->connect_error);
        } 
?>