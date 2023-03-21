<?php
/*
Escreva um script que imprima qual o maior número.
Use IF .. ELSE
*/
$a = 10;
$b = 1;
$c = 40;
if($a>$b and $a>$c) {
    print 'o maior valor é';
    echo $a ;
  }
  elseif($b>$a and $b>$c) {
    print 'o maior valor é';
    echo $b ;
  }
  else {
    print 'o maior valor é';
    echo ' ';
    echo $c ;
  }


?>