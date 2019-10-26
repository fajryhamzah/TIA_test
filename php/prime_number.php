<?php


function getPrime($n){
	$output = array();
	for($i=2;$i < $n;$i++){
		if(($i%2 == 0) && ($i != 2)) continue;
		
		$flag = true;
		for($a=2;$a < $i;$a++){
			if($i%$a == 0){
				$flag = false;
			}
		}

		if($flag) $output[] = $i;
	}

	return $output;
}


print_r(getPrime(5));
print_r(getPrime(10));
print_r(getPrime(100));