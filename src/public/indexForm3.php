<?php
$k=0;
if (is_array($_POST['answer'])){
    foreach($_POST['answer'] as $value)
    {
        $answer = "Голубой";
        if ($value=='Верно') {
            $k = $k + 1;
        }elseif($answer == $_POST['blue']){
            $k = $k +1;
            echo 'Верно';
            print ($_POST['blue']);
        }

        echo $value, '<br>';
    }
    echo "У вас {$k} правильных ответов", '<br>';
}
