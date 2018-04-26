<?php

class TicTacToe {
	/**
	* @var array $board
	**/
	private $board = array(array("","",""),
					 array("","",""),
					 array("","",""),
			
					 );
	
	/**
	* Sets an "O" in $row/$column
	* @param int $row
	* @param int $column
	**/
	public function playTurn($row, $column) {
		$this->board[$row] [$column] = "X";
		$this->checkWinner();
	}

	
	public function showBoard(){
		if ($this->checkWinner() == true) {
			print("Winner");
		}
	}
	
	public function checkUnique($check) {
		if (count($check) === 1 && !empty($check[0])){
			return true;
		}
	}
	
	public function checkWinner(){
		for ($iRow = 0; $iRow < count($this->board); $iRow++) {
			$checkRow = array_unique($this->board[$iRow]);

			for ($iColumn = 0; $iColumn < count($this->board); $iColumn++) {
				$checkColumn = array_unique($this->board[$iColumn]);

			}
			
			$currDiaColumn = count($this->board) - 1 - ($iRow);
			$checkDiaLeft[] = $this->board[$iRow][$currDiaColumn];
			$checkDiaRight[] = $this->board[$iRow][$iRow];
			if ($this->checkUnique($checkDiaLeft) 
				|| $this->checkUnique($checkDiaRight) 
				|| $this->checkUnique($checkRow) 
				|| $this->checkUnique($checkColumn)){
				return true;
			}
		}
	}
		
	public function switchPlayer() {
		
		//ToDo
	}
}