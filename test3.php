<?php 
ini_set('display_errors',1);
error_reporting(E_ALL ^E_NOTICE);
//для поиска ошибок

echo date("l" ) . "<br>";

$date = new DateTime();
$intlFormatter = new IntlDateFormatter('ru_RU', IntlDateFormatter::SHORT, IntlDateFormatter::SHORT);
$intlFormatter->setPattern('MMMM');

echo $intlFormatter->format($date). "<br>";

echo strrev(" .dlrow olleH "); // реверсирование строки
echo str_repeat("Hip ", 3); //повторение строки
echo strtoupper(" hooray!<br>"); // преобразование в верхни регистр
echo ucfirst(strtolower(strrev("dLRow oLLeH")))."<br>"; //вычисление начинаеться с внутреннего элемента

// function имя_функции ([параметр[, ...]])
// Определение начинается со слов function
// Для функции наличеи скобок обязательно, иначе она расцениваеться как константа
// Внутри скобки задаються необязательные параметры

/*не корректно работает с многобайтными кодировками */
$lowered = mb_strtolower("ЛюбОе НуЖное КОличество Букв И Знаков ПуНктуАЦии <br>");
/* стандартно функция називаетсья strtoupper, из за кодировки изменена, 
может сработать не во всех браузерах*/
echo $lowered;

$usfixet = ucfirst("ЛюбОе НуЖное КОличество Букв И Знаков ПуНктуАЦии<br>");
echo $usfixet;

// +++++++++++++++++++++++++++++
echo fix_names("WILLIAM", "henry", "gatES") . "<br>";

function fix_names($n1, $n2, $n3){
    $n1 = ucfirst(strtolower($n1));
    $n2 = ucfirst(strtolower($n2));
    $n3 = ucfirst(strtolower($n3));

    return $n1 . " " . $n2 . " " . $n3;
}


$name = fix_name1("WILLIAM", "henry", "gatES");
echo $name[0] ." ". $name[1] ." ".$name[2] . "<br>";

function fix_name1($n1, $n2, $n3)
{
    $n1 = ucfirst(strtolower($n1));
    $n2 = ucfirst(strtolower($n2));
    $n3 = ucfirst(strtolower($n3));
    return array($n1, $n2, $n3);
}

// передача через ссылку &
$a1 = "COBALT";
$a2 = "ross";
$a3 = "giMMy";

echo $a1 . " " . $a2 . " " . $a3 . "<br>";
fix_name2($a1,$a2,$a3);
echo $a1 . " " . $a2 . " " . $a3 . "<br>";

function fix_name2(&$n1, &$n2, &$n3)
{
    $n1 = ucfirst(strtolower($n1));
    $n2 = ucfirst(strtolower($n2));
    $n3 = ucfirst(strtolower($n3));
}

//более короткий вариант ------------------------------
function fix_name3($n)
{
    return ucfirst(strtolower($n));
}

$a1 = "BILBO";
$a2 = "frodo";
$a3 = "gaRRY";
echo fix_name3($a1) . " " . fix_name3($a2) . " " . fix_name3($a3)."<br>"; 

//возвращение глобальных переменных

$a1 = "COBALT";
$a2 = "ross";
$a3 = "giMMy";

echo $a1 . " " . $a2 . " " . $a3 . "<br>";
fix_name4($a1,$a2,$a3);
echo $a1 . " " . $a2 . " " . $a3 . "<br>";

function fix_name4()
{
    global $a1, $a2, $a3; // задаются глобальные переменные
     $a1 = ucfirst(strtolower($a1));
     $a2 = ucfirst(strtolower($a2));
     $a3 = ucfirst(strtolower($a3));
}

// проверка существование функций

if (function_exists("array_combine"))
{
    echo "функция существует";
}
else 
{
    echo "функци не существует, нужно создать";
}
echo "<br>";
// Объекты PHP ( ООП, Классы) +++++++++++++++++++++++++++++++++

$object = new User1();
print_r($object);

$object->save_user(); // для вывода echo в классе
class User1{
    public $name, $password;

     function save_user() //  можно задать область видимости, иожно не задавать!!!
    {
        echo "<br>Сюда перемещают код, сохранающий данные пользователя";
    }
}

echo "<br> |";

$object = new User2();
print_r($object); echo "<br>";

$object->name = "Joy";
$object->password = "mypass";
print_r($object); echo "<br>";

$object->save_user();

class User2{
    public $name, $password;
    function save_user(){
        echo "Сюда перемещают код, сохранающий данные пользователя <br>";
    }
}
echo "<br> тест вывода<br>";
//+++++++++++++++++++++++++++++++++++=
$object1 = new User3();
$object1->name = "Alice";
$object2 = clone $object1; // инструкция clone копирует значение свойства исходного класса
$object2->name = "Amy";

echo "object1 name =" . $object1->name . "<br>";
echo "object2 name =" . $object2->name . "<br>";

class User3{
    public $name;
}

// данный код выводит пароль secret   ------------------
$object = new User;
$object->password = "secret <br>";

echo $object->get_password();
class User 
{
    public $name, $password;
    function get_password()
    {
        return $this->password;
    }
}

//нет необходимости обьявлении свойств внутри классов, ---------------------
//они определяються неявным образом при первом исползовании
$object5 = new User5;
$object5->name = "Alice1 <br>";

echo $object5->name;
class User5{}
//-----------------------------

//допустимые и не допустимые обьявления свойсв
// class Test
// {
//     public $name = "Paul Smith"; // допустимое
//     public $age = 42; // допустимое
//     public $time = time(); //недопустимое - вызывает функцию
//     public $score = $level * 2; //недопустимое - использует выражение
// }

// Обьявление константы
Translate::lookup();
class Translate{
    const ENGLISH = 0;
    const SPANISH = 1;
    const FRENCH = 2;
    const GERMAN = 3;
    // ...

    static function lookup(){
        echo self::SPANISH;
    }
}
echo "<br> ---------<br>";

//статистический метод -  вызывается классом, а не объектом. не имеет доступа к свойствам объекта
User6::pwd_string();

class User6{
    public static function pwd_string(){
        echo "Пожалуйяста, введите свой пароль";
    }
}

echo "<br>----------------<br>";

// Статические свойства. Правильный запрос доступа к свойсвтам
$temp = new Test();
class Test {
    static $static_property = "Это статическое свойство";

    function get_sp()
    {
        return self::$static_property;
    }
}

echo "Тест А: " . Test::$static_property  . "<br>"; //ссылаеться напрямую из класса
echo "Тест B: " .  $temp->get_sp() . "<br>"; //запрос через метод из класса, с помощью возврата
echo "Тест C: " .  $temp->$static_property . "<br>"; // статическое свойство не доступно объекту

//++++++++++++++++++++++
echo "<br>";

$object = new Subscrider;
$object->name = "Jeyms";
$object->password = "pword";
$object->phone = "96200003";
$object->email = "Jeyms@blog.com";
$object->save_user();
$object->display();


class User7{
    public $name, $password;
    function save_user(){
        echo "сюда помещаетсь код, сохранающий данный пользователя<br>";
    }
}
class Subscrider extends User7{ // арсширяем класс extends
    public $phone, $email;
    function display(){
        echo "Name: " . $this->name . "<br>";
        echo "Pass: " . $this->password . "<br>";
        echo "Phone: " . $this->phone . "<br>";
        echo "Email: " . $this->email . "<br>";
    }
}

// ключевое слово parent
$object = new Son;
$object -> test();
$object -> test2();

class Dad{
    function test(){
        echo "[Class Dad] я твой отец <br>";
    }
}
class Son extends Dad{
    function test(){
        echo "[Class Son] Я люк <br>";
    }
    function test2(){
        // self::test(); для вызова метода из текущего класса (тогда не вызывается через $object -> test();)
        parent::test();
    }
}
echo "+++++++++++++++++++++<br>";
//конструкторы подклассов
$object = new Tiger;
echo "У тигра есть...<br>";
echo "Мех: " . $object->fur . "<br>";
echo "Полосы: " . $object->stripes . "<br>";

class Wildcat{
    public $fur; //Удиких кошек есть мех
    function __construct(){
        $this->fur = "TRUE"; 
    }
}
class Tiger extends Wildcat{
    public $stripes; //У тигров есть полосы
    function __construct(){
        parent::__construct(); //первоочередной вызов конструктора
        $this->stripes = "TRUE";
    }
}

class User8{
    final function copyright(){
        echo "метод final помешает пожклассу переписать суперкласс";
    }
}

?>