<?php
require_once 'libs/smarty/Smarty.class.php';
require_once 'classes/Database.php';
$smarty = new Smarty();

$d = $_GET['d']; $s = $_GET['s']; $g = $_GET['g'];


//Hallo Wuest
if( $d == '' ){
	

	$smarty->assign( "startseite",  "Startseite" );
	$content = $smarty->fetch( 'tpl/startseite.tpl' );
	
	
}elseif( $d == 'tipps' ){

	$smarty->assign( "tipps", "Tipps" );
	$content = $smarty->fetch( 'tpl/tipps.tpl' );
	
	/*
	$cat = new CategoryService;

	$ent = new EntrieService;
	$ar = $ent->getEntByCat( $d );
	$smarty->assign( 'News',  $ar );
	$content .= $smarty->fetch( 'tpl/uebersicht.tpl' );
	
*/
	
	
}elseif( $d != '' AND $s != '' ){
	
	
}

	$smarty->assign( 'header', $header );	
	$smarty->assign( 'content', $content );
	$smarty->display( 'tpl/index.tpl' );	



?>
