<?php

	if($_SERVER['SERVER_NAME'] == 'localhost:8085'){
		require_once('dir_base_docker.php');
	}elseif($_SERVER['SERVER_NAME'] == 'sunkithokkaido.local'){
		require_once('dir_base_local.php');
	}elseif($_SERVER['SERVER_NAME'] == 'sunkithokkaido.com'){
		require_once('dir_base_www.php');
	}elseif($_SERVER['SERVER_NAME'] == 'smart.sunkit'){
		require_once('dir_base_home.php');
	}
	
?>
