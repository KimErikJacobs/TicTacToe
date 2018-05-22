<?php

class TicTacToe {
	/**
	* @var Board $board
	**/
	private $board;
	
	/**
	* @var Player playerOne
	**/
	private $playerOne;
	
	/**
	* @var Player playerTwo
	**/
	private $playerTwo;
	
	/**
	* @var Player currentPlayer
	**/
	private $currentPlayer;
	
	public function __construct(Board $board, Player $playerOne, Player $playerTwo){
		$this->board = $board;
		$this->playerOne = $playerOne;
		$this->playerTwo = $playerTwo;
		$this->currentPlayer = $playerOne;
	
	}
	
	/** Calls relevant methods for a playturn
	* @param int $row
	* @param int $col
	**/
	public function playTurn($row, $col) {
		$this->board->setPosition($row, $col, $this->currentPlayer->getSymbol());
		$this->board->boardInHTML($this->currentPlayer);
		$this->switchPlayer();
	}
	
	/**
	*
	**/
	public function checkUnique($check) {
		if (count($check) === 1 && !empty($check[0])){
			return true;
		}
	}
	
	/** checks rows and columns for a winner
	* @param Board $board
	* @var string $winner
	**/
	public function checkWinner($board){
			$winner = "";
			if($board[0][0] == "O" && $board[0][1] == "O" && $board[0][2] == "O")
			{
				$winner = "O";
			}
			if($board[1][0] == "O" && $board[1][1] == "O" && $board[1][2] == "O")
			{
				$winner = "O";
			}
			if($board[2][0] == "O" && $board[2][1] == "O" && $board[2][2] == "O")
			{
				$winner = "O";
			}
			if($board[0][0] == "O" && $board[1][1] == "O" && $board[2][2] == "O")
			{
				$winner = "O";
			}
			if($board[2][0] == "O" && $board[1][1] == "O" && $board[0][2] == "O")
			{
				$winner = "O";
			}
			if($board[0][0] == "O" && $board[1][0] == "O" && $board[2][0] == "O")
			{
				$winner = "O";
			}
			if($board[0][1] == "O" && $board[1][1] == "O" && $board[2][1] == "O")
			{
				$winner = "O";
			}
			if($board[0][2] == "O" && $board[1][2] == "O" && $board[2][2] == "O")
			{
				$winner = "O";
			}
			
			
			if($board[0][0] == "X" && $board[0][1] == "X"&& $board[0][2] == "X")
			{
				$winner = "X";
			}
			if($board[1][0] == "X" && $board[1][1] == "X" && $board[1][2] == "X")
			{
				$winner = "X";
			}
			if($board[2][0] == "X" && $board[2][1] == "X" && $board[2][2] == "X")
			{
				$winner = "X";
			}
			if($board[0][0] == "X" && $board[1][1] == "X" && $board[2][2] == "X")
			{
				$winner = "X";
			}
			if($board[2][0] == "X" && $board[1][1] == "X" && $board[0][2] == "X")
			{
				$winner = "X";
			}
			if($board[0][0] == "X" && $board[1][0] == "X" && $board[2][0] == "X")
			{
				$winner = "X";
			}
			if($board[0][1] == "X" && $board[1][1] == "X" && $board[2][1] == "X")
			{
				$winner = "X";
			}
			if($board[0][2] == "X" && $board[1][2] == "X" && $board[2][2] == "X")
			{
				$winner = "X";
			}
			
			if ($winner == "O")
			{
				return '<script>alert("O wins");</script>';
			} elseif ($winner == "X")
			{
				return '<script>alert("X wins");</script>';
			}
	}
	
	/** Switches from playerOne to playerTwo or from playerTwo to playerOne
	*
	**/
	public function switchPlayer() {
		if ($this->currentPlayer === $this->playerOne)
		{
			$this->currentPlayer = $this->playerTwo;
		}	
		elseif ($this->currentPlayer === $this->playerTwo)
		{
			$this->currentPlayer = $this->playerOne;
		}					
	}
	
	public function getCurrentPlayer() {
		return $this->currentPlayer;
	}
	
	/**
	* @return $board
	**/
	public function getBoard(){
		return $this->board;
	}
	
}