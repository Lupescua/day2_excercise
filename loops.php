<?php



$days_to_christmas = 376-7-37;
while ($days_to_christmas >0)
{
    $days_to_christmas--;
    echo 'There are still '.$days_to_christmas.' days to Christmas. <br>';
}

$time_served = 0;
while($time_served<10)
{
    $time_served++;
    echo 'The prisoner has served'.$time_served.'years.<br> ';
}

echo '<hr>';

for($i=10;$i>0;$i--){

    echo 'The prisoner has '.$i.' more years to serve <br>';
    if ($i>5){
        continue;
       }
       echo 'Going to a parole hearing...
       <br>';
       if($i==2){
           echo 'Paroled';
           break;
       }
}