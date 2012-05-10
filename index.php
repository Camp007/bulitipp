<?php
require_once 'libs/smarty/Smarty.class.php';
require_once 'database.php';
$smarty = new Smarty();

$smarty->assign( "test", "was auch immer " );
$smarty->display( 'tpl/test.tpl' );

$db = new Database();
$d = $db->create();

$sql = "SELECT * FROM test";
$res = $d->query( $sql );
while( $ds = $res->fetch_assoc(  ) ){
	echo $ds['test'];
}



?>
