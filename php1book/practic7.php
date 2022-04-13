<?php
//Практика по седмой главе 1 книга
echo "<a href='../php2book/form1.html'>Главная страница</a><br>"; 

// перевод в шестнадцатеричное значение
$r = 64;
$g = 127;
$b = 245;
printf ("<div style='color:#%X%X%X'>Обычный цвет</div>  
        <div style='color:#%X%X%X'>затемненный цвет</div>", 
        $r, $g, $b,       //обычный цвет
        $r-30, $g-30, $b-30);  //затемненный цвет
$hexstring = sprintf("%X%X%X", 64, 127, 245);//не выводит на экран, присваивает значение
print "<div style='color:#{$hexstring}'>Обычный цвет</div>";

$out = sprintf("Результат: $%.2f", 123.42 / 12);
echo $out;
?>