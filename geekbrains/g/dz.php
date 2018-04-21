<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>задачи</title>
    </head>
    <body>
<?php
    // Задание №1
    $a = rand(-10, 10);
    $b = rand(-10, 10);
    if($a >= 0 and $b >= 0){
        if($a >= $b){
            echo $a - $b;
        }
        else {
            echo $b - $a;
        }
    }
    elseif($a <= 0 and $b <= 0){
        echo $a * $b;
    }
    else{
        echo $a + $b;
    }
    echo "<hr>";
    // Задание №2
    
    $d = 6;
    switch ($d){
    case 0:
        echo "0<br>";
    case 1:
        echo "1<br>";
    case 2:
        echo "2<br>";   
    case 3:
        echo "3<br>";   
    case 4:
        echo "4<br>";   
    case 5:
        echo "5<br>";   
    case 6:
        echo "6<br>";   
    case 7:
        echo "7<br>"; 
    case 8:
        echo "8<br>";   
    case 9:
        echo "9<br>";   
    case 10:
        echo "10<br>";   
    case 11:
        echo "11<br>";   
    case 12:
        echo "12<br>";   
    case 13:
        echo "13<br>";
    case 14:
        echo "14<br>";   
    case 15:
        echo "15<br>";   
    }
    echo "<hr>";
    // Задание №3
    
    function sum($f, $g){
        return $f + $g;
    }
    function dif($f, $g){
        return $f - $g;
    }
    function mylt($f, $g){
        return $f * $g;
    }
    function share($f, $g){
        return $f / $g;
    }
    // Задание №4
    
    function mathOperation($f, $g, $operation){
        switch ($operation){
            case '+':
                $rezult = sum ($f, $g);
                 break;
            case '-':
                $rezult = dif ($f, $g);
                 break; 
            case '*':
                $rezult = mylt ($f, $g);
                 break; 
            case '/':
                $rezult = share ($f, $g);
                 break; 
            default:
                $rezult =  '';
        }
        return $rezult; 
        
    }
    echo mathOperation(5, 3, '/');
    echo "<hr>";
    // Задание №6
    
    function power($val, $pow){     
        if($pow==1){
            return $val;
           
        }
            
        return  $val *= power($val, $pow-1);
          
    }
    echo power(4, 4);
    echo "<hr>";
    // Задание №7
    
    function dates (){
        $d = date('H');
        
        if($d >= 5 and $d <=20){
            echo $d ." часов";
        }
        elseif ($d >= 2 and $d <= 4 or $d >= 22 and $d <= 24) {
            echo $d ." часа";
        }
        else {
            echo $d ." час";
        }
    }
    dates();
?> 
  </body>
</html>       