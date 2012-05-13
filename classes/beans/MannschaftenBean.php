<?php
class MannschaftenBean
{
	private $id;
	private $mannschaft;
	private $icon;

	function getId()
	{
		return $id;
	}
	
	function getMannschaft()
	{
		return $mannschaft;
	}
	
	function setMannschaft($setzeMannschaft)
	{
		$mannschaft = $setzeMannschaft;
	}
	
	function getIcon()
	{
		return $Icon;
	}
	
	function setIcon($setzeIcon)
	{
		$icon = $setzeIcon;
	}
	
}