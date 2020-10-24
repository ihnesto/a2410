<?php

$link = mysqli_connect('localhost', 'root', '', '24102020');
$sql = "SELECT * FROM users";
$ret = mysqli_query($link, $sql);
while (($res = mysqli_fetch_assoc($ret)) != false) {
    //var_dump($res);
    //echo $res['name'] . "\n";
}

$sql = "SELECT * FROM users";
$ret = mysqli_query($link, $sql);
if ($ret == false) {
    $n = mysqli_errno($link);
    $s = mysqli_error($link);
    var_dump($s);
} else {
    $res = mysqli_fetch_all($ret, MYSQLI_ASSOC); 
    //var_dump($res);
    for($i = 0; $i < count($res); $i++) {
        echo $res[$i]['name'] . "\n";
    }
}
$sql = "INSERT INTO users(name, passwd) values('Sam', '3456')";
//$ret = mysqli_query($link, $sql);
if ($ret == false) {
    $n = mysqli_errno($link);
    $s = mysqli_error($link);
    var_dump($s);
}

mysqli_close();
