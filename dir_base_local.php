<?php

ini_set( 'display_errors', 1 );
define( 'SMARTY_DIR', '/var/www/vhosts/sunkithokkaido.local/public_html/libs/' );
require_once( SMARTY_DIR .'Smarty.class.php' );
require_once('new_menu.php');

date_default_timezone_set('Asia/Tokyo');

$smarty = new Smarty();

$smarty->template_dir = '/var/www/vhosts/sunkithokkaido.local/public_html/templates/';
$smarty->compile_dir  = '/var/www/vhosts/sunkithokkaido.local/public_html/templates_c/';
$smarty->config_dir   = '/var/www/vhosts/sunkithokkaido.local/public_html/configs/';
$smarty->cache_dir    = '/var/www/vhosts/sunkithokkaido.local/public_html/cache/';

?>
