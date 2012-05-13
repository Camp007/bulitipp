<?php
require_once 'classes/Database.php';
require_once 'classes/beans/TipperBean.php';

class TipperService{
	
	private $db;
	
	function __construct(){
		$this->db = Database::create();
	}
	
	function getAllUser(  ) {
		
		$sql = "SELECT * FROM tipper";
		$res = $this->db->query( $sql );
		while( $ds = $res->fetch_assoc( ) ){
			
			$bean = new TipperBean;
			$bean->setName( $ds['t_name'] );
			$ar[] = $bean;

	
		}
		return $ar;
	} 
	
	
	public function getUserById( $id ){
		$sql = "SELECT * FROM tipper where t_id = ' " . $id ." ' ";
		$res = $this->db->query( $sql ); 
		$ds = $res->fetch_assoc();
		$bean = new TipperBean;
		$bean->setName( $ds['t_name'] );
		return $bean;
	}
	
	public static function getTest(){
		return new TipperService;
		
	}
	
}
?>