<?php

class TipperService{
	
	function getAllUser(  ) {
		$sql = "SELECT * FROM tipper";
		$res = $db->query( $res );
		while( $ds = $res->fetch_assoc( ) ){
			/*
			$bean = new TipperBean;
			$bean->setId( $ds['id'] );
			*/
			$erg = new Ergebniss();
			$bean->setErg = $erg->getErgebnisse();
			$ar[]['name'] = $ds['name'];
	
		}
		return $ar;
	} 
	
	public static function getTest(){
		return new TipperService;
		
	}
	
}
?>