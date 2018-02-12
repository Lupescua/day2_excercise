<?php

// the file we use to show arrays
require_once 'var_show.php';

$fruit = [
    'Apple', // automatically assigned index 0
    'Pear',  // automatically assigned index 1
    'Orange' // automatically assigned index 2
];

$fruit_colors = [
    'Apple' => 'Red',
    'Pear' => 'Green',
    'Orange' => 'Orange'
];

// var_show($fruit);
// var_show($fruit_colors);


$cars_i_want =[];
$cars_i_want[]= 'Aston Martin';
$cars_i_want[]= 'Bugatti';
$cars_i_want[]= 'Ferrari';
$cars_i_want[]= 'Lamborghini';
$cars_i_want[]= 'Maserati';
$cars_i_want[]= 'Mercedes';
$cars_i_want[]= 'Porsche';
$cars_i_want[]= 'Skoda';

var_show($cars_i_want);
echo 'For myself I would buy a '.$cars_i_want[1].'<br>';
echo 'For my spose I would buy a '.$cars_i_want[3].'<br>';

$cars_i_want[4]='Smart';

var_show($cars_i_want);

echo 'For my kids I would buy a '.$cars_i_want[4].'<br>';
echo '<ul>';
foreach($cars_i_want as $car_name)
{
    echo '<li>'.$car_name.'</li>';
}
echo '</ul>';


?>
