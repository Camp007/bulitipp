<?php

require_once 'classes/Database.php';
require_once 'classes/beans/MannschaftenBean.php';

class MannschaftenService
{
	//Konstruktor
	function __construct()
	{
		$this->db = Database::create();	
	}
	
	//Liest alle Mannschaften und schreibt Daten in Array
	function getAllMannschaften()
	{
		$sql = "SELECT * FROM mannschaften";
		$result = $this->db->query( $sql );
		
		while($datensatz = $result->fetch_assoc())
		{
			$mannschaft = new MannschaftenBean();
			$mannschaft->setMannschaft($datensatz['m_name']);
			$mannschaft->setIcon($datensatz['m_icon']);
			$alleMannschaften[] = $mannschaft;
		}
		
		return $alleMannschaften;
	}
	
	//Liest eine Mannschaft mit Hilfe der ID aus und liefert das Objekt
	function getMannschaftById( $id )
	{
		$gesuchteMannschaft = new MannschaftenBean();
		$sql = "SELECT * FROM mannschaften WHERE m_Id =". $id;
		$result = $this->db->query( $sql );
		$mannschaft = $result->fetch_assoc();
		
		$gesuchteMannschaft->setMannschaft($mannschaft['m_name']);
		$gesuchteMannschaft->setIcon($mannschaft['m_icon']);
		
		return $gesuchteMannschaft;
	}
}