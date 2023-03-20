<?php

ini_set( 'display_errors', 1 );
define( 'SMARTY_DIR', 'C:/Program Files/Smarty/libs/' );
require_once( SMARTY_DIR .'Smarty.class.php' );
require_once('new_menu.php');

$smarty = new Smarty();

$smarty->template_dir = 'C:/Users/user/workspace/smart_sk/templates/';
$smarty->compile_dir  = 'C:/Users/user/workspace/smart_sk/templates_c/';
$smarty->config_dir   = 'C:/Users/user/workspace/smart_sk/configs/';
$smarty->cache_dir    = 'C:/Users/user/workspace/smart_sk/cache/';

?>
