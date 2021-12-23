<!doctype html>
<html class="no-js" lang="">

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

$i=0;
while ($i<=10){
    echo "You are welcome!","<br/>";
    $i++;
}
$sum = 0;
for($i=1;$i<=112;$i+=3){
    $sum = $sum + $i;
    echo "Сумма = $sum, Счетчик = $i <br/>";
}


for($i = 0;$i < 10000; $i++){
    if(strpos($i , 3) !== false && $i % 5 !== 0 ){
        echo $i . " ";
    }
}
echo "<br/>";

for ($i=1; $i<=1; $i++){
    echo rand(0, 100),"<br>";

    for ($i=1; $i<=1; $i++){
        echo rand(0, 100),"<br>";
        for ($i=1; $i<=1; $i++){
            echo rand(0, 100),"<br>";
        }
    }
}
$array = array('apple', 'orange', 'orange');
print_r(array_count_values($array));
echo "<br/>";

$a = array(-11,12,3,4,5,27,7,8,99,4);
$min_i = $max_i = 0; // индексы максимального и минимального элемента
foreach($a as $k=>$v) {
    $min_i =  $v<$a[$min_i] ? $k : $min_i;
    $max_i =  $v>$a[$max_i] ? $k : $max_i;
}
list($a[$min_i], $a[$max_i]) = [$a[$max_i],$a[$min_i]]; // меняем местами элементы

print_r($a);
echo "<br/>";
$input = array(1,2,4,4,2,5);
$result = array_unique($input);
var_dump($result);

echo "<br/>";

$arr1 = array(1,3,5,7,9);
$arr2 = array(2,4,6,8,10);

$res_arr = array_merge($arr1, $arr2);
asort($res_arr);

print_r($res_arr);
echo "<br/>";
?>
</body>
</html>