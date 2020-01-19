<?php session_start();?>
<?php
$link = mysqli_connect(
    'localhost', //Сервер
    'root', //Имя пользователя
    'root', //Пароль
    'db1' //Имя БД
);

if ( !$link ) {
    die("Ничего не получилось, никаких БД сегодня(");
    mysqli_close($link);
}

var_dump($_POST);
echo "<br>";
var_dump($_SESSION);
$querySub = "DELETE FROM `db1`.`subscriptions` WHERE (`sb_id` = '{$_POST['SoDefaultButton']}');";
$result = mysqli_query($link, $querySub);
$arResult = mysqli_fetch_array($result);
var_dump($arResult);
header("Location: http://178.35.152.24/Db_page.php");