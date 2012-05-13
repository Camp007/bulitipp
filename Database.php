<?php

class Database  {
	
	private $localhost = '89.107.184.2';
	private $db_benutzer = 'wa5158_6';
	private $db_passwort = 'zT9FQuz3';
	private $db_name = 'wa5158_db6';
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
	 * Escapte den übergebenen String.
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
	 * Führt die Query Funktion aus.
	 * @param string $sql
	 */
	public function query( $sql ){
		$db = $this->dbConnect();
		$res = $db->query( $sql );
		return $res;		
	}



	

}
?>