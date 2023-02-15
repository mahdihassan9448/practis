<?php
// $n1=76;
// $n2=75;
// $n3=87;
// if($n1 < $n2 && $n1 < $n3)
// {
//     echo "lowest number:".$n1;
// }
// else if ($n2<$n3 && $n2<$n1)
// {
//     echo"lowest number:".$n2;
// }
// else
// {
//     echo"lowest number:".$n3;
// }



$n1=364;
$n2=7464;
$n3=6474;

echo $n1 > $n2 ? ($n1 > $n3 ?  $n1:$n3) : ($n2 > $n3 ? $n2:$n3);

echo "<br>";
echo "<br>";

echo $n1 > $n2 ? ($n1 < $n3 ?  $n1:$n3) : ($n2 < $n3 ? $n2:$n3);