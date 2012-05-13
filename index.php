<?php


require_once 'libs/smarty/Smarty.class.php';
require_once 'classes/Database.php';
require_once 'classes/services/TipperService.php';
require_once 'classes/services/MannschaftenService.php';
require_once 'libs/facebook/facebook.php';
$smarty = new Smarty();



$d = $_GET['d']; 
$s = $_GET['s']; 
$g = $_GET['g'];


if( $d == '' ){
	
	$user = new TipperService();
	$ar = $user->getAllUser();
	echo "<pre>";
	print_r ( $ar );
	echo "</pre>";
	
	echo "<hr>";
	
	echo $ar[0]->getName();
	$smarty->assign("test", $ar );
	$smarty->display( 'tpl/test.tpl' );
	/*
	$smarty->assign( "startseite",  "Startseite" );
	$content = $smarty->fetch( 'tpl/startseite.tpl' );
	*/
	
}elseif( $d == 'tipps' ){

	/*
	$smarty->assign( "tipps", "Tipps" );
	$content = $smarty->fetch( 'tpl/tipps.tpl' );
	$tipper = new TipperService();
	print_r ( $tipper->getAllUser() ) ;
	*/
	/*
	$cat = new CategoryService;

	$ent = new EntrieService;
	$ar = $ent->getEntByCat( $d );
	$smarty->assign( 'News',  $ar );
	$content .= $smarty->fetch( 'tpl/uebersicht.tpl' );
	
*/
	
	
}elseif( $d != '' AND $s != '' ){
	$user = new TipperService();
	print_r ( $user->getUserById( $s ) );
	
}elseif( $d == 'admin' ){
	
	$mannschaft = new MannschaftenService();
	$alleMannschaften = $mannschaft->getAllMannschaften();
	//Array mit allen Mannschaften befüllen
	$smarty->assign( 'mannschaften', $alleMannschaften);
	$smarty->display( 'tpl/editMannschaften.tpl' );

	
}
/*
	$smarty->assign( 'header', $header );	
	$smarty->assign( 'content', $content );
	$smarty->display( 'tpl/index.tpl' );	
*/


?>
