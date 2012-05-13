<?php

class TipperBean {
	
	private $id;
	private $name;
	
	
	function setId( $t ){ $this->id = $t; }
	function getId(  ) { return $this->id;  }
	
	function setName( $t ){ $this->name = $t; }
	function getName( ) { return $this->name ; }
}

?>