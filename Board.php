<?php

class Board {
	/**
	* @var array $board
	**/
	private $board = array(
						array("","",""),
						array("","",""),
						array("","",""),
					 );
	

	/**
	* @return $board
	*/
	public function getBoard(){
		return $this->board;
	}


	public function setPosition($row, $col){
		//var_dump($this->board);
		$this->board[$row][$col] = "X";
		var_dump($this->board);
	}
	
}