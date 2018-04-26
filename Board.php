<?php

class Board {
	/**
	* @var array $board
	**/
	private $board = array(array("","",""),
					 array("","",""),
					 array("","",""),
			
					 );
	
	/**
	* @return $board
	*/
	public function getBoard(){
		return $this->board;
	}


	public function getPosition(){
		$field = $_GET;
		var_dump ($field);
	}
}