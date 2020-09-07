<?php

function test1(){
    for ($i = 1; $i <= 100; $i++){
        echo $i."<br>";
    }
}
//test1();

function test2(){

    for ($i = 0; $i <=100; $i+=2){
        echo $i."<br>";
    }
}

//test2();

function test3($start,$end){
    $x = 0;
    for ($i = $start; $i<=$end; $i++){
        $x = $i +$x;
    }
    return $x;
}

//echo test3(3,100);

function test4(){
    $x = 0;
    for ($i = 1; $i<=15; $i++){
        $x += $i * $i;
    }
    return $x;
}

//echo test4();

function test5(){
    $x = 0;
    for ($i = 1;$i<=15; $i++){
        $x += sqrt($i);
    }
    echo round($x)."<br>";
    echo ($x);
}
//test5();


function test6(){
    for ($i = 1; $i<=100; $i++){
        if ($i % 3 ==0){
            echo $i."<br>";
        }
    }

}
//test6();

function test7(){
    $x = 0;
    for ($i = 1; $i <=100; $i++){
        if ($i % 7 == 0){
            $x += $i;
        }
    }
    return $x;
}

//echo test7();

function test8(){
    $x = [];
    for ($i = 1; $i<=10; $i++){
        $x [] ='x';
    }
    var_dump($x);
}

//test8();

function test9(){
    $x = [];
    for ($i = 1; $i <=10;$i++){
        $x [] = $i;
    }
    var_dump($x);
}
//test9();

function test10(){
    $x = [];
    for ($i=10; $i >0; $i--){
        $x [] = $i;
    }
    var_dump($x);
}
//test10();

function test11(){
    $x = [];
    for ($i = 1; $i <=10; $i++){
        $x [] = rand(1,10);
//        $x [] = mt_rand(1,10);

    }
    var_dump($x);
}
//test11();

function test12(){
    $x = '';
    for ($i = 1; $i <=7; $i++){
        $x .= rand(1,9);
    }
    echo $x;
}

//test12();


function test13(){
    $x = [1,2,3,4,5,6];
    $sum = 0;
    foreach ($x as $k){
        $sum += $k;
    }
    echo $sum;
}
//test13();

function test14(){
    $x = [2,5,8,12,18,21];
    $sum = 0;
    foreach ($x as $k){
        $sum += $k * $k;
    }
    echo $sum;
}

//test14();

function test15(){
    $x = [1,3,5,6,45,15,8,11,20,25];
    $sum = 0;
    foreach ($x as $k){
        if ($k >= 5 & $k <+ 20){
            $sum += $k;
        }
    }
    echo $sum;
}

//test15();