<?php


function increase($array)
{
   sort($array);
   $length = count($array);
   for ($i=0;$i<$length;$i++)
   {
       echo $array[$i].'<br>';
   }

}

$arr = array( 2, 5, 1, 7, 4, 3, 8, 6 );

increase($arr);
