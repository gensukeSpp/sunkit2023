<?php

require_once('select_req.php');

$smarty->assign( 'ttl', 'お買い物方法');
$smarty->assign( 'outer', $outer);
$smarty->assign( 'inner', $inner);

$smarty->debugging = false;
$smarty->display( 'buy.tpl' );

?> 
