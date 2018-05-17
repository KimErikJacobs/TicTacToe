<?php

class TicTacToe {
	/**
	* @var array $board
	**/
	private $board;
	
	/**
	* @var string playerOne
	**/
	private $playerOne;
	
	/**
	* @var string playerTwo
	**/
	private $playerTwo;
	
	/**
	* @var string currentPlayer
	**/
	private $currentPlayer;
	
	public function __construct(Board $board, Player $playerOne, Player $playerTwo){
		$this->board = $board;
		$this->playerOne = $playerOne;
		$this->playerTwo = $playerTwo;
		$this->currentPlayer = array($this->playerOne);
	}
	
	/** Calls relevant methods for a playturn
	* @param int $row
	* @param int $col
	**/
	public function playTurn($row, $col) {
		$this->switchPlayer();
		$this->checkWinner();
		$this->board->setPosition($row, $col);
		$this->board->boardInHTML($row, $col);
	}

	/**
	*
	**/
	public function showBoard(){
		if ($this->checkWinner() == true) {
			print("Winner");
		}
	}
	
	/**
	*
	**/
	public function checkUnique($check) {
		if (count($check) === 1 && !empty($check[0])){
			return true;
		}
	}
	
	/**
	*
	**/
	public function checkWinner(){
		var_dump($this->board->getBoard());
		for ($iRow = 0; $iRow < count($this->board->getBoard()); $iRow++) {
			$checkRow = array_unique($this->board->getBoard()[$iRow]);

			for ($iColumn = 0; $iColumn < count($this->board->getBoard()); $iColumn++) {
				$checkColumn[] = $this->board->getBoard()[$iColumn][$iRow];
				

			}
			
			$currDiaColumn = count($this->board->getBoard()) - 1 - ($iRow);
			$checkDiaLeft[] = $this->board->getBoard()[$iRow][$currDiaColumn];
			$checkDiaRight[] = $this->board->getBoard()[$iRow][$iRow];
			if ($this->checkUnique($checkDiaLeft) 
				|| $this->checkUnique($checkDiaRight) 
				|| $this->checkUnique($checkRow) 
				|| $this->checkUnique($checkColumn)){
				return true;
			}
		}
	}
	
	/** Switches from playerOne to playerTwo or from playerTwo to playerOne
	*
	**/
	public function switchPlayer() {
		if ($this->currentPlayer === $this->playerOne)
		{
			$this->currentPlayer === $this->playerTwo;
		}	
		elseif ($this->currentPlayer === $this->playerTwo)
		{
			$this->currentPlayer === $this->playerOne;
		}					

	}
	
	/**
	* @return $board
	**/
	public function getBoard(){
		return $this->board;
	}
}