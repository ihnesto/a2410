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


git config --local user.name Vasya
git config --local user.email Vasya@abc.com

git init

git status

git add *

git commit -m"Bug fixed"

git log

git remote add a2410 https://github.com/ihnesto/a2410.git
git remote -v
git push a2410 master
