<?php

$array = [1, 2, 3, 4];
foreach ($array as &$value) {
 $value *= 2;
}
foreach ($array as $value) {
 echo $value . ' ';
}
// not perfect idea about  &$value but i think ans is that 
// 2 4 6 8
?>

