<?php

require_once('select_req.php');

$smarty->assign( 'ttl', '会社概要');
$smarty->assign( 'outer', $outer);
$smarty->assign( 'inner', $inner);

$smarty->debugging = false;
$smarty->display( 'about.tpl' );

?> 
