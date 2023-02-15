<?php
// $start = 0;
// $limit = 100;
// $step = 2;

// for($counter = $start; $counter <= $limit; $counter += $step)
// {
//     echo $counter."<br>";
// }


$start = 0;
$limit = 100;
$step = 1;

    for($counter = $start; $counter <= $limit; $counter += $step)
    {
        if($counter % 2 == 0){
            echo $counter."<br>";
        }
    }
 echo"<br>";