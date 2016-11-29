<?php

class RandomInterger{

	public function getRand(){
		
		$oddEvenRand = mt_rand(0, 2);
		return $oddEvenRand;
	}
}
?>
