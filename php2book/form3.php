<?php
    echo "<a href='form1.html'>Главная страница</a>"; 
$meal = array('breakfast' => 'Walnut Bun',
              'lunch' => 'Cashew Nuts and White Mushroome',
              'snack' => 'Dried Mulberries',
              'dinner' => 'Eggplant with Chili Sauce');
// print "<table>\n";
// foreach ($meal as $key => $value) {
//   print "<tr><td>$key</td><td>$value</td></tr>\n";
// }
// print "</table>";
// ------------------ чередование классов css для html ----------------
$row_styles = array('even', 'odd');
$style_index = 0;
// используется заданный массив $meal
print "<table>\n";
foreach ($meal as $key =>$value){
    print '<tr class = "' . $row_styles[$style_index] . '">';
    print "<td>$key</td><td>$value</td></tr>\n";

    $style_index = 1 - $style_index;
    // альтернативный вариант
    // if ($style_index == 0){
    //   $style_index = 1;
    // }
    // elseif($style_index == 1){
    //   $style_index = 0;
    // }
}
print "</table>\n";
//-----------------преобразование массива----------
$meals = array('Walnut Bun' => 1,
              'Cashew Nuts and White Mushroome' => 4.95,
              'Dried Mulberries' => 3.00,
              'Eggplant with Chili Sauce' => 6.50);
foreach ($meals as $dish => $price){
    //выражение $price = $price * 2   НЕ ПРОЙДЕТ
    $meals[$dish] = $meals[$dish] * 2;
}
foreach ($meals as $dish => $price){
  printf( "The new price of %s is \$%.2F.<br>", $dish,$price);
}
//-------------пребор массива с помощью конструцкции for
$dinner = array('Sweet corn and Asparagus',
                'Lemon Chicken',
                'Braised Bamboo Fungus');
print '<table>';
for($i = 0, $num_dishes = count($dinner); $i < $num_dishes; $i++ ){
  print '<tr class = "'. $row_styles[$i % 2] . '">';
   print "<td>Num dishes $i</td><td> the dishes $dinner[$i]</td></tr>";
}
print '</table>';

$letters[0] = 'A';
$letters[1] = 'B';
$letters[3] = 'D';
$letters[2] = 'C';
foreach ($letters as $letter){
  print $letter;
}
print "<br>";
for ($i = 0, $num_letters = count($letters); $i<$num_letters; $i++){
  print $letters[$i];
}
print "<br>";

//-------------проверка наилчия элемента по ключу и значению___
$meals = array('Walnut Bun' => 1,
                'Cashew Nuts and White Mushroome' => 4.95,
                'Dried Mulberries' => 3.00,
                'Eggplant with Chili Sauce' => 6.50,
                'Shrimp Puffs' => 0); // Shrimp Puffs are free
$book = array("The Eater`s Guide to Chinese Characters",
              'How to Cook and Eat in Chinese');

//следующая проверка дает истинное значение
if (array_key_exists('Shrimp Puffs', $meals)){
    print 'Yes, we have Shrimp Puffs';
}print "<br>";
//след проверка дает ложные значения 
if(array_key_exists('Steak Sandwich', $meals)){
  print "We have a Steak Sandwich<br>";
}
else{
    print "We have not a Steak Sandwich<br>";
}
if(array_key_exists(1, $book)){
  print 'Element 1 is How to cook and Eat in Chinee<br>';
}
//---------проверка значения--------
//массив задавался ранее!!!  $meals и $book
if (in_array(3, $meals)){
  print 'There is a $3 item.print <br>';
}
//-----поиск по конкретному значению-------
$dish = array_search(6.50, $meals);
if($dish){
  print "$dish costs \$6.50<br>";
}

$people = array(
  2 => array(
    'name' => 'John',
    'fav_color' => 'green'
  ),
  5=> array(
    'name' => 'Samuel',
    'fav_color' => 'blue'
  )
);

$found_key = array_search('green', array_column($people, 'fav_color'));
print $found_key;
print "<br>";

//----------------------- сложные работы с массивами-------
$records = array(
  array(
      'id' => 2135,
      'first_name' => 'John',
      'last_name' => 'Doe',
  ),
  array(
      'id' => 3245,
      'first_name' => 'Sally',
      'last_name' => 'Smith',
  ),
  array(
      'id' => 5342,
      'first_name' => 'Jane',
      'last_name' => 'Jones',
  ),
  array(
      'id' => 5623,
      'first_name' => 'Peter',
      'last_name' => 'Doe',
  )
);
print_r (array_column($records,'id'));
print "<br>";
print_r (array_keys($records[1]));
print "<br>";
//-------изменение азначения массива
$dishes['Beef Chow Foon'] = 12;
$dishes['Beef Chow Foon'] ++;
$dishes['Roast Duck'] = 3;

$dishes['totoal'] = $dishes['Beef Chow Foon'] + $dishes['Roast Duck'];

if ($dishes['totoal'] > 15){
  print 'you are lot: ';
}
print 'you ate ' . $dishes['Beef Chow Foon'] . 'dishes Beef Chow Foon<br>';

//объединение элементов в симольную строку
print '<tr><td>' . implode("</td><td>\t", $meals) . '</td></tr>';
//удаление элемента из массива unset
unset($meals['Walnut Bun']);
unset($meals['Dried Mulberriess']);
foreach($meals as $key => $val){
 print "ключь $key: значение: $val<br>";
}
//преобразование строк в массив .
$pizza = "Сколько кусков пиццы вы желаете: / один кусок / два куска / три куска / 
          четыри куска / пять кусков / шесть кусков / несколько";
$piece = explode('/', $pizza);
print "$piece[0] $piece[1] или $piece[7] ?"

?>
