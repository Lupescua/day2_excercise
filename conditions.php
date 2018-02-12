<?php
$weather = 'sunny';
if ($weather == 'rain'){
    echo "Let's stay indoors.";
}elseif ($weather = 'sunny'){
    echo "Let's put on some sunblock";
}elseif($weather = 'windy'){
    echo "Let's put on a coat.";
}else{
    echo "Let's go outside";
}

echo '<hr>';

$language = 'php';

switch($language)
{
    case 'php':
    case 'ruby': // by setting one after the other they are taken as a or and will do the function afterwards
        echo 'serverside'; //code that will run when it is php
        break;
    case 'JavaScript':
        echo 'clientside'; //code that will run when it is JS
        break;
    default:
        echo 'i don\'t know'; //code that will run when it is JS
        break;

}

echo '<hr>';

$OS = 'Windows';

switch($OS)
{
    case 'Windows':
    echo 'Edge';
        break;
    case 'Linux':
        echo 'Firefox';
        break;
    case 'OS X':
        echo 'Safari';
        break;
    default:
        echo 'Just use Chrome';
        break;

}
echo '<hr>';

$age =28;
$gender = 'male';
$employed = 'true';
if ($age<25)
{
    //...
}

if ($employed)
{
    //...
}

if ($age >34 && !$employed)
{
    //...
}

if ($age<=18)
{
    //...
}

if ($age<12 && $gender=='female')
{
    //...
}

if ($age >=18 && !$employed)
{
    //...
}

if ($age >=60 && $employed && $gender=='female')
{
    //...
}

if (($gender=='male' && $age >20) || (!$employed && $gender=='female' && $age>25))
{
    //...
}
