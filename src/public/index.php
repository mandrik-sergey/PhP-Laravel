<!doctype html>
<html class="no-js" lang="ru">

<head>
    <meta charset="utf-8">
    <title>Palmo Helloe world</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <meta name="theme-color" content="#fafafa">
</head>

<body>
<script src="script.js">  </script>
<?php
//  $name = 'Otto';
//    echo $name, "<br/>";
//
//  $a = 8;
//  $b = 1;
//    echo $a + $b,' ', $a - $b, ' ', $a / $b, ' ', $a * $b,' ', $a % $b, "<br/>";
//
//  $number = 5;
//  $result = pow($number,3);
//    echo $result, "<br/>";
//
//  $age =23;
//    if ( 18 <= $age && $age <= 60){
//        echo "Вам ещё работать и работать!","<br/>";
//}elseif ($age < 18){
//        echo "Вам ещё рано работать!","<br/>";
//    }else{
//        echo "Пора на отдых!","<br/>";
//    }
//
//  $dayNumber = 7;
//  if (1<= $dayNumber && $dayNumber <= 5){
//      echo "Это рабочий день!","<br/>";
//  }elseif (6<=$dayNumber && $dayNumber <= 7) {
//      echo "Это выходной!","<br/>";
//  }else{
//      echo "Сообщение об ошибке!","<br/>";
//  }
//
//  const DAYS_COUNT = 7;
//  define("MONTH_COUNT", 12);
//    echo "Константа так ", DAYS_COUNT,"<br/>","Константа сяк ", MONTH_COUNT,"<br/>";
//
//  $x = 21;
//  $y = 18;
//
//  if ($x===$y){
//      echo "Сумма чисел = ", $x + $y,"<br/>";
//  }elseif($x>$y){
//      echo "Разница чисел = ", $x - $y,"<br/>";
//  }elseif ($x<$y){
//      echo "Разница = ", $y - $x,"<br/>";
//  }
//  $z = rand(0,100);
//  echo "Случайное число от 0 до 100 = ",$z," ";
//  if ($z % 2 == 0){
//      echo "Число кратно","<br/>";
//  }else{
//      echo "Число не кратно","<br/>";
//  }

//
//$string="abcdefg";
//$needle = "abc";
//$addToEnd = 'zzz';
//if (strpos($string,$needle)===0){
//    $newString= implode("www",explode("abc",$string));
//}else{
//    $newString = $string . $addToEnd;
//}
//    echo $newString, "<br/>";
//
//$String = 'i l';
//if (strlen($String) > 10){
//    $String = substr($String, 0, 6);
//}else {
//    $String = str_pad($String,12, "o");
//}
//    echo $String, '<br/>';
//$str = '020114sdsdddaawed';
//$count = preg_match_all('/\\d/', $str);
//echo $count,'<br/>';
//
//$stringTwo = 'word letter abc you ';
//$stringThree = preg_replace("'word'","letter",$stringTwo);
//    echo $stringThree, '<br/>';
//
//$stringFour = 'sdsfsxabcgjjgjgjxaxvjxabffjfjfjfxabc';
//$stringFive = str_replace('xabc', 'abc', $stringFour);
//
//echo $stringFive, '<br/>';
//
//
//$stringSix='ababaaababbbbaabbababababbaa';
//echo substr_count($stringSix, 'aba'), '<br/>';
//
//
//$s='ABC'; echo $s[0].strtolower(substr($s, 1)),'<br/>';
//
//$str = 'Парень Молодой Писька';
//preg_match_all('/ (.)/iu',$str,$m);
//
//$m2 = explode(' ', $str);
//echo $m2[0] .' '. $m[1][0]. '.' . $m[1][1].'.';

//$i=0;
//while ($i<=10){
//    echo "You are welcome!","<br/>";
//    $i++;
//}
//$sum = 0;
//for($i=1;$i<=112;$i+=3){
//    $sum = $sum + $i;
//    echo "Сумма = $sum, Счетчик = $i <br/>";
//}
//
//
//for($i = 0;$i < 10000; $i++){
//    if(strpos($i , 3) !== false && $i % 5 !== 0 ){
//        echo $i . " ";
//    }
//}
//echo "<br/>";
//
//for ($i=1; $i<=1; $i++){
//    echo rand(0, 100),"<br>";
//
//    for ($i=1; $i<=1; $i++){
//        echo rand(0, 100),"<br>";
//        for ($i=1; $i<=1; $i++){
//            echo rand(0, 100),"<br>";
//        }
//    }
//}
//$array = array('apple', 'orange', 'orange');
//print_r(array_count_values($array));
//echo "<br/>";
//
//$a = array(-11,12,3,4,5,27,7,8,99,4);
//$min_i = $max_i = 0; // индексы максимального и минимального элемента
//foreach($a as $k=>$v) {
//    $min_i =  $v<$a[$min_i] ? $k : $min_i;
//    $max_i =  $v>$a[$max_i] ? $k : $max_i;
//}
//list($a[$min_i], $a[$max_i]) = [$a[$max_i],$a[$min_i]]; // меняем местами элементы
//
//print_r($a);
//echo "<br/>";
//$input = array(1,2,4,4,2,5);
//$result = array_unique($input);
//var_dump($result);
//
//echo "<br/>";
//
//$arr1 = array(1,3,5,7,9);
//$arr2 = array(2,4,6,8,10);
//
//$res_arr = array_merge($arr1, $arr2);
//asort($res_arr);
//
//print_r($res_arr);
//echo "<br/>";
//
//
//$week = [ "ru" =>[ 1=> 'Понедельник', 2=> 'Вторник', 3=> 'Среда', 4=> 'Четверг', 5=> 'Пятница', 6=>'Суббота', 7=> 'Воскресенье'],
//               "en"=> [1 =>'Monday', 2=>'Tuesday', 3=> 'Wednesday', 4=> 'Thursday', 5=> 'Friday', 6=> 'Saturday', 7=> 'Sunday']
//];
//echo $week['ru']['1'] . " " . "Это по-русски!","<br/>";
//echo $week['en']['3'] . " " . "Thi is English!","<br/>";
//
//$lang = 'ru';
//$day = 3;
//
//echo $week[$lang][$day];
//echo "<br/>";
//$arrOne = [1, 2, 3, 4, 5, 6,7,8,9,];
//foreach ($arrOne as $value) {
//    if ($value > 0 && $value < 4) {
//        echo "$value"  . ",";
//        echo "<br/>";
//    }elseif($value>3 && $value <= 6){
//        echo "$value"  . ",";
//    }elseif ($value>6 && $value < 10){
//        echo "$value" .",";
//        echo "<br/>";
//    }
//}
//$arrayNumber = [1,2,3,4,5,6,7,8,9,10];
//$index = 2;
//function arrayReplacement(array &$array, $key, $key2)
//{
//    if (isset($array[$key]) && isset($array[$key2])) {
//        list($array[$key], $array[$key2]) = array($array[$key2], $array[$key]);
//        return true;
//    }
//
//    return false;
//}
//arrayReplacement($arrayNumber,1,$index);
//print_r($arrayNumber) . "<br/>";


//$week = [ "ru" =>[ 1=> 'Понедельник', 2=> 'Вторник', 3=> 'Среда', 4=> 'Четверг', 5=> 'Пятница', 6=>'Суббота', 7=> 'Воскресенье']];

//function daysWeek($day)
//{
//    if ($day == 1){
//        echo "Понедельник";
//    }elseif ($day == 2){
//        echo "Вторник";
//    }elseif ($day == 3) {
//        echo "Среда";
//    }elseif ($day == 4) {
//        echo "Четверг";
//    }elseif ($day == 5) {
//        echo "Пятница";
//    }elseif ($day == 6) {
//        echo "Суббота";
//    }elseif ($day == 7) {
//        echo "Воскресенье";
//    }elseif ($day > 7 || $day === 0 ){
//        echo "0";
//    }
//
//}
//echo daysWeek(0), "<br/>";
//
//$strOne = 'Hello World';
//function slug($str){
//    $arr = explode(" ",$str);
//    $str = implode("-",$arr);
//    echo $str = mb_strtolower($str);
//}
//echo slug($strOne);
//
//
//
//$products = [
//    ['name' => 'Телевизор', 'prise' => '400', 'quantity' => 1],
//    ['name' => 'Телефон', 'prise' => '300', 'quantity' => 3],
//    ['name' => 'Кроссовки', 'prise' => '150', 'quantity' => 2]
//];
//
//function basket(array $arr)
//{
//    $result = 0;
//    $resultTwo = 0;
//    foreach ($arr as $value) {
//
//        $sumOne = 'prise' * 'quantity';
//        $sumTwo = 'quantity' * $value;
//        $result = $sumTwo;
//    }
//    return $result;
//}
//
echo "<br/>";

    echo "<div> Форма к заданию №1 </div>", "<br/>" ;
    // Form #1
    echo "<form name='city' method='post' action='indexForm1.php'> 
          <label> Введите ваш город: <input type='text' name='youCity'> </label>
          <input type='submit' name='send' value='Отправить'>
          </form>", "<br/>";

    echo "<div> Форма к заданию №2 </div>", "<br/>";
    // Form #2
    echo "<form name='youAge' method='post' action='indexForm1.php'>  
                   <input type='radio' id='age 20' name='age' value='Вам 20 лет'>
                   <label for='age 20'> Вам 20 лет </label>
                   <input type='radio' id='age 20-25' name='age' value='Вам 20-25 лет'>
                   <label for='age 20-25'> Вам 20-25 лет </label>
                   <input type='radio' id='age 26-30' name='age' value='Вам 26-30 лет'>
                   <label for='age 26-30'> Вам 26-30 лет </label>
                   <input type='radio' id='age ove 30' name='age' value='Вам более 30 лет'>
                   <label for='age ove 30'> Вам более 30 лет </label>
                   
          </form>";
    echo "<br/>";

   echo "<form name='feedback' method='post' action='indexForm2.php' enctype='multipart/form-data'>
            <label for='name'> Наименование товара: </label>
            <input type='text' name='name' id='name'>
            <label for='manufacturer'> Производитель: </label>
            <input type='text' name='manufacturer' id='manufacturer'>
            <label for='comment'> Краткая характеристика:</label>
            <textarea rows='5'cols='30'  name='comment' id='comment'></textarea> <br/>
            <input type='file' name='avatar' value='Фото'>
            <input type='submit' name='send' value='Отправить'>
        </form>";

   echo "<br/>";

   echo "Тест на соответствие цветов и природных явлений." ,"<br/>";

   echo " <form name='test' method='post' action='indexForm3.php' enctype='multipart/form-data'>
                <p> Какой пятый цвет радуги? </p>
                <input type='text' name='blue'>
                <p> Какая тема теста? </p>
                <input name='answer[0]' type='radio' value='Верно'> Тест на соответствие цветов и природных явлений. <br>
                <input name='answer[0]' type='radio' value='Не верно'> Тест на соответствие картинок и описания. <br>
                <input name='answer[0]' type='radio' value='Не верно'> Тест на проверку моторики. <br>
                <input name='answer[0]' type='radio' value='Не верно'> Тест на проверку Вашего развития. <br>   
                
                <p> Зеленый цвет присутствует в таких явлениях? </p>
                <input name='answer[1]' type='checkbox' value='Верно' > Полярное сияние. <br>
                <input name='answer[1]' type='checkbox' value='Верно' > Радуга. <br>
                <input name='answer[1]' type='checkbox' value='Не верно'> Солнечный свет. <br>
                <input name='answer[1]' type='checkbox' value='Не верно'> Лунный свет. <br> 
                
                <p> На какой картинке изображен паргелий? </p>
                   
                <!-- <input name='answer[2]' type='image' width='300px'  src='uploads/ringRainbow.jpg' value='Не верно'> <br>
                <input name='answer[2]' type='image' width='300px' src='uploads/northernLights.jpg' value='Не верно'> <br>
                <input name='answer[2]' type='image' width='300px' src='uploads/pargelie.jpg' value='Верно'> <br>
                <input name='answer[2]' type='image' width='300px' src='uploads/solarPillars.jpg' value='Не верно'> <br> -->
                
                <input name='answer[2]' type='radio' value='Не верно' > <img src='uploads/ringRainbow.jpg' width='300px' /> <br/>   
                <input name='answer[2]' type='radio' value='Не верно'> <img src='uploads/northernLights.jpg' width='300px' /> <br/>
                <input name='answer[2]' type='radio' value='Верно'> <img src='uploads/pargelie.jpg' width='300px' /> <br/>
                <input name='answer[2]' type='radio' value='Не верно'>  <img src='uploads/solarPillars.jpg' width='300px' /> <br/>
                
                <input type='submit' name='sum' value='Ответить'>                  
          </form>";

?>
</body>
</html>