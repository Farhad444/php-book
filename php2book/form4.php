<?php
    echo "<a href='form1.html'>Главная страница</a><br>"; 
//работа с массивами
//---------сортировка масиива, функция sort - сортирует только числовые массивы,
//строковые массивы сбрасывает и сортиует по измененным числовым ключам
$dinner = ['Swet Corn and Asparagus',
          'Lemon Chiken',
          'Braised Bamboo Fungus'];
$meal = ['breakfast' => 'Walnut Bun',
        'lunch' => 'Cashew Nuts and White Mushroom',
        'snake' => 'Dried Mulberries',
        'dinner' => 'Egplant with Chili Sauce'];

print "<pre>";
print "Before Sorting:\n";
foreach ($dinner as $key => $value){
  print "\$dinner: $key $value.\n";
}
foreach ($meal as $key => $value){
  print "\$meal: $key $value.\n";
}

//сортировака sort !
print "сортировака занчений sort ----------------------\n";
sort($dinner);
sort($meal);

Print "After sorting:\n";
foreach($dinner as $key => $value){
  print "\$dinner: $key $value\n";
}
foreach ($meal as $key =>$value){
  print "\$meal: $key $value\n";
}


//------ asort сортировка значений с сохранением ключей-----
$meal = ['breakfast' => 'Walnut Bun',
        'lunch' => 'Cashew Nuts and White Mushroom',
        'snake' => 'Dried Mulberries',
        'dinner' => 'Egplant with Chili Sauce'];

print "сортировака занчений asort по значению с сохранением клобчей----------------------\n";
asort ($meal);
foreach ($meal as $key => $value){
  print "\$meal: $key $value\n";
}
// ------ksort сортировка массива по ключам-------
$meal = ['breakfast' => 'Walnut Bun',
        'lunch' => 'Cashew Nuts and White Mushroom',
        'snake' => 'Dried Mulberries',
        'dinner' => 'Egplant with Chili Sauce'];

print "сортировака занчений ksort по ключам ----------------------\n";
ksort($meal);
foreach($meal as $key => $value){
  print "\$meal: $key $value\n";
}

// аналогичные функциям но с сортировкой по убыванию rsort() arsort() krsort()
print "</pre>";

?>