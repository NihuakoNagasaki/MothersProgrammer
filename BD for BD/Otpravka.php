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
$querySub = "SELECT s_id from subscribers where s_name = '{$_SESSION['Name']}'";
$result = mysqli_query($link, $querySub);
$arResult = mysqli_fetch_array($result);
var_dump($arResult);
$CurrentName = $_SESSION['Name'];
//Составить запрос
$query = "insert into subscriptions set sb_subscriber = '$arResult[0]' , sb_book ='{$_POST['SoDefaultButton']}' , sb_start = NOW(), sb_finish = TIMESTAMPADD(year, 1, now()), sb_is_active ='Y' ";

$result = mysqli_query($link, $query);
var_dump($result);

header("Location: http://178.35.152.24/123.php");