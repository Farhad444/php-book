<?php
    echo "<a href='../php2book/form1.html'>Главная страница</a><br>"; 
    ini_set('display_errors',1);
    error_reporting(E_ALL ^E_NOTICE);
// <img url="" alt="" height="" width=""/>

function html_img($img_url, 
                  $img_alt = null, 
                  $img_height = null, 
                  $img_width = null){
    $html = '<img scr="' . $img_url . '"';
  if (isset($img_alt)){
    $html .= ' alt="' . $img_alt . '"';
  }
  if(isset($img_height)){
    $html .= ' height="' . $img_height . '"';
  }
  if(isset($img_width)){
    $html .= ' width="' . $img_width . '"';
  }
    
  $html .= '/>';
  return $html;
}

$img_url = strip_tags(trim($_POST['file_img'])); 
$img_alt = 'alt url adress'; 
$img_height = strip_tags(trim($_POST['wight_img']));
$img_width = strip_tags(trim($_POST['heigth_img']));


$test = print html_img($img_url, $img_alt, $img_height, $img_width);
print $test . '<br>';

//_____________перевод цвета в из десятеричного в шестнацатеричный значение 
    // function rgb_to_color($rgb, $symbols=' '){
    //     $color = '';
    //     $arr = explode($symbols, $rgb);
    //     $count = count($arr);
    //     for($i=0; $i<$count; $i++){
    //         $color .= dechex($arr[$i]);
    //     }
    //     return '#'.$color;
    // }
    //    echo rgb_to_color('186 186 18');  // #baba12
    // echo rgb_to_color('186-186-18', '-');  // #baba12

// print '#' . dechex(255) . dechex(00) . dechex(255);


function hex_col($red, $green, $blue){
  $rgb_col =[dechex($red),
            dechex($green),
            dechex($blue)];
    // print_r($rgb_col);
  foreach($rgb_col as $key => $val){
     if (strlen($val) == 1){
       $rgb_col[$key] = "0$val";
     }
  }
  return '#' . implode('', $rgb_col);
}

$red = 255;
$green = 0;
$blue = 255;

$rgb_collor = hex_col($red, $green, $blue);
print $rgb_collor . "<br>";
//преобразование в 16ти ричную систему через форматирование строки
printf("#%02x%02x%02x", $red, $green, $blue);


// $hex =[dechex($red),
//       dechex($green),
//       dechex($blue)];
// print_r($hex);
// print "<br>";

// foreach($hex as $key => $val){
//      print "<br>";

//      print strlen($hex[$key]);
// }

?>