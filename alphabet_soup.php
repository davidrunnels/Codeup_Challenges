<?php


function alphabet_soup($string) {
	$soup = '';
	$word_array = explode(" ", $string);
	
	foreach($word_array as $word) {
		$word = explode(' ', $word);
		$letters = str_split($word[0]);
		natcasesort($letters);
		$broth = implode('', $letters);
		$soup .= $broth . " ";
		
	}
	return $soup;
}

echo "I'll make alphabet soup for you!\nGive me a list of words or a phrase: ";
$word = trim(fgets(STDIN));
echo alphabet_soup($word);

