<?php

	require_once __DIR__ . '/vendor/autoload.php';
	ini_set( 'display_errors', 1 );
	define( 'SMARTY_DIR', __DIR__ . '/vendor/smarty/smarty/libs/' );
	require_once SMARTY_DIR . 'Smarty.class.php';
	require_once('new_menu.php');

	$smarty = new Smarty();
    // require_once "It's call!";

	$smarty->template_dir = __DIR__ . '/templates';
	$smarty->compile_dir  = __DIR__ . '/templates_c';
	$smarty->config_dir   = __DIR__ . '/configs';
	$smarty->cache_dir    = __DIR__ . '/cache';
    $smarty->debugging = false;

?>