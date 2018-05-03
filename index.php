<?php
session_start();
//session_destroy();
require_once("TicTacToe.php");
require_once("Template.php");
require_once("Board.php");
require_once("Player.php");

if (isset($_SESSION['TicTacToe'])) {
	$game = unserialize($_SESSION['TicTacToe']);
	$row = null;
	$col = null;
	for ($i = 0; $i < count($game->getBoard()->getBoard()); $i++) {
		
		for ($j = 0; $j < count($game->getBoard()->getBoard()); $j++) {
			if(isset($_GET['cell-'.$i.'-'.$j])){
				$output = $_GET['cell-'.$i.'-'.$j];
				var_dump($output);
				$row = $i;
				$col = $j;
				break;
			}
		}
	}
	$game->playTurn($row,$col);
} 
else {
	$board = new Board();
	$playerOne = new Player("SpielerEins", "X");
	$playerTwo = new Player("SpielerZwei", "O");
	$game = new TicTacToe($board, $playerOne, $playerTwo);
}
$_SESSION['TicTacToe'] = serialize($game);

