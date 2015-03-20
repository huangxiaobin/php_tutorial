<?php
/*
    echo "hello PHP!";
    echo 12345;
*/

// variable
/*    
    $sometext = "harry poter";
    $somenumber = 12345;
    
    echo $sometext.$somenumber;
*/

// math
/*
    $num1 = 2015;
    $num2 = 2014;
    
    echo $num1-$num2."<br/>";
    echo $num1+$num2."<br/>";
*/

// if-else
/*
    $num1 = 1;
    $num2 = 2;
    if ($num1 < $num2) {
        echo "num1 < num2";
    } else {
        echo "num1 > num2";
    }
*/

// if-elseif-else
/*
    $num1 = 1;
    $num2 = 1;
    if ($num1 < $num2) {
        echo "num1 < num2";
    } elseif ($num1 == $num2) {
        echo "num1 == num2";
    } else {
        echo "num1 > num2";
    }
*/

// switch
/*
    //$country = "USA";
    //$country = "Japan";
    $country = "France";
    
    switch ($country) {
        case  "USA":
            echo "you are in USA";
            break;
        case "Japan":
            echo "you are in Japan";
            break;
        default :
            echo "you messed up";
            break;
    }
*/

// while
/*
    $num = 1;
    while ($num < 1) {
        echo $num."<br/>";
        $num++;
    }
*/
    
// do-while
/*
    $num = 1;
    do {
        echo $num."<br/>";
        $num++;
    } while ($num < 1);
*/

// for
/*
    for ($num = 1; $num < 5; $num++) {
        echo $num."<br/>";
    }
*/

// array
/*
    $people = array('tom', 'jack', 'tony');
    
    echo $people[0]."<br/>";
    echo $people[1]."<br/>";
    echo $people[2]."<br/>";
*/
// 11 associate array
/*
    $people = array('tom'=>'1', 'jack'=>'2', 'tony'=>'3');
    echo $people['tom']."<br/>";
    echo $people['jack']."<br/>";
    echo $people['tony']."<br/>";
*/

// change array
/*
    $people[0] = 'tom';
    $people[1] = 'jack';
    $people[] = 'tony';
    
    echo $people[0]."<br/>";
    echo $people[1]."<br/>";
    echo $people[2]."<br/>";
    
    $people[0] = 'mike';
    echo $people[0]."<br/>";
*/

// loop array
/*
    $people = array('tom', 'jack', 'tony');
    
    for ($i = 0; $i < sizeof($people); $i++) {
        echo $people[$i]."<br/>";
    }
*/

// foreach
/*
    $people = array('tom', 'jack', 'tony');
    
    foreach($people as $x) {
        echo $x."<br/>";
    }
*/

// function
/*
    test_func();
    function test_func() {
        echo "test_func is called <br/>";
    }
*/

// function parameter
/*
    function test_func($arg) {
        echo $arg." is good <br/>";
    }    
    
    test_func("tom");
    test_func("jack");
*/

// function return
    function add_num($num1, $num2) {
        return $num1+$num2;
    }
    
    echo add_num(11, 22);
?>