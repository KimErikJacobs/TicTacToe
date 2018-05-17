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


	public function boardInHTML(){
		$output = "";
		
		for($row = 0; $row < count($this->board); $row++){
			$output .= "<tr>";
			
			for($col = 0; $col < count($this->board); $col++){
				if($this->board[$row][$col] === "X"){
					$output .= '<td><span class="colorX" name="cell-'.$row.'-'.$col.'" value="X" >X</span></td>';
				}
				elseif($this->board[$row][$col] === "O"){
					$output .= '<td><span class="colorO" name="cell-'.$row.'-'.$col.'" value="X" >O</span></td>';
				}
				else{
					$output .= '<td><input type="submit" class="reset field" name="cell-'.$row.'-'.$col.'" value="X" /></td>';
				}
			}
		$output .= "</tr>";
		}
		return $output;
		
	}
		
	public function setPosition($row, $col){
	$this->board[$row][$col] = "X";
	//var_dump($this->board);
	}
	
	
}