<?php
/**
 * Created by PhpStorm.
 * User: Uri
 * Date: 1/31/2019
 * Time: 7:13 PM
 */

define('WEAPON', 'weapon');
define('WEAPON_NUMBER', 'weapon_number');
define('FILE', '../data/weapon-list.csv');

$rows = @array_map('str_getcsv', file(FILE)); //store CSV file into array $rows
if (empty($rows)) { // *** IF Statement to make sure file is loaded ****
    echo "<h1>Unable to Read from '" . FILE . "' or the file is empty.</h1>";
    exit;
}
$header = array_shift($rows); //remove header (first CSV line) from $rows and store in $header
$header = array_map('strtolower', $header); //make $header values lowercase
$header = str_replace(' ', '_', $header); //replace spaces with underscores
$weapon_list = array(); // Create array named $weapon_list

foreach ($rows as $row) {
    // Loop to go through each element (another array in this case) of the array "$rows"
    // and to assign it to "$row" to be used in the array_combine() function.
    $weapon_list[] = array_combine($header, $row); //combines two arrays into an associative array. first argument will
    //be the key and the second will be the value.
}
foreach ($rows as $row) {
    // Loop to go through each element (another array in this case) of the array "$rows"
    $weapon_list_short[] = $row[0]; //grab the first element in each array/element and
    // attach to new array "$weapon_list_short"
}

$weapon_number = $_GET[WEAPON_NUMBER] ?? 0;
$weapon_choice = $weapon_list[$weapon_number];
?>