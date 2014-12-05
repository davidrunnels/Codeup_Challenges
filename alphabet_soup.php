<?php


function alphabet_soup($string) {
	$word_array = str_split($string);
	natcasesort($word_array);
	$soup = implode($word_array);
	return $soup;
}

echo "I'll make alphabet soup for you!\nGive me a list of words or a phrase: ";
$word = (trim(fgets(STDIN)));
echo alphabet_soup($word);

