<?php

$x=5;

$y = 10;

function myTest()
{
   global $x,$y,$z;
          $z=$x+$y;
}

myTest();

echo "<p>Sum of Variable $x and $y  is = $z</p>"

?>