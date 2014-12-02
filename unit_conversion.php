<?php


$measure = array(
$tsp = array('tsp' => 1, 'tbsp' => .333, 'oz' => .167, 'cup' => .02083, 'pint' => .0104167),
$tbsp = array('tsp' => 3, 'tbsp' => 1, 'oz' => .5, 'cup' => .0625, 'pint' => .03125),
$oz = array('tsp' => 6, 'tbsp' => 3, 'oz' => 1, 'cup' => 8, 'pint' => 16),
$cup = array('tsp' => 48, 'tbsp' => 16, 'oz' => 8, 'cup' => 1, 'pint' => .5),
$pint = array('tsp' => 96, 'tbsp' => 32, 'oz' => 16, 'cup' => 2, 'pint' => 1),
);

function find_amount($measure) 
{
    $x = '';
    foreach($measure as $key => $amount) 
    {
        $key++;
        $x .= "[{$key}] {$amount}\n";
    }
    return $x;
}

// get user input 1) $starting_unit of measure 2) $convert_unit of measure which to convert 3) $amount_of_starting_unit
// $starting_unit will search $measure $convert_unit will search for conversion
// $convert_unit * $amount_of_starting_unit = $converted_amount