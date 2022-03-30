<?php // Test 2
$team = array('Chak', 'Bill', 'Bob', 'Garry');
echo $team[0];
echo "<br>";
$oxo = array(array('korgi','jen','Zak'),
             array('Bob','rine','Gas'),
             array('ben','Lui','fill'));

   
        echo $oxo [2] [1]. ' '. $oxo [0] [0];
           

echo '<br>';
$hi = "'дружище'";
$hi .= "-привет";
echo $hi;
echo '<br>';


for ($age=0; $age<10; $age++){
    if($age == 4 or $age == 5){
        echo 'твой возраст '.$age.' <green>подходящий</green><br>'; 
    }
    
    else {
        echo 'по возрасту ' . date("l F jS Y") . ' - ' .$age.' <red>отказ</red><br>';
    }

}
// многострочная последовательность через оператор <<<
//после <<<_END должно быть чисто!!!
//заки табуляции не нужны
$heading =  

<<<_END
Дата 
Привет 
мир         
                ты прекрасен

<ul>Новая строка 
        сегодня прохладно 
не как вчера
    <li>Раздел1</li>
    <li>Раздел2</li>
    <li>Раздел3</li>
</ul>
\nИмя  \rПлатеж <br>
_END;
echo "<pre>"; // для приминения знаков табуляции в браузе применяеться тег <pre></pre>.
 echo $heading;
?>

<?php 
$autors = "Scott Adams";

$out = <<<_END
<hr>Normal people believe that if \tit ain`t broke, don`t fix it.\n
Engineers believe that if it ain`t broke, it doesn`t have enough<br>
features yet.<br><br>

- $autors.<hr>
_END;
echo $out;
echo "</pre>";

$rest = substr("absdef", 2, 3);
echo $rest."<br>"; 

$b ? print"TRUE" : print"FALSE<br>";

function longdate($timestamp){
    return date("l F jS Y", $timestamp);
}
echo "<hr>" . longdate(time()) . "<br>";
echo longdate(time() - 17*24*60*60) .  '// Уменшенное время на 17 дней' . "<br>";

$temp = "Дата: "; //переменная задана вне функции, не видна для нее
echo longdate2($temp, time()); //передаем значение функции как дополнительный аргумент
function longdate2($temp, $timestamp)
{
    // либо просто добавить переменную в глобальные переменные через global $temp; (крайний случай)
    return $temp . date("l F jS Y", $timestamp);
}

function test()
{
    static $count = 1; //ключевое слово static присваивает локальной переменной значение.
    // переменная не обнуляется при каждом ее вызове
    echo $count;
   
}
echo test();
?>	