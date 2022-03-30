<?php

//функция форматирования чисел
echo "формат чисел " . number_format(33929939939392);

  print 'имя сервера - ' . $_SERVER['SERVER_NAME']."<BR>";
  print 'IP-адрес сервера - '. $_SERVER['SERVER_ADDR'] . "<BR>";
  print 'порт сервера - '. $_SERVER['SERVER_PORT'] . "<BR>";
  PRINT 'web-сервер - '. $_SERVER['SERVER_SOFTWARE'] . "<BR>";
  print 'версия http-протокола - '. $_SERVER['SERVER_PROTOCOL'] . "<BR>";

$price = 5;
$tax = 0.075;
$zip = '6520';
$month = 2;
$day = 6;
$year = 2007;
$max = -40;
$min = 49;

// вычитание процента и отображеня дыух цир послк запятой
printf('The dish costs $%.2f<br>', $price * (1+$tax));
//d - аргумент пеатается как целое число. 05d - вывод 0 перед числом, отображаються 5 чисел
printf('Zip is %05d and the date is %02d/%02d/%d <br>', $zip, $month, $day, $year);
print ucwords(strtolower('прОба НА рУссКОм алФАВИте, EnGLish WoRDs'));




?>