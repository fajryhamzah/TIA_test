<?php

function json_encode_exclusive($arr){
	//get all keys
	$keys = array_keys($arr[0]);
	$val = array();

	foreach($arr as $entry){
		$dat = array();
		foreach($entry as $row){
			$dat[] = $row;
		}
		$val[] = $dat;
	}
	//var_dump($val);
	$encode = array("h"=>$keys,"d"=>$val);
	return json_encode($encode);
}


// $res = array(
// 			array("username" => "ali", "hair_color" => "brown", "height" => 1.2),
// 			array("username" => "marc", "hair_color" => "blue", "height" => 1.4),
// 			array("username" => "joe", "hair_color" => "brown", "height" => 1.7),
// 			array("username" => "zehua", "hair_color" => "black", "height" => 1.8)
// 		);

// var_dump(json_encode_exclusive($res));