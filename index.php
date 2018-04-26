<?php

require_once("TicTacToe.php");
require_once("template.php");
require_once("board.php");

$board = new Board();

$game = new TicTacToe();
$game->playTurn(0, 0);
$game->playTurn(1, 1);
$game->playTurn(2, 2);
$game->showBoard();
$board->getPosition();
print_r($board->getBoard());


