<?php

$A = 100;
$B = 100;
$D = 100;
$C = 100;
$E = 100;
$F = 100;
$G = 100;
$H = 100;
$I = 100;
$J = 100;
$K = 100;
$L = 100;
$M = 100;

$backet = ($D and $E);

                //       ($A, $B, $C, $D),
                // array($E, $F, $G, $H),
                // array($I, $J, $K, $L, $M));


// function calcPercent($A, $B, $C, $D, $E, $F, $G, $H, $I, $J, $K, $L, $M){
  if($backet ){
    $discountCombo1 = (90 / 100); // sale 10%
    
  }
  elseif($backet == $D and $E){
    $backet = $backet * (6 / 100);
  }
  elseif($E and $F and $G){
    $discountCombo3 = $backet * (3 / 100); 
  }
  elseif($K and $L and $M){
    $discountCombo4 = $backet * (5 / 100);
  }
  echo $back;
// }
  // elseif(){
  //   $discoundQuantity1 = $backet * (5 / 100);
  // }
  // elseif(){
  //   $discoundQuantity2 = $backet * (10 / 100);
  // }
  // else(){
  //   $discoundQuantity3 = $backet * (20 / 100);
  // }

  // echo $backet * $discountCombo1;
?>