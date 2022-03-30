<?php
// phpinfo();
// Массивы

ini_set('display_errors',1);
error_reporting(E_ALL ^E_NOTICE);
//для поиска ошибок

$paper[] = "Copier";
$paper[] = "Inkjet";
$paper[] = "Laser";
$paper[] = "Photo";

print_r($paper); //выводит на доступный язык
// так же можно конкретно указать места $paper[0] = "Copier"
//ниже функция для распечатки типов бумаги для климнта(без print_r)
for ($a=0; $a<4; ++$a)
echo "<br>$a: $paper[$a]";
echo "<br>----------------------<br>";
//ассоциативный массив

$paper['copier'] = "Copier & Multipurpose<br>";
$paper['Inkjet'] = "Inkjet Printer<br>";
$paper['Laser'] = "Laser Printer<br>";
$paper['Photo'] = "Photographic Paper<br>";

echo $paper['Laser'];

//присваивание с испольованием ключевого слова array

$p1 = array("copier", "Inkjet", "Laser", "Photo");
echo "Элемент массива p1: $p1[2] <br>";

$p2 = array('copier' => "Copier & Multipurpose<br>",
            'Inkjet' => "Inkjet Printer<br>",
            'Laser' => "Laser Printer<br>",
            'Photo' => "Photographic Paper<br>");
echo "Элемент массива p2: $p2[Inkjet] <br>";//если разделить '.' то нужно индекс объекта заключить в кавычки
echo "-------------------------<br>";
// цикл foreach...as

$paper = array ("Copier", "Inkjet", "Laser", "Photo");
$j=0;
// переменной $item по очереди присваиваються все значения хранащиеся в массиве 
foreach ($paper as $item){
  echo "$j: $item <br>";
  ++$j;
}

$paper = array('copier' => "Copier & Multipurpose<br>",
              'Inkjet' => "Inkjet Printer<br>",
              'Laser' => "Laser Printer<br>",
              'Photo' => "Photographic Paper123<br>");
//для вывода каждой паре в цикл foreach вводится пара ключь=>значение, пока значение есть, цикл TRUE

foreach ($paper as $item => $meaning){
  echo "$item: $meaning";
}
echo "<br>-------------------<br>";

// функция each()была удалена начиная с версии php 7.2.0
// while(list($item1, $meaning1) = each($paper)){
//   echo "$item: $meaning<br>";
// }

// Многомерные масивы

$products = array(
  'paper' => array(
    'copier' => "Copier & Multipurpose<",
    'Inkjet' => "Inkjet Printer",
    'Laser' => "Laser Printer",
    'Photo' => "Photographic Paper"
  ),
  'pens' => array (
    'ball' => "Ball Point",
    'hilite' => "Highlighters",
    'marker' => "Markers"
  ),
  'misc' => array (
    'tape' => "sticky Tape",
    'glue' => "Adhesives",
    'clips' => "Paperclips"
  )
  );
  echo "<pre>";
  // shuffle ($products[$item]);
  foreach ($products as $section => $item) // назначает внешнюю группу массива
  foreach ($item as $key => $value)        // назначает внутреннюю группу масива
  echo "$section: \t$key \t($value)<br>"; //отображает все ключи и значеиня
  echo $products['misc']['glue']; //отдельный ключь массив
  //--------ниже вывод отдельного массива
  // foreach ($products['paper'] as $section =>$item)
  // echo "$section: $item<br>";
//---------
//   foreach ($products as $row){
//   foreach ($row as $piece)
//     echo "\n$piece ";
  echo "<br>";
// }

  echo "</pre>";
  // print_r ($products);
//как выделить конкретную группу масивов?????????? 
echo "<br>-------------------------<br>";

$chessboard = array(
  array('r','n','b','q','k','b','n','r'),
  array('p','p','p','p','p','p','p','p'),
  array(' ',' ',' ',' ',' ',' ',' ',' '),
  array(' ',' ',' ',' ',' ',' ',' ',' '),
  array(' ',' ',' ',' ',' ',' ',' ',' '),
  array(' ',' ',' ',' ',' ',' ',' ',' '),
  array('P','P','P','P','P','P','P','P'),
  array('R','N','B','Q','K','B','N','R')
);
foreach ($chessboard as $row){
  foreach ($row as $piece)
    echo "$piece ";
  echo "<br>";
}
$fred = 1;
// нелбзя имет одинаковую по названию строковую переменную и переменную массива
//для проверки имени используетс функция is_array
echo (is_array($fred)) ? '$fred Это массив' : '$fred Это не массив'."<br>";
echo (is_array($chessboard)) ? '$chessboard Это массив' : '$chessboard Это не массив'."<br>";
echo "<br>";
// подсчет подсчет всех элементов в массиве:
echo count($products) . "<br>"; // подсчет верхнего уровня
echo count($products, 1) . "<br>"; // 1 - подсчет всех уровней, 0 - подсчет верхнего уровня.



?>