<?php

class Database  {

	private $localhost = 'localhost';
	private $db_benutzer = 'root';
	private $db_passwort = '';
	private $db_name = 'mycms';
	private static $database = null;
	private $db_conn = null;

	public static function create(){
		if ( !Database::$database ) {
			Database::$database  = new Database();
		}
		return Database::$database ;
	}
	
	/**
	 * Stellt eine Datenbankverbindung her.
	 */
	private function __construct(){
		$this->db_conn= new mysqli( $this->localhost, $this->db_benutzer, $this->db_passwort, $this->db_name );
	}
	private function dbConnect() {
		return $this->db_conn; 
	}
	
	
	/**
	 * 
	 * Escapte den �bergebenen String.
	 * @param string oder array $esc
	 */
	public function escape( $esc ){
		$db = $this->dbConnect();
		if( is_array( $esc ) ){
			foreach($esc AS $escape => $key){
				$ar[$escape] =  $db->real_escape_string($key);
			}
		}else{
			$ar = $db->real_escape_string( $esc );
		}
		return $ar;
	}
	
	/**
	 * F�hrt die Query Funktion aus.
	 * @param string $sql
	 */
	public function query( $sql ){
		$db = $this->dbConnect();
		$res = $db->query( $sql );
		return $res;		
	}
	/**
	 * 
	 * Gibt eine funktionsf�hige URL zur�ck
	 * @param string $titel
	 */
	public function createUrl( $titel ){
		$das = array( "\"", " ", "�", "�", "�", "'", ":", ",","?","!",";", ".", "�" );
		$mitdem = array( "", "-", "ue", "oe", "ae", "-", "", "", "","","", "", "" );
		$url = strtolower( str_replace( $das, $mitdem, $titel ) );
		return $url;
	}


	

}
?>