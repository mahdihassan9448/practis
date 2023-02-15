<?php
// $v = 67;
// $v1 = 78;
// $v2 = 87;
// $rasult = $v + $v1 + $v2;
// $ev= ($v + $v1 + $v2)/3;
// echo "Sum of three numbers:". $rasult;
// echo"<br>";
// echo "evg of three numbers :".$ev;

function sum ( $n , $n1, $n2 )
{
    $sum = $n+$n1+$n2;
    $ev = ($n+$n1+$n2)/3;
     echo $sum;
     echo $ev;

}
sum (20,30,30);