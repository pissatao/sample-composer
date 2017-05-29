<?php

// //for ($i = 0; <10$)
// while ($i < 10) {
//     echo $i, PHP_EOL;
//     $i++;
// }

// //do while
// $i = 0;
// do {
//     echo $i,PHP_EOL;
//     $i++;
// }while ($i<10);



$person = ['Tao,Ta,Ao'];
foreach ($person as $people) {
    echo "Hello,{$person}",PHP_EOL;
}
for ($i = 0; $i < count($person); $i++) {
    echo "Hello, {$person[$i]}",PHP_EOL;
}