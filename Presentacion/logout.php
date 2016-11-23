<?php 
    session_start(); 
    session_destroy(); 
	
    header('location: /SportNet/index.php'); 
?>