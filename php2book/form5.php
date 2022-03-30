<?php
function page_header(){
  print '<html><head><title>Welcome to my site</title></header>';
  print '<body bgcolor="#f5f5dc">';
}
page_header();
print "Welcome $user";
print "<br></body></html>";

    echo "<a href='form1.html'>Главная страница</a><br>"; 
//работа с моногомерными массивами
//Ображение к элементам массива
$meal = array('breakfast' => ['Walnut Bun', 'Coffe'],
              'lunch' => ['Cashew Nuts', 'White Mushrooms'],
              'snack' => ['Dried Mulberries', 'Salted Sesame Crad']);
$lunches = [['Chicken', 'Eggplante', 'Rice'],
            ['Beef', 'Scallions', 'Noodle'],
            ['Eggplant', 'Tofu'] ];
$flavors = array('Japanes' => array('hot' => 'wasabi',
                                    'salty' => 'soy sauce'),
                  'Chinese' => array('hot' => 'mustard',
                                      'pepper-salty' => 'prickly ash'));
print $meal['lunch'][1]. "<br>";
print $meal['snack'][0]. "<br>";
print $lunches[0][0]. "<br>";
print $lunches[2][1]. "<br>";
print $flavors['Japanes']['salty']. "<br>";
print $flavors['Chinese']['hot']. "<br>";

// добавление и замена значений массива
$meal['lunch'][] = 'Chips pepper';
$meal['lunch'][1] = 'Black Mushrooms';
print "<pre>";
print_r($meal);
print "</pre>";
//перебор многомерного массива через функцию for

$special = array(array('Chestnut Bun',
                      'Walnut Bun',
                      'peanut Bun'),
                array('Chestun Salad',
                      'Wanut Salad',
                      'Peanut Salad'));
//$count() считает количество элементов в массиве

$City ['Нью-Йорк']['Нью-Йорк'] = 8175133; 
$City ['Калифорния']['Лос-Аджелес'] = 3792621; 
$City ['Иллинойс']['Чикаго'] = 2695598; 
$City ['Техас']['Хъюстон'] = 2100263; 
$City ['Пенсильвания']['Филадельфия'] = 1526006; 
$City ['Аризона']['Феникс'] = 1445632; 
$City ['Техас']['Сан-Антонио'] = 1327407; 
$City ['Калифорния']['Сан-Диего'] = 1307402; 
$City ['Техас']['Даллас'] = 1197816; 
$City ['Калифорния']['Сан-Хосе'] = 945942; 
$total = 0;

print "<pre>";
print_r($City);
foreach ($City as $state => $value){
  foreach ($value as $city => $popul){
    print "В штате $state в городе $city население $popul\n";
    // array_multisort($City);
    $total += $popul;  //$total = $total + $popul;
  }
}


print "Общее население по всем городам $total человек";
// Print_r($City);


print "</pre>";





?>