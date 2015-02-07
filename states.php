<?php

function get_input($upper = FALSE)
{
	$request = trim(fgets(STDIN));
	return $upper ? strtoupper($request) : $request;
}

function option($input)
{
	switch ($input) 
	{
		case 'L':
		return list_file();
		break;
		case 'S':
		return search(open());
		break;
	}

}

function open(){

	$filename = 'data/states.txt';
	$handle = fopen($filename, "r");
	$contents = fread($handle, filesize($filename));
	fclose($handle);

	$states = explode("\n", $contents);

	return $states;
}

function list_file(){
	$filename = 'data/states.txt';$handle = fopen($filename, "r");
	$contents = fread($handle, filesize($filename));
	fclose($handle);

	$statesArray = explode("\n", $contents);

	foreach($statesArray as $capital => $v) {
		$statesArray[$capital] = explode("Q", $statesArray[$capital]);

		foreach($statesArray[$capital] as $bird => $vv) {
			return $statesArray[$capital][$bird] = explode(" ", $statesArray[$capital][$bird]);
		}

	print_r($statesArray, true);

	}
}

function search($list){
	echo "(S)tate | (C)apital | (B)ird : ";
	$filter = get_input(TRUE);
	$array = $list;

	switch ($filter) {
		case 'S':
		echo "Enter the first letter to search for a state: ";
		$state = get_input(TRUE);
		$filtered_state = filter_state($array , $state);
		return $filtered_state;
		break;
		case 'C':
		echo "Enter the first letter to search for a capital: ";
		$capital = get_input(TRUE);
		$filtered_capital = filter_capital($array , $capital);
		return $filtered_capital;
		break;
		case 'B':
		echo "Enter the first letter to search for a state bird: ";
		$bird = get_input(TRUE);
		$filtered_bird = filter_bird($array , $bird);
		return $filtered_bird;
		break;
	}

}

function filter_state($array, $var) {
	foreach($array as $state){
		if ($state[0] === $var){
			echo PHP_EOL . $state . PHP_EOL . PHP_EOL;
		}
	}
}

function filter_capital($array, $var) {
	foreach($array as $state){
		$newstate = explode(", " , $state);
		if(substr($newstate[1], 0, 1) == $var){
			echo PHP_EOL . $state . PHP_EOL . PHP_EOL;
		}
	}
}


function filter_bird($array, $var) {
	foreach($array as $state){
		$newstate = explode(", " , $state);
		if(substr($newstate[2], 0, 1) == $var){
			echo PHP_EOL . $state . PHP_EOL . PHP_EOL;
		}
	}
}

do {
	echo "(L)ists | (S)earch | (Q)uit: ";
	$choice = get_input(TRUE);

	option($choice);

} while($choice != 'Q');
