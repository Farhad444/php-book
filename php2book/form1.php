<?php
print "Hello, ";
//вывести ан экран значение параметра 'user'
//из переданной на обработку формы
// print $_POST['code'];
$User1 = "Piter";
$Piter = "123";

$User2 = "Jonn";
$Jonn = "321";

$User3 = "Klif";
$Klif = "234";

$login = strip_tags(trim($_POST['login'])); //без тегов html и php, убирает пробелы
$pass  = strip_tags(trim($_POST['pass']));

  if ($login == '' || $pass == ''){
    echo "Одно из полей пароля и логина пустое <br><a href='form1.html'>Главная страница</a>"; 
  }
  //используя вункцию strcasecmp, логин сравниваеться без учета регистра
  elseif((strcasecmp($login,$User1)==0)&&($pass == $$User1)){
      echo "Здравствуйте Piter <br><a href='form1.html'>Главная страница</a>";
  }
  elseif((strcasecmp($login,$User2)==0)&&($pass == $$User2)){
      echo "Здравствуйте Jonn <br><a href='form1.html'>Главная страница</a>";
  }
  elseif(($login == $User3)&&($pass == $$User3)){
      echo "Здравствуйте Klif <br><a href='form1.html'>Главная страница</a>";
  }
  else{
    echo " Логин или пароль не верный, повторите попытку <br><a href='form1.html'>Главная страница</a>";   
  } 
// else{
//   echo " Логин или пароль не верный, повторите попытку <a href='form1.html'>Главная страница</a>";
// }
// $code = trim($_POST['code']);
// $city = $_POST['city'];
// $tel = $_POST['tel'];
// $code_lenght = strlen($code);
// $num = $_POST['num'];
// $com = $_POST['com'];
// //принимает только число в количестве 5 ти штук
// if($code_lenght !=5){
//   // exit ("Пожалуйста введите вод равный 5 цифрам");
//   echo " опжалуйста введите данные корректно! <a href='form1.html'>Главная страница</a>";
// }
// else {
//   print "спасибот за ввод данных" . $code ."<br>";
//   print trim($city). "<br>";
//   print strip_tags(trim($tel)) . "<br>"; //убирает пробелы и удаляет html и php теги
//   print "XXX" . substr($num, -4, 4) . "<br>"; //отобрадает последние 4 цифры
//   print substr($com, 0, 30) . "....<br>"; //скращает коментарий от 0-вой позиции до 30 ти символов
// }
// print "!";

//форму HTML можно загрузить в php формете через here document
// if ($_POST['user']) {
//   print "Hello, ";
//   print $_POST['user'];
//   print "!";
// }
// else {
//   print <<<_HTML_
// <form method="post" action="$_SERVER[PHP_SELF]">
// Your Name: <input type="text" name="user" />
// <br>
// <button type="submit">Say Hello</button>
// <form/>
// _HTML_;
// }


?>
