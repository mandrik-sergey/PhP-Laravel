<?php
/** @var TYPE_NAME $answer */
$answer = "Голубой";

$p=0;

if($answer == $_POST['blue']){
    echo "Верно", "<br/>";
    $p = $p + 1;

}

$k=0;
if (is_array($_POST['answer'])){
    foreach($_POST['answer'] as $value)
    {

        if ($value=='Верно') {
            $k = $k + 1;
        }


        echo $value, '<br>';
    }
}

$z = $k + $p;

echo "У вас {$z} правильных ответов", '<br>';
