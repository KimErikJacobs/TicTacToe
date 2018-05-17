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
	
	/** Constructor of Player
	* @param string $name
	* @param string $symbol
	**/
	public function __construct($name, $symbol){
		$this->name = $name;
		$this->symbol = $symbol;
	}
	
	/**
	* @return $name
	**/
	public function getName(){
		return $this->name;
	}
	
	/**
	* @return $symbol
	**/
	public function getSymbol(){
		return $this->symbol;
	}
	
	
	
}
?>