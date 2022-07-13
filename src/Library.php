<?php

namespace iren\composer_lesson;

class Library{
    public function library(){
        echo "<form action='index.php' method='post'>
            First number: <input type='number' name='num1' step='0.001'>
            <br>
            Operatop: <input type='text' name='op'>
            <br>
            Second number: <input type='number' name='num2' step='0.001'>
            <br>
            <input type='submit'>
        </form>";
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $op = $_POST["op"];

        if ($op == "+"){
            echo $num1 + $num2;
        } elseif ($op == "-"){
            echo $num1 - $num2;
        } elseif ($op == "/"){
            echo $num1 / $num2;
        } elseif ($op == "*"){
            echo $num1 * $num2;
        } else {
            echo "Invalid operator";
        }
    }
}