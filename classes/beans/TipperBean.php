<?php

class TipperBean{
	
	private $id;
	
	function setId( $t ){ $this->id = $t; }
	function getId( $manipulieren ) { return $this->id . $manipulieren; }
	
}

?>