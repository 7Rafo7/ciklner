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
        $x = $i + $x;
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


function test16(){
    for ($i = 1;$i<=9;$i++){
        $x ='';
        for ($y = 1;$y <=$i;$y++){
            $x .= $i;
        }
        echo $x."<br>";
    }
}

//test16();

function test17(){
    $x = [1,2,3,4,5,6,7,9,10,11];
    $u = 0;
    for ($i = $x[0]; $i <= count($x); $i++) {
        if (!array_search($i,$x)){
            $u = $i;
        }
    }
    return $u;
}

//echo test17();

function test18(){
    $x = [2,1,4,3,7,5,8,9];
    $u = 0;
    for ($i = $x[0]; $i<=count($x); $i++ ){
        if ($i+1 != $x[$i]){
            $u =  $x[$i]-1;
            break;
        }
    }
    return $u;
}
//echo test18();

function test19(){
    $x = [2,1,4,3,7,5,9,8];
    sort($x);
    $u = 0;
    for ($i = $x[0]; $i<=count($x); $i++ ){
        if ($i+1 != $x[$i]){
            $u =  $x[$i]-1;
            break;
        }
    }
    return $u;
}

//echo test19();

function test20(){
    $x = [2,1,4,3,9,5,7,8];
    $u = 0;
    $y = 0;
    $sum = 0;
    for ($i = $x[0]; $i <= count($x); $i++ ){
        if ($i<count($x)){
            $u += $x[$i];
        }
        $y += $i + 1;
        $sum = $y - $u;
    }
    return $sum;
}
echo test20();

