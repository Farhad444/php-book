<?php
    echo "<a href='../php2book/form1.html'>Главная страница</a><br>"; 
    // ini_set('display_errors',1);
    // error_reporting(E_ALL ^E_NOTICE);

//Основы организация классов
class Cat{
  public $weight = 1; //вес кота до еды
  public function eat(){ //функция приема пищи
      $this->weight++;   //после того как поех, обращаемся к весу и увеличиваем на единицу
  }
}
$cat = new Cat(); //создание нового метода
$cat->weight = 3; //обращение и изменение значения свойства
$cat ->eat(); // обращение к функции 
print $cat->weight; // вывод значения свойства
print "<br>";

//------------работа с меню-------------
class Entree {
  public $name; //имя блюда
  public $ingredients = array(); //ингредиенты
  public function hasIngredient ($ingredient){ //проверка значения
    return in_array($ingredient, $this ->ingredients);
  }
  public static function getSizes(){
    return ['smal', 'medium', 'large'];
  }
  // конструктор класса. Конструктор не возвращает значение, не может использовать возвращаеомое значение
  // public function __construct($val_1, $val_2){
  //   $this -> name = $val_1;
  //   $this -> ingredients = $val_2;
  // }
}

// $soup = new Entree('Chicken soup', ['chicken', 'water']);// передается значнеи для конструтора
$soup = new Entree; //создание экземпляра суп
$soup->name = 'Chicken Soup'; // название
$soup->ingredients = ['chicken', 'water']; // задали ингредиенты

$sandwich = new Entree;
$sandwich ->name = 'Chicken Sandwich';
$sandwich ->ingredients = ['chicken', 'bread'];

$tea = new Entree;
$tea ->name = 'Tea';
$tea ->ingredients = ['water', 'lemon'];

$reserves = ['chicken' => ['storeg-1', 2],
             'lemon' => ['storeg-1', 3],
             'bread' => ['counter', 5], 
             'water' => ['storeg-2', 1]]; //задаем продукты в резерве, место хранение и количество в остатке

foreach ($reserves as $ing => $val){
  if($soup->hasIngredient($ing)){
    $reserves[$ing][1]--;
    print "Soup contains $ing <br>";
  }
  if($sandwich->hasIngredient($ing)){
    $reserves[$ing][1]--;
    print "sandwich contains $ing<br>";
  }
  if($tea->hasIngredient($ing)){
    $reserves[$ing][1]--;
    print "sandwich contains $ing<br>";
  }
}
print "<br>"; // контроль наличия продуктов
foreach ($reserves as $ing => $val){
  print "остаток $ing на складе $val[0], $val[1] штук  <br>";
  if ($val[1] < 0){
    print "!!!!!! закончился $ing, нужно заказать<br>";
  }
}

$sizes = Entree::getSizes();
print $sizes[1] . "<br>";
//---
//------------Индикация ощибок с помощю исключений_------------
class Entree_1{
  public $name;
  public $ingredients = array();
  public function __construct($val_1, $val_2){
      if(! is_array($val_2)){
      throw new Exception('$val_2 must be an array (должно быть массивом)');
      }
   $this ->name = $val_1;
   $this ->ingredients = $val_2;
  }
  public function hasIngredient($ingredient){
    return in_array($ingredient, $this ->ingredients);
  }
}

$soup = new Entree_1('Chicken soup', ['chicken', 'water']);
$sendwich = new Entree_1('Chicken Sandwich', ['chicken', 'water']);

// ---- перехват ошибки ----
try{
$dirnk = new Entree_1('Glass of Milk', 'milk'); //error
if ($drink->hasIngredient('milk')){
  print "Yamy!";
}
//--- вывод сообщения по ошибке
}catch (Exception $e){
  print "Error (ошибка) . {$e->getMessage()}";
}
foreach($reserves as $ing => $val){
  if($soup ->hasIngredient($ing)){
    print "в супе есть $ing <br>";
  }
  if($sandwich ->hasIngredient($ing)){
    print "в сендвиче есть $ing <br>";
  }

}

echo "<br> test";

?>