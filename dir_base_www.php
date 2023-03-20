<?php

ini_set( 'display_errors', 1 );
define( 'SMARTY_DIR', './libs/' );
require_once( SMARTY_DIR .'Smarty.class.php' );
require_once('new_menu.php');

date_default_timezone_set('Asia/Tokyo');

$smarty = new Smarty();

$smarty->template_dir = './templates/';
$smarty->compile_dir  = './templates_c/';
$smarty->config_dir   = './configs/';
$smarty->cache_dir    = './cache/';

?>
