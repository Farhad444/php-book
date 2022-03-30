<?php
function countdown(int $top){
  while ($top > 0){
    print "$top..";
    // sleep(1);  //задержка вывода на 1 секунду 
    $top--;
  }
  print "boom!\n";
}


?>