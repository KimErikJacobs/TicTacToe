<?php

class Player {
	/**
	* @var string name
	*/
	private $name;

	/**
	* @var string symbol
	*/
	private $symbol;
	
	public function __construct($name, $symbol){
		$this->name = $name;
		$this->symbol = $symbol;
	}
	
	public function getName(){
		return $this->name;
	}
	
	public function getSymbol(){
		return $this->symbol;
	}
	
	
	
}
?>