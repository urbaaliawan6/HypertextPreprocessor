<?php
$n=10;
$r=3;
//n!/n(n-r)!
//10!  10x9x8x7x6x5x4x3x2x1
$c=1;
for ($i=$n; $i>0; $i--)
{
    $c=$c*$i;
}
echo"n! is $c";

$n=10;
$r=7;
//n!/n(n-r)!
//10!  10x9x8x7x6x5x4x3x2x1
$c=1;
for ($i=$n; $i <0 ; $i++) 
{
    $c=$c*$i;
}
echo"n! is $c";
?>