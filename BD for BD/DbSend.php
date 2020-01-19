<?php
$link = mysqli_connect(
    'localhost', //Сервер
    'root', //Имя пользователя
    'root', //Пароль
    'db1' //Имя БД
);

$query = "INSERT INTO subscribers SET s_name = '{$_POST['name']}'";
$result = mysqli_query($link, $query);

header("Location: http://178.35.152.24/123.php");