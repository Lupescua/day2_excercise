<?php

$html_code = "<h1>My first PHP file</h1>"; // create variable

echo $html_code; // exists here

unset($html_code);// destroy the variable $html_code

echo $html_code; //  $html_code doesn't exist anymore

$first_name= 'Bruce';
$surname= 'Wayne';
$year_of_birth=1982;
$height=186;

define('SERVER_SOFTWARE', 'Apache');
define('MY_OS', 'WIN7');
?>

<p>
    First name: <?php echo $first_name?>
    </br>
    Surname: <?php echo $surname?>
    </br>
    </br>
    Year of birth: <?php echo $year_of_birth?>
    </br>
    Height: <?php echo $height?>
    </br>

</p>

<p>
My server software is <?php echo SERVER_SOFTWARE; ?>
</p>

<p>
My OS is <?php echo MY_OS; ?>
</p>