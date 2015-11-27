<?php
	
	function is_localhost() {
	    $whitelist = array( '127.0.0.1', '::1' );
	    if( in_array( $_SERVER['REMOTE_ADDR'], $whitelist) )
	        return true;
	}

	$generated_image_url = 'http://www.modelbuffs.com/mpm/uploads/';
	$website = 'mb';
	$maxResultsPerPage = 20;
	
	require_once '../vendor/autoload.php';
		
	if(is_localhost()) require_once '../config/config_local.php';
	else require_once '../config/config_online.php';			
	
?>


