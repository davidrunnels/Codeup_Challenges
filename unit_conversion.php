<?php


$measure = array(
    'tsp' => array(1, .333, .167, .02083, .0104167),
    'tbsp' => array(3, 1,  .5, .0625, .03125),
    'oz' => array( 6, 3, 1, 8, 16),
    'cup' => array(48, 16, 8, 1, .5),
    'pint' => array(96, 32, 16, 2, 1)
);

    echo "Which unit of measure do you have?" . PHP_EOL . "(1)teaspoon, (2)tablespoon, (3)fluid ounce, (4)cup, (5)pint: ";

    $start = trim(fgets(STDIN));
    
if ($start == '1') {
    $unit1 = 'tsp';

} elseif ($start == '2') {
    $unit1 = 'tbsp';

} elseif ($start == '3') {
    $unit1 = 'oz';

} elseif ($start == '4') {
    $unit1 = 'cup';
    
} elseif ($start == '5') {
    $unit1 = 'pint';
}
   
    echo "Number of units: ";
    $amount = trim(fgets(STDIN));

    echo "To which unit of measure do you want to convert?" . PHP_EOL . "(1)teaspoon, (2)tablespoon, (3)fluid ounce, (4)cup, (5)pint: ";

    $convert_unit = trim(fgets(STDIN));
    $convert_id = $convert_unit;

    if ($convert_unit == '1') {
    $unit2 = $measure[$unit1][0];

} elseif ($convert_unit == '2') {
    $unit2 = $measure[$unit1][1];

} elseif ($convert_unit == '3') {
    $unit2 = $measure[$unit1][2];

} elseif ($convert_unit == '4') {
    $unit2 = $measure[$unit1][3];

} elseif ($convert_unit == '5') {
    $unit2 = $measure[$unit1][4];
}

if ($convert_id == '1') {
    $unit_id = 'tsp';

} elseif ($convert_id == '2') {
    $unit_id = 'tbsp';

} elseif ($convert_id == '3') {
    $unit_id = 'oz';

} elseif ($convert_id == '4') {
    $unit_id = 'cup';

} elseif ($convert_id == '5') {
    $unit_id = 'pint';
}
    echo "Your " . $amount . " " . $unit1 . " converts to " . $unit2 * $amount . " " . $unit_id . PHP_EOL;

