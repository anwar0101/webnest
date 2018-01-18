<?php
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];

    if(isset($_POST['add'])){
        echo "result = " . ($number1+$number2);
    } else if(isset($_POST['sub'])){
        echo "result = " . ($number1-$number2);
    } else if(isset($_POST['mul'])){
        echo "result = " . ($number1*$number2);
    } else if(isset($_POST['div'])){
        echo "result = " . ($number1/$number2);
    }
?>
