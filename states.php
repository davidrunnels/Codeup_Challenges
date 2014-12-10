<?php

// function to get input

function get_input($upper = FALSE)
{
	$request = trim(fgets(STDIN));
    return $upper ? strtoupper($request) : $request;
}

// function to check input (list or search)

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

// function to open file

function open(){
 
		$filename = 'data/states.txt';
		$handle = fopen($filename, "r");
		$contents = fread($handle, filesize($filename));
		fclose($handle);
 
		$states = explode("\n", $contents);
 
		return $states;
}

// function to the list_file state, capital and bird
	//fopen, fread, fclose
	
function list_file(){
		$filename = 'data/states.txt';$handle = fopen($filename, "r");
		$contents = fread($handle, filesize($filename));
		fclose($handle);
	
	// explode
		
		$statesArray = explode("\n", $contents);

	// foreach
		
		foreach($statesArray as $capitol => $v) 

		{

		  $statesArray[$capitol] = explode("Q", $statesArray[$capitol]);
		 foreach($statesArray[$capitol] as $bird => $vv) 

		 {
		    $statesArray[$capitol][$bird] = explode(" ", $statesArray[$capitol][$bird]);
		  }

		}

		print_r($statesArray, true);

// function to search for state, capital or bird

// function to search state by first letter

// function to search capital by first letter

// function to search bird by first letter

// application script
	// do {
	// 
	// }while
