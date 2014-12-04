<?php


function palindrome_checker($string) {
	$string = strtolower(str_replace(' ','',$string)); 
	$stringReversed = strrev($string);
	if ($stringReversed === $string) {
		echo "Yes, {$string} is a palindrome.\n";
	} else {
		echo "No, {$string} is not a palindrome.\n";
	}
}

echo "Type a word you think is a palindrome: ";
$word = trim(fgets(STDIN));
palindrome_checker($word);
