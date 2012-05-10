<?php
require_once 'libs/smarty/Smarty.class.php';
require_once 'database.php';
$smarty = new Smarty();

error_reporting( E_ERROR | E_WARNING | E_PARSE );
if( $_GET['d']  == '' ){
	$user = new TipperService;
	$ar = $user->getAllUser();
	$header = Header::getHeader();
	$test = TipperService::getTest();
	$smarty->assign( "mannschaften", $ar );
}elseif( $_GET['d'] == 'detail' ) {

}



/*
$smarty->assign( "allew", $content );
$smarty->display( 'tpl/test.tpl' );

$db = new Database();
$d = $db->create();

$sql = "SELECT * FROM test";
$res = $d->query( $sql );
while( $ds = $res->fetch_assoc(  ) ){
	echo $ds['test'];
}


*/
$smarty->assign( "header", $header );
$smarty->assign( "allew", $content );
$smarty->display( 'tpl/test.tpl' );
?>
