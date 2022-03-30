<?php
// class="frend"> My frend Raccoon Rocket
// cat
// goose
// boar

$rep = '<form method="POST" action="form2.php" style="display:flex; flex-direction: column; align-items: flex-start;">
<span class="frend"> My frend Raccoon Rocket</span>
<button type="radio" name="cat">cat</button>
<button type="radio" name="goose">goose</button>
<button type="radio" name="boar">
<a href="form1.html">Главная страница</a>
</button>
</form>';


print str_replace("cat", "Sly cat", $rep  );


$my_class = "changed";
$html = '<div class="{class}">Fried Bean Curd</div>
<div class="{class}">Oil-Soaked Fish</div>';

print str_replace('Bean',$my_class,$html);

$user = 'Farkhad';
$domain = '@gmail.com';
$email_address = $user . $domain;
print "<Pre>";
print 'your email address:';
print "\n";
print $email_address;
print "\n{$user}ka privet :)"; // фигурные скобки для правильной интерпритации
print "</pre>";

// Упражнеия

$hamburger = 4.95;
$cocktail = 1.95;
$coca_colla = 0.85;
$tax = 0.075;
$tips = 0.16;
print "<pre>";
//
print "Стоисомть заказа:    \t" . $pay_order = (($hamburger * 2) + $cocktail + $coca_colla) . "$ \n";
print "Налог на  стоимость: \t" . $pay_tax = $pay_order * $tax . "$ \n";
print "Чаевые               \t" . $pay_tips = $pay_order * $tips . "$ \n";
print "Сумма к оплате:      \t" . $pay_order + $pay_tax + $pay_tips . "$ \n";
// упражнение 3
print "Гамбургер:          \t" . $hamburger . "* 2 =" . $hamburger * 2 . "$ \n";
print "Коктель:            \t " . $cocktail  . "* 1 =" . $cocktail . "$ \n";
print "Кока-колла:         \t " . $coca_colla  . "* 1 =" . $coca_colla . "$ \n";
print "Кока-колла:         \t " . $coca_colla  . "* 1 =" . $coca_colla . "$ \n";
print "</pre>";

$first_name = "Farkhad";
$last_name = "Khamidullin";

echo $first_name." ".$last_name . " Длинна символьной строки без пробелов: " . strlen($first_name) + strlen($last_name) . "<br>";

// print "<pre>";
// $n=1; $p = 2;
// print "$n, $p\n";
// $n++; $p *= 2;
// print "$n, $p\n";
// $n++; $p *= 2;
// print "$n, $p\n";
// $n++; $p *= 2;
// print "$n, $p\n";
// print "</pre>";
printf("%d %-9s at \$%.2f each: \$5.2f\n", 2, 'Hamburger', $hamburger, 2* $hamburger);
print "<br>";

// цикл не ограничиваеться
// for ($x = 1, $y = 2; $x < 5, $y <  32; ++$x)
  // echo $x . "<br>" ;
  //  echo $y**$x . "<br>";
  // for ($count = 1, $count2 = 2; $count <= 5, $count2 <= 32; ++$count, ++$count2)
  // {
  //     echo   $count2 = $count **$count2;
  //     echo "<br>";
  // }
  $x = 1;
  $x<=5;
  $y = 2;
    while($y<=32){
      echo $y = $x **$y ."<br>";
      $x++;
    }

    $i = 1;
    //языковая конструкция array так же сокращенно обозначаеться []
    $menu = [ 1 => 'Главная',
              2 => 'Новости',
              3 => 'фото',
              4 => 'видео',
              5 => 'патио',
              6 => 'контакты',
              7 => 'выход'];
    $menu_i = count($menu);//количество элементов массива первого уровня. -1 для начала подсчета с 0
    print '<select name="people">';
    while ($i <= $menu_i) {
      print "<option>$i: $menu[$i]</option>\n";
      $i++;
    }
    print '</select>'."<br>";

    // с использованием цикла для массива forech...as
    $i_val = 1;
    print '<select name="people">';
    foreach($menu as $key => $menu_val){
      print "<option>$i_val: $menu_val</option>\n";
      $i_val++;
    }
    print '</select><br>';

    // с спользованием цикла for
    $menu_i = count($menu);
    print '<select name="people">';
    for($i = 1; $i <= $menu_i; $i++ ){
      print "<option>$i: $menu[$i]</option>\n";
    }
    print '</select>'."<br>";

    print '<select name="doughnuts">';
    for ($min = 1, $max = 10; $min < 50; $min += 10, $max += 10){
      print "<option>$min - $max</option>\n";
    }
    print '</select>';
    
    print "<pre>";
    $f = -50;
    while ($f <= 50){
      $c = ($f - 32) * (5/9);
      printf("%d degrees F = %d degrees C\n", $f, $c);
      $f +=5;
    }
    print "</pre>";
    
?>