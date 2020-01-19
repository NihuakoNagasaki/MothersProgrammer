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

//Составить запрос
$query = 'SELECT s_name, s_id FROM subscribers'; //users заменить на имя таблицы, к которой хочется обратиться
//Выполнить запрос
$result = mysqli_query($link, $query);
var_dump($result); // Информация о результате запроса, не сам результат
//Можно, например, предварительно узнать, сколько записей получено
echo "<br>Vsego zapisey vernulos: " . (mysqli_num_rows($result)) . "<br>";

//Получить список записей


?>
<?php

$arResult=0;
//echo '<pre>';
//var_dump($_POST);
//echo '</pre>';
while($arResult = mysqli_fetch_array($result)){
//    echo '<pre>';
//    var_dump($arResult);
//    echo '</pre>';
    if ($arResult[0]===$_POST['name']) {
        session_start();
        $_SESSION ['Name'] = "$arResult[0]";
        $_SESSION ['id'] = "$arResult[1]";
        header("Location:http://178.35.152.24/123.php");


        exit();
    }
else {
    header("Location:http://178.35.152.24/Sub.php");
}

}
