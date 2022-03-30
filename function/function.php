<?php
    echo "<a href='../php2book/form1.html'>Главная страница</a><br>"; 
//проверка на ошибки
    ini_set('display_errors',1);
    error_reporting(E_ALL ^E_NOTICE);
//---
function page_header($color = '78866b', $welcom = 'Error'){
  //можно указать аргумент по умолчанию
  // если при вызове вункции аргумент не указан
  print '<html><head><title>'. $welcom .'</title></head>';
  print '<body bgcolor="#' . $color .'">';
}
$welcom1='Welcome to my site';
$color1='f5f5dc';
page_header($color1, $welcom1);//если аргументы отсутствуют, используется по умолчанию
print "Welcome ";
page_footer();

function page_footer(){
  print "<hr>Thanks for visiting.";
  print "<br></body></html>";
}
// ---обьявляем тип int для целочисленнго значения
include 'data_boom.php';
$counter =  "6";
countdown($counter);
print "Now, counter is $counter <br>";
//----------------------возвращение значений из функций----------
function restaurant_check($meal, $tax, $tip): array {// проверка типа значения возвращаемой функции
  $tax_amount = $meal *($tax / 100);
  $tip_amount = $meal *($tip / 100);
  $total_amount = $meal + $tax_amount + $tip_amount;
  return [$tax_amount, 
          $tip_amount, 
          $total_amount]; // return argument (возврат аргумента)
}
//date frome the order (данные из заказа)
$price = 30.22;
$tax = 8.25;
$tip = 15;
//arguments for the finction (аргументы для функции)
$total = restaurant_check($price, $tax, $tip);
//проводим форматирование текста 
printf ("I only have $20 in cash. My check sum $%.2f, 
of with tax $%.2f and tips $%.2f so...",$total[2], $total[0], $total[1] );
if ($total[2]>20){
  print "I must pay with my credit card.";
} else {
  print "I can pay with cash.";
}
//применение нескольких операторов return
function payment_method($cash_on_hand, $amount){
  if($amount > $cash_on_hand){
    return 'credit card';
  }else {
    return 'cash';
  }
}
print "<br>";
$method = payment_method(20, $total);
Print "I will pay with $method";
print "<br>";
//------------так же можно напрямую получить  возвращаемое 
//-------------значение обратившись к функции на прямую
if (restaurant_check($price, $tax, $tip) < 20){
  print 'Less than $20, i can pay cash';// возможно использование 'false' и 'true'
}else{
  print 'Too expensive, I need my credit card';
}
print "<br>";
//-------------сочетание вызова функции с оператором присваивания----------
function complete_bill($meal, $tax, $tip, $cash_and_hand){
  $tax_amount = $meal *($tax / 100);
  $tip_amount = $meal *($tip / 100);
  $total_amount = $meal + $tax_amount + $tip_amount;
  if($total_amount > $cash_and_hand){
    return false;
  }else{
    return $total_amount;
  }
}

require 'function_data.php';
print "<br>";
//-----------обращение к глобальной переменной два метода:
// ----------$GLOBALS['fish'] можно использовать сразу, разовое использование
// ----------global $fish открывает доступ к глобалной
$fish = 35;
function dish(){
  $fish = 15;
  print $fish . "<br>"; //локальная переменная
  print $GLOBALS['fish']. "<br>"; //глобальная переменная
  print $fish. "<br>"; //снова локальная переменная
  global $fish; //переменная становится всегда глобальной
  print $fish . "<br>"; // глобальная переменная
  print $GLOBALS['fish'] .= 50 . "<br>"; //изменение глобальной перепменной в глобальном пространстве
}
dish();
print $fish . "<br>"; //глобальная переменная изменена через функцию


    ?>