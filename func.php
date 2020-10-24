<?php

$a = 5;

$b = [11, 23, 32, 4];

$c = count($b);

function maxArrayElem($m) {
    
    if ($m == null)
        return null;
    $max = 100;

    for($i = 0; $i < count($m); $i++) {
        if ($m[$i] > $max) {
            $max = $m[$i];
        }
    }
    return $max;
}

function testMaxArrayElem() {

    $testArray = [1,5,83,3,56];
    
    $x = maxArrayElem($testArray);

    if ($x == 83) {
        echo "testing function maxArrayElem is passed";
    } else {
        echo "testing function maxArrayElem is failed";
    }

    $x = maxArrayElem(null);
    if ($x == null) {
        echo "testing function maxArrayElem is passed";
    } else {
        echo "testing function maxArrayElem is failed";
    }
}


$x = maxArrayElem($b);
echo $x;

$d = [27,45,67,48,69];
$x = maxArrayElem($d);
echo $x;

mysql_connect

mysqli_connect

PDO_MySQL